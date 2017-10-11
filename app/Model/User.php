<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Debe ingresar un nombre de usuario'
            ),
            'length' => array(
                'rule' => array('between', 3, 15),
                'message' => 'El nombre de usuario debe tener entre 3 y 15 caracteres.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'El nombre de usuario ya existe.'
            )
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
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
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
