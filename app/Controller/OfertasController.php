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
                return $this->redirect(array('controller' => 'procesos', 'action' => 'index'));
            } else {
                $this->Flash->error(__('Error al realizar la Oferta.'));
            }
        }
    }

}
