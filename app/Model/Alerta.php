<?php
App::uses('AppModel', 'Model');

class Alerta extends AppModel {

    public $useTable = 'alertas_categorias';
    public $validate = array(
        'descripcion' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );
    public $belongsTo = array('User');
    
    public $hasMany = [''];
    
    
    public function afterFind($results, $primary = false) {
    
    }

    public function beforeSave($options = array()) {
    
    }

}
