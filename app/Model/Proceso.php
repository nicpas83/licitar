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

    public function misProcesosActivos($user_id) {
        $procesos = array();
        $result = $this->find('all', [
            'conditions' => ['user_id' => $user_id, 'estado' => 1]
        ]);

        foreach ($result as $key => $val) {
            $q_items = $q_unidades = 0;
            $procesos['Procesos'][$key]['id'] = $val['Proceso']['id'];
            $procesos['Procesos'][$key]['proceso_nro'] = $val['Proceso']['proceso_nro'];
            $procesos['Procesos'][$key]['referencia'] = $val['Proceso']['referencia'];
            $procesos['Procesos'][$key]['fecha_fin'] = $val['Proceso']['fecha_fin'];

            foreach ($val['Item'] as $item) {
                $q_items++;
                $q_unidades += $item['cantidad'];
            }
            $procesos['Procesos'][$key]['total_items'] = $q_items;
            $procesos['Procesos'][$key]['total_unidades'] = $q_unidades;
        }
        
        //Indicadores:
        $procesos['Indicadores']['q_procesos_activos'] = count($result);
        
        return $procesos;
    }

    public function afterFind($results, $primary = false) {

        if (isset($results[0]['Proceso'])) {
            $results[0]['Proceso']['created'] = $this->dateFormatDMY($results[0]['Proceso']['created']);
            $results[0]['Proceso']['modified'] = $this->dateFormatDMY($results[0]['Proceso']['modified']);
            $results[0]['Proceso']['fecha_fin'] = $this->dateFormatDMY($results[0]['Proceso']['fecha_fin']);

            $requisitos = array();
            if ($results[0]['Proceso']['excluyente_factura'] == 1) {
                array_push($requisitos, 'Factura A');
            }
            if ($results[0]['Proceso']['excluyente_gestion_envio'] == 1) {
                array_push($requisitos, 'Gestión del Envío por cuenta del Proveedor');
            }
            if ($results[0]['Proceso']['excluyente_costo_envio'] == 1) {
                array_push($requisitos, 'Es requisito cotizar el Envío');
            }
            $results[0]['Proceso']['requisitos'] = $requisitos;
        }
//        debug($results);die;

        return $results;
    }

    public function beforeSave($options = array()) {
        //busco ultimo proceso publicado por el usuario.
        $user = $this->data['Proceso']['user_id'];
        $ultimo_proceso = $this->find('first', array(
            'fields' => array('MAX(proceso_nro) AS nro'),
            'conditions' => array('user_id' => $user)
        ));
        $this->data['Proceso']['proceso_nro'] = $ultimo_proceso[0]['nro'] + 1;
        $this->data['Proceso']['fecha_fin'] = $this->dateFormatYMD($this->data['Proceso']['fecha_fin']);

        return true;
    }

}
