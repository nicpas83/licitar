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
                return $this->redirect(array('controller' => 'procesos', 'action' => 'mis_ofertas'));
            } else {
                $this->Flash->error(__('Error al realizar la Oferta.'));
            }
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
        
        debug($ofertas);die;

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
