<?php

App::uses('AppModel', 'Model');

class Proceso extends AppModel {

    public $useTable = 'procesos';
    public $validate = array(
        'titulo' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );
    public $hasMany = [
        'Item' => [
            'className' => 'Item',
            'foreignKey' => 'proceso_id'
        ]
    ];

    public function beforeSave($options = array()) {

        //debug($this->data);
        //busco ultimo proceso publicado por el usuario.
        $user = $this->data['Proceso']['user_id'];
        $ultimo_proceso = $this->find('first', array(
            'fields' => array('MAX(proceso_nro) AS nro'),
            'conditions' => array('user_id' => $user)
        ));
        $this->data['Proceso']['proceso_nro'] = $ultimo_proceso[0]['nro'] + 1;
        $this->data['Proceso']['fecha_fin'] = $this->dateFormat($this->data['Proceso']['fecha_fin']);

        return true;
    }

    public function dateFormat($dateString) {
        return date('Y-m-d', strtotime($dateString));
    }
    
    public function misProcesos($id){
        
        $procesos = $this->find('all',['conditions' => ['user_id' => $id]]);
        
        debug($procesos);die;
        return $procesos;
    }
    

}
