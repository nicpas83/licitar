<?php

App::uses('AppModel', 'Model');
App::uses('Rubro', 'Model');

class Proceso extends AppModel {

    public $useTable = 'procesos';
    public $validate = array(
        'titulo' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );
    public $belongsTo = array('User');
    public $hasMany = [
        'Item' => [
            'className' => 'Item',
            'foreignKey' => 'proceso_id'
        ]
    ];

    public function procesosActivos($fechaHoy) {
        $data = $procesos = array();
        $compradores = array('0' => 'Compradores con procesos activos');
        $rubrosActivos = array('0' => 'Rubros con procesos activos');
        $rubrosObj = new Rubro();
        $rubros = $rubrosObj->options();

        $result = $this->find('all', array(
            'conditions' => [
                'fecha_fin >=' => $fechaHoy,
                'visibilidad' => 1,
                'Proceso.estado' => 1
            ],
            'order' => ['Proceso.fecha_fin' => 'ASC'] 
        ));
//        debug($result);die;    
        foreach ($result as $key => $value) {
            //listado general.
            $procesos[$key]['proceso_id'] = $value['Proceso']['id'];
            $procesos[$key]['comprador'] = $value['User']['razon_social'];
            $procesos[$key]['referencia'] = $value['Proceso']['referencia'];
            $procesos[$key]['proceso_nro'] = $value['Proceso']['proceso_nro'];
            $procesos[$key]['q_items'] = count($value['Item']);
            $procesos[$key]['q_unidades'] = array_sum(array_column($value['Item'], 'cantidad'));
            $procesos[$key]['fecha_fin'] = $value['Proceso']['fecha_fin'];
            
            /* FILTROS DE BUSQUEDA */
            //listado compradores con proceso activo
            $compradores[$value['User']['id']] = $value['User']['razon_social'];
            //listado rubros en procesos activos (incluye items)
            foreach ($value['Item'] as $item) {
                $rubrosActivos[$item['rubro_id']] = $item['rubro'];
            }
        }
        //compilo 3 listados
        $data['procesos'] = $procesos;
        $data['compradores'] = array_unique($compradores);
        $data['rubros'] = $rubrosActivos;

        return $data;
    }

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
        //Agrego el nombre del rubro para cada Item.
        $rubrosObj = new Rubro();
        $rubros = $rubrosObj->options();
        foreach ($results as $keyPr => $result) {
            $results[$keyPr]['Proceso']['fecha_fin'] = $this->dateDMY($result['Proceso']['fecha_fin']);
            if (!empty($result['Item'])) {
                foreach($result['Item'] as $keyIt => $item){
                    $results[$keyPr]['Item'][$keyIt]['rubro'] = $rubros[$item['rubro_id']];
                }
            }
        }
        return $results;
    }

    public function beforeSave($options = array()) {
        //busco ultimo proceso publicado por el usuario.
        $user = $this->data['Proceso']['user_id'];
        $ultimo_proceso = $this->find('first', array(
            'fields' => array('MAX(proceso_nro) AS nro'),
            'conditions' => array('user_id' => $user)
        ));

        $this->data['Proceso']['excluyente_factura'] == 1 ? $this->data['Proceso']['excluyente_factura'] = 'Si' : $this->data['Proceso']['excluyente_factura'] = 'No';
        $this->data['Proceso']['excluyente_gestion_envio'] == 1 ? $this->data['Proceso']['excluyente_gestion_envio'] = 'Si' : $this->data['Proceso']['excluyente_gestion_envio'] = 'No';
        $this->data['Proceso']['excluyente_costo_envio'] == 1 ? $this->data['Proceso']['excluyente_costo_envio'] = 'Si' : $this->data['Proceso']['excluyente_costo_envio'] = 'No';

        $this->data['Proceso']['proceso_nro'] = $ultimo_proceso[0]['nro'] + 1;
        $this->data['Proceso']['fecha_fin'] = $this->dateYMD($this->data['Proceso']['fecha_fin']);

        return true;
    }

}
