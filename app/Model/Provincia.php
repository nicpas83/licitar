<?php

App::uses('AppModel', 'Model');

class Provincia extends AppModel {

    public $useTable = 'provincias';
    

    public function activar($id) {
        $this->id = $id;
        $this->saveField('estado', 1);
        return true;
    }

    public function desactivar($id) {
        $this->id = $id;
        $this->saveField('estado', 0);
        return true;
    }

    public function options() { 
        return $this->find('list', [
                    'fields' => ['Provincia.id', 'Provincia.nombre'],
                    'group' => ['Provincia.nombre'],
                    'order' => ['Provincia.nombre ASC']
        ]);
    }

}
