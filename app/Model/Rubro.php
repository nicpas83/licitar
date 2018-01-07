<?php

App::uses('AppModel', 'Model');

class Rubro extends AppModel {

    public $useTable = 'rubros';
    public $displayField = 'nombre';
    
    /*public $belongsTo = array(
        'Item' => [
            'className' => 'Item',
            'foreignKey' => 'rubro_id'
        ]
    );*/
    
    public function options() {
        $result = $this->find('list', [
                    'conditions' => ['estado' => 1],
                    'order' => ['nombre ASC']
        ]);
        $arr = array('0'=>'')+$result;
        return $arr;
    }
    
}
