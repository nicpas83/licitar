<?php

App::uses('AppModel', 'Model');

class Rubro extends AppModel {

    public $useTable = 'rubros';
    
    
    public function options() {
        return $this->find('list', [
                    'fields' => ['id', 'nombre'],
                    'conditions' => ['estado' => 1],
                    'group' => ['nombre'],
                    'order' => ['nombre ASC']
        ]);
    }
    
}
