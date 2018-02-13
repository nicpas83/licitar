<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ParticipacionesController extends AppController {

    public function index() {
        $participaciones = $this->Participacion->misParticipacionesActivas($this->Auth->user('id'));
        if (!$participaciones) {
            $this->Flash->success('No tienes Participaciones en curso.');
            return $this->redirect(['controller' => 'procesos', 'action' => 'index']);
        }
        $this->set('participaciones', $participaciones);
    }

    public function edit($participacion_id = null) {
        //traigo array de mi oferta en el proceso (agrega info de cada Item)
        $participacion = $this->Participacion->miParticipacion($participacion_id, $this->Auth->user('id'));

        if (!$participacion) {
            $this->Flash->success('No tienes ofertas en curso.');
            return $this->redirect(['controller' => 'participaciones', 'action' => 'index']);
        }
        $this->set('participacion', $participacion);
    }

}
