<?php

App::uses('AppModel', 'Model');

class Aviso extends AppModel {

    public $validate = array(
        'titulo' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );

    
     

}
