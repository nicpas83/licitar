<?php

App::uses('AppModel', 'Model');

class Categoria extends AppModel {

    public $useTable = 'categorias';
    public $displayField = 'nombre';
    
    /*public $belongsTo = array(
        'Item' => [
            'className' => 'Item',
            'foreignKey' => 'categoria_id'
        ]
    );*/
    
    public function options() {
        $result = $this->find('list', [
                    'order' => ['nombre ASC']
        ]);
        $arr = array('0'=>'')+$result;
        return $arr;
    }
    
}
