<?php

App::uses('AppController', 'Controller');

class ProcesosController extends AppController {

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
    }

    public function mis_compras() {
        $activos = $this->Proceso->getInfoProcesos('Activo', $this->Auth->user('id'));
        $finalizados = $this->Proceso->getInfoProcesos('Finalizado', $this->Auth->user('id'));
//        debug($activos);die;
        $this->set('activos', $activos);
        $this->set('finalizados', $finalizados);
        $this->set('preguntas', $this->Proceso->getMisPreguntasPendientes());
    }

    public function view($id = null) {
        if (!$id) {
            $this->Flash->error(__("El proceso al que intenta acceder no es un proceso válido."));
            $this->redirect($this->referer());
        }
        $proceso = $this->Proceso->findById($id);
        if (!$proceso || $proceso['Proceso']['estado'] !== 'Activo') {
            $this->Flash->error(__("El proceso al que intenta acceder no es un proceso activo."));
            $this->redirect($this->referer());
        }
        $proceso = $this->Proceso->validarTitularidadDelProceso($proceso);

        $itemsIds = $this->Proceso->Item->getItemsIds($proceso);
        $ofertas = $this->Proceso->Oferta->getOfertas($itemsIds);

        $proceso['Item'] = $this->Proceso->Item->setMejoresOfertas($proceso['Item'], $ofertas);
        $proceso['Item'] = $this->Proceso->Item->setCantidadProveedores($proceso['Item'], $ofertas);

        $this->set('preguntas', $this->Proceso->getPreguntas($id));
        $this->set('proceso', $proceso['Proceso']);
        $this->set('items', $proceso['Item']);
    }

    //vista HOMEPAGE
    public function index() {
        $procesos = $this->Proceso->getProcesosActivos();
        $this->set('procesos', $procesos);
    }

    public function categoria($categoria_id = null) {
        $procesos = $this->Proceso->getProcesosActivos($categoria_id);
        $this->set('categorias', $procesos['categorias']);
        $this->set('procesos', $procesos['procesos']);
    }

    public function edit($id = null) {
        $this->set('categorias', $this->Categoria->options());
        $this->set('subcategorias', $this->Subcategoria->options());
        $this->set('unidades', $this->Proceso->unidades);
        $this->set('condiciones', $this->Proceso->condicionesPago);
        $this->set('requisitos', $this->Proceso->requisitosExcluyentes);

        $proceso = $this->Proceso->findByIdAndUserId($id, $this->Auth->user('id'));
        //valido que por URL solo se pueda acceder a procesos activos y propios.
        if ($proceso && $proceso['Proceso']['estado'] == 'Activo') {
            $this->set('proceso', $proceso['Proceso']);
            $this->set('items', $proceso['Item']);

            //permitir editar solamente items sin oferta. 
//            $this->set('hidden', $this->Proceso->encodeItems($proceso['Item']));
        } else {
            $this->Flash->error('El proceso al que intenta acceder no es válido.');
            return $this->redirect(array('controller' => 'procesos', 'action' => 'mis_procesos'));
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

    /**
     * METODOS AJAX
     */
    public function ajax_set_info_general() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $fecha_fin = dateYMD($this->request->data['fecha_fin']);
        $fecha_entrega = dateYMD($this->request->data['fecha_entrega']);

        $this->Proceso->updateAll([
            'referencia' => "'" . $this->request->data['referencia'] . "'",
            'fecha_fin' => "'" . $fecha_fin . "'",
            'fecha_entrega' => "'" . $fecha_entrega . "'",
            'proceso_nro' => "'" . ($this->Proceso->getLastNroProceso() + 1) . "'",
            'detalles' => "'" . $this->request->data['detalles'] . "'",
            'condicion_pago' => "'" . $this->request->data['condicion_pago'] . "'",
            'requisitos_excluyentes' => "'" . $this->request->data['requisitos_excluyentes'] . "'",
            'estado' => "'Activo'"
                ], [
            'Proceso.id' => $this->request->data['id']
        ]);

        $this->Proceso->Item->updateAll([
            'estado' => "'Activo'"
                ], [
            'proceso_id' => $this->request->data['id']
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

    
}
