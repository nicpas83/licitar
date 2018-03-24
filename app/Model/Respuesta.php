<?php
App::uses('AppModel', 'Model');
App::uses('Categoria', 'Model');

class Respuesta extends AppModel {

    public $useTable = 'respuestas';
    public $validate = array(
        'descripcion' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );
    public $belongsTo = array('User','Proceso','Pregunta');
    
    public $hasMany = [
        'Denuncia' => [
            'className' => 'Denuncia',
            'foreignKey' => 'respuesta_id'
        ]
    ];
    
    
    public function afterFind($results, $primary = false) {
    
    }

    public function beforeSave($options = array()) {
    
    }

}
