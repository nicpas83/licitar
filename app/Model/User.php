<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $hasMany = array('Proceso', 'Participacion', 'AlertaVendedor', 'AlertaComprador');
    public $validate = array(
        'username' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'El nombre de usuario es obligatorio.'
            ),
            'length' => array(
                'rule' => array('between', 4, 15),
                'message' => 'El usuario debe tener entre 4 y 15 caracteres.'
            ),
            'isUnique' => [
                'rule' => array('isUnique', array('username'), true),
                'message' => 'El nombre de usuario ya existe.',
            ]
        ),
        'password' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Debe ingresar una contraseña'
            ),
            'length' => array(
                'rule' => array('minLength', '4'),
                'message' => 'La contraseña debe tener al menos 4 caracteres.'
            )
        ),
        'email' => [
            'email' => [
                'rule' => array('email', true,),
                'message' => 'Ingrese un formato válido de E-mail.'
            ],
            'isUnique' => [
                'rule' => array('isUnique', array('email'), true),
                'message' => 'El email ya existe en la base.',
            ]
        ],
        'cuit' => [
            'length' => [
                'rule' => array('minLength', '11'),
                'message' => 'El CUIT debe tener 11 números.'
            ]
        ],
        'rol_usuario' => [
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Especifica si eres Comprador o Vendedor (o ambos!)'
            ),
        ],
        'tipo_usuario' => [
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'Debes especificar un tipo de usuario.'
            ),
        ],
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
