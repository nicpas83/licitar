<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class OfertasController extends AppController {

    public function add($proceso_id) {

        if ($this->request->is('post')) {
            $participacion_id = $this->Oferta->Proceso->registrarParticipacion($proceso_id, $this->Auth->user('id'));
            $result = $this->Oferta->registrarOferta($proceso_id, $this->Auth->user('id'), $participacion_id, $this->request->data);

            if ($result) {
                $this->Flash->success('La Oferta fue realizada con éxito.');
                return $this->redirect(array('controller' => 'participaciones', 'action' => 'index'));
            } else {
                $this->Flash->error(__('Error al realizar la Oferta.'));
            }
        }
    }

    public function edit() {
        $this->autoRender = false;  // no tiene vista asociada. 
        if ($this->request->is('post')) {

            if ($this->Oferta->saveMany($this->request->data['Oferta'])) {
                $this->Flash->success('Tu Oferta fue actuallizada con éxio.');
                return $this->redirect(array('controller' => 'participaciones'));
            } else {
                $this->Flash->error('Error al actualizar tu Oferta.');
                return $this->redirect(array('controller' => 'participaciones'));
            }
        } else {
            return $this->redirect(array('controller' => 'procesos'));
        }
    }

    public function mis_ofertas() {
        $procesos_ids = array();

        //traigo los procesos activos donde participo.
        $ofertas = $this->Oferta->find('all', [
            'conditions' => [
                'user_id' => $this->Auth->user('id'),
                'estado_actual' => 1
            ],
            'group' => ['proceso_id']
        ]);
        
        if(!$ofertas){
            return false;
        }

        foreach ($ofertas as $oferta) {
            array_push($procesos_ids, $oferta['Oferta']['proceso_id']);
        }
        $procesos_ids = array_unique($procesos_ids);

        //traigo info de los procesos en los que participa
        $procesos = $this->Oferta->Proceso->find('all', [
            'conditions' => ['Proceso.id' => $procesos_ids],
        ]);

        $this->set('procesos', $procesos);
//        debug($procesos);die;
    }

}
