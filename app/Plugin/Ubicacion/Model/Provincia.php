<?php

App::uses('AppModel', 'Model');

class Provincia extends AppModel {
    
    public $tablePrefix = 'prov_';
    public $useTable = 'provincias';
    
    public $hasMany = [
        'Localidad' => [
            'className' => 'Ubicacion.Localidad',
            'foreignKey' => 'provincia_id'
        ] 
    ];

    

//    public function options() { 
//        return $this->find('list', [
//                    'fields' => ['Provincia.id', 'Provincia.nombre'],
//                    'order' => ['Provincia.nombre ASC']
//        ]);
//    }

}
