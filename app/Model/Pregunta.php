<?php

App::uses('AppModel', 'Model');
App::uses('Categoria', 'Model');

class Pregunta extends AppModel {

    public $useTable = 'preguntas';
    public $hasMany = [
        'Denuncia' => [
            'className' => 'Denuncia',
            'foreignKey' => 'pregunta_id'
        ],
        'Respuesta' => [
            'className' => 'Respuesta',
            'foreignKey' => 'pregunta_id'
        ]
    ];
    
}
