<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ProcesosController extends AppController {

    public function index() {
        $procesos = $this->Proceso->procesosActivos();
        $this->set('categorias', $procesos['categorias']);
        $this->set('compradores', $procesos['compradores']);
        $this->set('procesos', $procesos['procesos']);
    }

    public function view($proceso_id = null) {
        $proceso = $this->Proceso->getInfo($proceso_id, $this->Auth->user('id'));
        
        if (!$proceso || $proceso['Proceso']['estado'] !== '1') {
            $this->Flash->error(__("El proceso al que intenta acceder no es un proceso activo."));
            $this->redirect($this->referer());
        }
        $itemsIds = $this->Proceso->getItemsIds($proceso['Item']);
        
        $proceso['Item'] = $this->Proceso->Oferta->setMejoresOfertas($proceso['Item'], $itemsIds);

        debug($proceso);
        die;








        $this->set('proceso', $proceso['Proceso']);
        $this->set('items', $proceso['Item']);
    }

    public function edit($id = null) {

        $proceso = $this->Proceso->findByIdAndUserId($id, $this->Auth->user('id'));
        //valido que por URL solo se pueda acceder a procesos activos y propios.
        if ($proceso && $proceso['Proceso']['estado'] == 1) {
            $this->set('categorias', $this->Categoria->options());
            $this->set('sub_categorias', $this->Categoria->options());
            $this->set('unidades', $this->Unidad->options());
            $this->set('condiciones', [
                'Contado' => 'Contado',
                '30 dias' => '30 dias',
                '30-60 dias' => '30-60 dias',
                '30-60-90 dias' => '30-60-90 dias',
            ]);

            $this->set('proceso', $proceso['Proceso']);
            $this->set('items', $proceso['Item']);

            //permitir editar solamente items sin oferta. 

            $this->set('hidden', $this->Proceso->encodeItems($proceso['Item']));
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
            $this->redirect(array('action' => 'index'));
        }
    }

    public function add() {

        $this->set('categorias', $this->Categoria->options());
        $this->set('sub_categorias', $this->Categoria->options());
        $this->set('unidades', $this->Unidad->options());
        $this->set('condiciones', [
            'Contado' => 'Contado',
            '30 dias' => '30 dias',
            '30-60 dias' => '30-60 dias',
            '30-60-90 dias' => '30-60-90 dias',
        ]);

        if ($this->request->is('post')) {
//            debug($this->request->data);die;
            $this->request->data['Proceso']['user_id'] = $this->Auth->user('id');
            $items = $this->request->data['Item'];

            if (empty($items['categorias']) || empty($items['nombres']) || empty($items['cantidades'])) {
                $this->Flash->error(__('Faltan datos en los Item del proceso.'));
            } else {
                $this->request->data['Item'] = $this->Proceso->decodeItems($this->request->data['Item']);
                $procesoNro = $this->Proceso->buscarUltimoProcesoUsuario($this->Auth->user('id'));
                $this->request->data['Proceso']['proceso_nro'] = $procesoNro + 1;

                if ($this->Proceso->saveAll($this->request->data)) {
                    $this->Flash->success('El Proceso fue creado con éxio.');
                    return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
                } else {
                    $this->Flash->error(__('Error al grabar el Proceso.'));
                }
            }
        }
    }

    public function mis_procesos() {
        $procesos = $this->Proceso->misProcesosActivos($this->Auth->user('id'));

        if (!$procesos) {
            $this->Flash->success('No tenés procesos publicados. Publicá uno!');
            return $this->redirect(array('controller' => 'procesos', 'action' => 'add'));
        }
        $this->set('indicadores', $procesos['Indicadores']);
        $this->set('procesos', $procesos['Procesos']);
    }

    public function borradores() {
        
    }

}
