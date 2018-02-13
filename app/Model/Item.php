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
    public $hasMany = [
        'Oferta' => [
            'className' => 'Oferta',
            'foreignKey' => 'item_id',
            'dependent' => true
        ]
    ];
    public $belongsTo = [
        'Proceso' => [
            'className' => 'Proceso',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
    ];

}
