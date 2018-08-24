<?php

App::uses('AppModel', 'Model');

class Subcategoria extends AppModel {

    public $tablePrefix = 'cat_';
    public $useTable = 'subcategorias';
    public $displayField = 'nombre';
    
    public $belongsTo = array(
        'Categoria' => [
            'className' => 'Categorias.Categoria',
            'foreignKey' => 'categoria_id'
        ],
    );
    
    public function options() {
        $result = $this->find('list', [
                    'order' => ['nombre ASC']
        ]);
        $arr = array('0'=>'')+$result;
        return $arr;
    }
    
}
