<?php

App::uses('AppController', 'Controller');

class ProcesosController extends AppController {

    public function nueva_compra() {
        $this->set('categorias', $this->Categoria->options());
        $this->set('unidades', $this->unidades);
        $this->set('condiciones', $this->condicionesPago);
        $this->set('condiciones', $this->requisitosExcluyentes);

        if ($this->request->is('post')) {
            $this->request->data['Proceso']['user_id'] = $this->Auth->user('id');
            $this->request->data['Proceso']['proceso_nro'] = $this->Proceso->buscarUltimoProcesoUsuario($this->Auth->user('id')) + 1;
            if ($this->Proceso->saveAll($this->request->data)) {
                $this->Flash->success('El Proceso fue creado con éxio.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            } else {
                $this->Flash->error(__('Error al grabar el Proceso.'));
            }
        }
    }

    public function nuevo() {
        $this->set('categorias', $this->Categoria->options());
        $this->set('subcategorias', $this->Subcategoria->options());
        $this->set('unidades', $this->Proceso->unidades);
        $this->set('condiciones', $this->Proceso->condicionesPago);
        $this->set('requisitos', $this->Proceso->requisitosExcluyentes);

        //checkeo si el usuario tiene proceso en borrador creado
        $borrador = $this->Proceso->find('first', [
            'conditions' => [
                'Proceso.user_id' => $this->Auth->user('id'),
                'Proceso.estado' => 'Borrador'
            ],
        ]);

        //si no tiene items, lo borro 
        if (isset($borrador['Proceso']) && empty($borrador['Item'])) {
            $this->Proceso->delete($borrador['Proceso']['id']);
            $borrador = false;
        }

        if ($borrador) {
            $this->set('borrador_id', $borrador['Proceso']['id']);
            $this->set('proceso', $borrador['Proceso']);
            $this->set('items', $borrador['Item']);
        } else {
            //creo proceso en borrador y paso ID para poder asignarlo a los items.
            $this->Proceso->save(['Proceso' => ['user_id' => $this->Auth->user('id'), 'estado' => 'Borrador']]);
            $this->set('nuevo_id', $this->Proceso->getLastInsertId());
        }

        if ($this->request->is('post')) {
            $this->request->data['Proceso']['user_id'] = $this->Auth->user('id');
            $this->request->data['Proceso']['proceso_nro'] = $this->Proceso->buscarUltimoProcesoUsuario($this->Auth->user('id')) + 1;
            if ($this->Proceso->saveAll($this->request->data)) {
                $this->Flash->success('El Proceso fue creado con éxio.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            } else {
                $this->Flash->error(__('Error al grabar el Proceso.'));
            }
        }
    }

    public function ajax_set_info_general() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $fecha_fin = $this->dateYMD($this->request->data['fecha_fin']);
        $fecha_entrega = $this->dateYMD($this->request->data['fecha_entrega']);
        $this->Proceso->updateAll([
            'referencia' => "'" . $this->request->data['referencia'] . "'",
            'fecha_fin' => "'" . $fecha_fin . "'",
            'fecha_entrega' => "'" . $fecha_entrega . "'",
            'detalles' => "'" . $this->request->data['referencia'] . "'",
            'condicion_pago' => "'" . $this->request->data['condicion_pago'] . "'",
            'requisitos_excluyentes' => "'" . $this->request->data['requisitos_excluyentes'] . "'",
            'estado' => "'1'"
                ], [
            'Proceso.id' => $this->request->data['id']
        ]);
        
        return $this->render("/ajax", "ajax");
    }

    public function ajax_eliminar_borrador() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Proceso->delete($this->request->data['id'])) {
            $this->set("data", true);
            return $this->render("/ajax", "ajax");
        }
    }

    public function view($proceso_id = null) {

        $proceso = $this->Proceso->findById($proceso_id);
        if (!$proceso || $proceso['Proceso']['estado'] !== '1') {
            $this->Flash->error(__("El proceso al que intenta acceder no es un proceso activo."));
            $this->redirect($this->referer());
        }
        $proceso = $this->Proceso->configurarRequisitosExcluyentes($proceso);
        $proceso = $this->Proceso->validarTitularidadDelProceso($proceso, $this->Auth->user('id'));

        $itemsIds = $this->Proceso->Item->getItemsIds($proceso);
        $ofertas = $this->Proceso->Oferta->getOfertas($itemsIds);

        $proceso['Item'] = $this->Proceso->Item->setMejoresOfertas($proceso['Item'], $ofertas);
        $proceso['Item'] = $this->Proceso->Item->setCantidadProveedores($proceso['Item'], $ofertas);


        $this->set('proceso', $proceso['Proceso']);
        $this->set('items', $proceso['Item']);
    }

    public function index() {
        $procesos = $this->Proceso->getProcesosActivos();
        $this->set('procesos', $procesos['procesos']);
    }

    public function categoria($categoria_id = null) {

        $procesos = $this->Proceso->getProcesosActivos($categoria_id);

        $this->set('categorias', $procesos['categorias']);
        $this->set('procesos', $procesos['procesos']);
    }

    public function edit($id = null) {

        $proceso = $this->Proceso->findByIdAndUserId($id, $this->Auth->user('id'));
        //valido que por URL solo se pueda acceder a procesos activos y propios.
        if ($proceso && $proceso['Proceso']['estado'] == 1) {
            $this->set('categorias', $this->Categoria->options());
            $this->set('unidades', $this->Unidad->options());
            $this->set('condiciones', [
                'Contado' => 'Contado',
                '30 dias' => '30 dias',
                '30-60 dias' => '30-60 dias',
                '30-60-90 dias' => '30-60-90 dias',
            ]);
//            debug($proceso);die;
            $this->set('proceso', $proceso['Proceso']);
            $this->set('items', $proceso['Item']);

            //permitir editar solamente items sin oferta. 
//            $this->set('hidden', $this->Proceso->encodeItems($proceso['Item']));
        } else {
            $this->Flash->error('El proceso al que intenta acceder no es válido.');
            return $this->redirect(array('controller' => 'procesos', 'action' => 'mis_procesos'));
        }


        if ($this->request->is('post')) {
            $postId = $this->request->data['Proceso']['id'];
            if ($postId !== $id) {
                $this->Flash->error('ID ADULTERADO.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            }
            $this->request->data['Proceso']['user_id'] = $this->Auth->user('id');
            $items = $this->request->data['Item'];


            if (empty($items['categorias']) || empty($items['subcategorias']) || empty($items['nombres']) || empty($items['cantidades'])) {
                $this->Flash->error(__('Faltan datos en los Item del proceso.'));
            } else {
                //borro todos los item anteriores
                $borrarIds = $this->Proceso->Item->find('list', ['conditions' => ['proceso_id' => $id]]);
                $this->Proceso->Item->deleteAll(['Item.id IN' => $borrarIds]);
//                debug($borrarIds);
//                die;

                $this->request->data['Item'] = $this->Proceso->decodeItems($this->request->data['Item']);

                //actualizo proceso   
                if ($this->Proceso->saveAll($this->request->data)) {
                    $this->Flash->success('El Proceso fue actualizado con éxio.');
                    return $this->redirect(array('controller' => 'procesos', 'action' => 'mis_procesos'));
                } else {
                    $this->Flash->error('Error al actualizar el Proceso.');
                    return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
                }
            }
        }
    }

    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Proceso->delete($id)) {
            $this->Flash->success('El proceso fue eliminado exitosamente.');
            $this->redirect(array('action' => 'mis_compras'));
        }
    }

    public function mis_compras() {
        $procesos = $this->Proceso->misProcesosActivos($this->Auth->user('id'));

        if (!$procesos) {
            $this->Flash->success('No tenés procesos publicados. Publicá uno!');
            return $this->redirect(array('controller' => 'procesos', 'action' => 'nueva_compra'));
        }
        $this->set('indicadores', $procesos['Indicadores']);
        $this->set('procesos', $procesos['Procesos']);
    }

    public function borradores() {
        
    }

}
