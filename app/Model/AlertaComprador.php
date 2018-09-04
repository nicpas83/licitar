<?php

App::uses('AppModel', 'Model');

class AlertaComprador extends AppModel {

    public $useTable = 'alertas_compradores';
    public $belongsTo = ['User'];

    
    public function afterFind($results, $primary = false) {
        
    }
    public function beforeSave($options = array()) {
        
    }

}
