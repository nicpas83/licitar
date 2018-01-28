<?php
App::uses('AppModel', 'Model');
App::uses('Rubro', 'Model');

class Pregunta extends AppModel {

    public $useTable = 'preguntas';
    public $validate = array(
        'descripcion' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );
    public $belongsTo = array('User','Proceso');
    
    public $hasOne = [
        'Respuesta' => [
            'className' => 'Respuesta',
            'foreignKey' => 'pregunta_id'
        ]
    ];
    
    public $hasMany = [
        'Denuncia' => [
            'className' => 'Denuncia',
            'foreignKey' => 'pregunta_id'
        ]
    ];
    
    
    public function afterFind($results, $primary = false) {
    
    }

    public function beforeSave($options = array()) {
    
    }

}
