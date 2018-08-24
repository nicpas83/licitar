<?php

App::uses('AppModel', 'Model');

class Categoria extends AppModel {

    public $tablePrefix = 'cat_';
    public $useTable = 'categorias';
    public $displayField = 'nombre';
    
    public $hasMany = array(
        'Subcategoria' => [
            'className' => 'Categorias.Subcategoria',
            'foreignKey' => 'categoria_id'
        ],
    );
    
    public function options() {
        $result = $this->find('list', [
                    'order' => ['nombre ASC']
        ]);
        $arr = array('0'=>'')+$result; //agrega 1 opcion vacia
        return $arr;
    }
    
}
