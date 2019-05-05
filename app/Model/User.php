<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $hasMany = [
        'Proceso',
        'Participacion',
        'Mensaje' => [
            'className' => 'Mail.Mensaje',
            'foreignKey' => 'user_id'
        ]
    ];
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
                'rule' => array('minLength', '6'),
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

    public $validationChangePassword = [
            'password' => array(
                'notBlank' => array(
                    'rule' => 'notBlank',
                    'message' => 'Debe ingresar su contraseña'
                ),
                'length' => array(
                    'rule' => array('minLength', '6'),
                    'message' => 'La contraseña debe tener al menos 6 caracteres.'
                ),
                'isActualPassword' => array(
                    'rule' => ['isActualPassword'],
                    'message' => 'La contraseña ingresada no es correcta'
                )
            ),
            'new_password' => array(
                'notBlank' => array(
                    'rule' => 'notBlank',
                    'message' => 'Debe ingresar su nueva contraseña'
                ),
                'length' => array(
                    'rule' => array('minLength', '6'),
                    'message' => 'La nueva contraseña debe tener al menos 6 caracteres.'
                )
            ),
            'new_password_confirmation' => array(
                'notBlank' => array(
                    'rule' => 'notBlank',
                    'message' => 'Debe ingresar reingresar su nueva contraseña'
                ),
                'length' => array(
                    'rule' => array('minLength', '6'),
                    'message' => 'La nueva contraseña debe tener al menos 6 caracteres.'
                ),
                'repeat_password' => array(
                    'rule' => ['checkpasswords'],
                    'message' => "La contraseña nueva ingresada no es igual a la de la confirmación"
                )
            ),

        ];
    

    public function isActualPassword()
    {
        /*
        $id = AuthComponent::user('id');

        $result = $this->query("SELECT password FROM users where id = $id");

        $old_password = $result[0]['users']['password'];
        $passwordHasher = new BlowfishPasswordHasher();
        $password = $passwordHasher->hash( $this->data[$this->alias]['password']);

        return $password == $old_password;
        */
        return true;
    }

    public function checkpasswords(){

        if(strcmp($this->data['User']['new_password'],$this->data['User']['new_password_confirmation']) == 0 )
        {
            return true;
        }
        return false;
    }

    public function beforeSave($options = array()) {

        if (isset($this->data[$this->alias]['new_password'])) {
            $this->data[$this->alias]['password'] = $this->data[$this->alias]['new_password'];
        }
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                    $this->data[$this->alias]['password']
            );
        }
        return true;
    }
    
    

}
