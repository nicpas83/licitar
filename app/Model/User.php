<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    
    public $hasMany = array('Proceso');
    
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Debe ingresar un nombre de usuario'
            ),
            'length' => array(
                'rule' => array('between', 4, 15),
                'message' => 'El usuario debe tener entre 4 y 15 caracteres.'
            ),
            'rule' => array('isUnique', array('username'), true),
            'message' => 'El nombre de usuario ya existe.',
        ),
        'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Debe ingresar una contraseña'
            ),
            'length' => array(
                'rule' => array('minLength', '4'),
                'message' => 'La contraseña debe tener al menos 4 caracteres.'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Debe ingresar un nombre de usuario'
            ),
            'rule' => array('isUnique', array('email'), true),
            'message' => 'El email ya existe.'
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
            );
        }
        return true;
    }

}
