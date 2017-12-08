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

    public function misIndicadores($id) {
        //return $this->Proceso->find('all', ['conditions' => ['user_id' => $id]]);
    }

    public function misProcesos($id) {

        $result = $this->find('all', ['conditions' => ['user_id' => $id]]);

        foreach ($result as $key => $val) {
            //debug($val['Proceso']['referencia']);die;
            
            $procesos[$key]['proceso_id'] = $val['Proceso']['id'];
            $procesos[$key]['referencia'] = $val['Proceso']['referencia'];
            $procesos[$key]['fecha_fin'] = $val['Proceso']['fecha_fin'];

            $q_items = $q_unidades = 0;
            foreach ($val['Item'] as $item) {
                $q_items++;
                $q_unidades += $item['cantidad'];
            }

            $procesos[$key]['total_items'] = $q_items;
            $procesos[$key]['total_unidades'] = $q_unidades;
        }

        return $procesos;
    }

    public function afterFind($results, $primary = false) {

        return $results;
    }

    public function beforeSave($options = array()) {
        debug($this->data['Item']['nombres']); die;
        
        $rubros = json_decode($this->data['Item']['rubros']);
        $nombres = json_decode($this->data['Item']['nombres']);
        $cantidades = json_decode($this->data['Item']['cantidades']);
        $unidades = json_decode($this->data['Item']['unidades']);
        $especificaciones = !empty($this->data['Item']['especificaciones']) ? json_decode($this->data['Item']['especificaciones']) : null;
        $arr = array();

        foreach ($rubros as $key => $val) {
            $arr[$key]['rubro_id'] = $val;
        }
        foreach ($nombres as $key => $val) {
            $arr[$key]['nombre'] = $val;
        }
        foreach ($cantidades as $key => $val) {
            $arr[$key]['cantidad'] = $val;
        }
        foreach ($unidades as $key => $val) {
            $arr[$key]['unidad'] = $val;
        }
        foreach ($especificaciones as $key => $val) {
            $arr[$key]['especificaciones'] = $val;
        }
        $this->data['Item'] = $arr;
        

        //busco ultimo proceso publicado por el usuario.
        $user = $this->data['Proceso']['user_id'];
        $ultimo_proceso = $this->find('first', array(
            'fields' => array('MAX(proceso_nro) AS nro'),
            'conditions' => array('user_id' => $user)
        ));
        $this->data['Proceso']['proceso_nro'] = $ultimo_proceso[0]['nro'] + 1;
        $this->data['Proceso']['fecha_fin'] = $this->dateFormat($this->data['Proceso']['fecha_fin']);

        debug($this->data); die;
        return true;
    }

    public function dateFormat($dateString) {
        return date('Y-m-d', strtotime($dateString));
    }

}
