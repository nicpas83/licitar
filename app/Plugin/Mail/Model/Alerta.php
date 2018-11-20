<?php

App::uses('AppModel', 'Model');

class Alerta extends AppModel {

    public $tablePrefix = 'mail_';
    public $useTable = 'alertas';
    
    public $hasMany = array(
        'AlertaVendedor' => [
            'className' => 'Mail.AlertaVendedor',
            'foreignKey' => 'alerta_id'
        ],
        
    );
    
    
    
    
    
}
