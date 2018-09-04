<?php

App::uses('AppModel', 'Model');

class AlertaVendedor extends AppModel {

    public $useTable = 'alertas_vendedores';
    public $belongsTo = ['User'];
    
    public function afterFind($results, $primary = false) {
        
    }
    public function beforeSave($options = array()) {
        
    }

}
