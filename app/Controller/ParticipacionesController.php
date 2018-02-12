<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ParticipacionesController extends AppController {

    public function index() {
        
        $participaciones = $this->Participacion->misParticipacionesActivas($this->Auth->user('id'));
        
        $this->set('participaciones', $participaciones);
    }

}
