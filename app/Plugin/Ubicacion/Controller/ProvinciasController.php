<?php

App::uses('AppController', 'Controller');

class ProvinciasController extends AppController {

    public function ajax_get_localidades($provincia_id) {
        $this->autoRender = false;
        $localidades = $this->Provincia->Localidad->find('list', [
            'fields' => ['Localidad.id', 'Localidad.nombre'],
            'conditions' => ['Localidad.provincia_id' => $provincia_id],
            'order' => ['Localidad.nombre']
        ]);
        
        return json_encode($localidades);
    }

}
