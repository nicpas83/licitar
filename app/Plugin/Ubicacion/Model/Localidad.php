<?php

App::uses('AppModel', 'Model');

class Localidad extends AppModel {

    public $useTable = 'prov_localidades';
    public $belongsTo = [
        'Provincia' => [
            'className' => 'Ubicacion.Provincia',
            'foreignKey' => 'provincia_id'
        ]
    ];

}
