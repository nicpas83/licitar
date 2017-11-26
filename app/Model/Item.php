<?php

App::uses('AppModel', 'Model');

class Item extends AppModel {
    
    public $useTable = 'items';

    public $validate = array(
        'titulo' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );
    
    public $belongsTo = [
        'Proceso' => [
            'className' => 'Proceso',
            'foreignKey' => 'proceso_id'
        ]
    ];
    
    public $hasOne = [
        'Rubro' => [
            'className' => 'Rubro',
            'foreignKey' => 'rubro_id'
        ]
    ];

    
     

}
