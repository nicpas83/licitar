<?php

App::uses('AppModel', 'Model');

class Condicion extends AppModel {

    public $useTable = 'condiciones';
    public $virtualFields = array(
        'str_estado' => 'IF(estado = 1, "Activo", "Inactivo")'
    );

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
                    'fields' => ['id', 'nombre']
        ]);
    }

}
