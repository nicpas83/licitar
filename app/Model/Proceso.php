<?php

App::uses('AppModel', 'Model');
App::uses('Categorias.Categoria', 'Model');

class Proceso extends AppModel {

    public $useTable = 'procesos';
    public $filtroCategoria = null;
    public $condicionesPago = [
        'Contado' => 'Contado',
        '30 dias' => '30 dias',
        '30-60 dias' => '30-60 dias',
        '30-60-90 dias' => '30-60-90 dias',
    ];
    public $unidades = [
        'unidades' => 'unidades',
        'cajas' => 'cajas',
        'litros' => 'litros',
        'kilogramos' => 'kilogramos',
        'gramos' => 'gramos',
        'metros' => 'metros',
        'centímetros' => 'centímetros',
        'm2' => 'm2',
        'm3' => 'm3',
    ];
    public $requisitosExcluyentes = [
        'Que el proveedor emita Factura A' => 'Que el proveedor emita Factura A',
        'Que el proveedor gestione el envío' => 'Que el proveedor gestione el envío',
    ];
    public $validate = array(
        'referencia' => array(
            'rule' => 'notBlank',
            'message' => 'El campo Titulo o Referencia es obligatorio'
        ),
        'fecha_fin' => array(
            'rule' => 'notBlank',
            'message' => 'El campo Fin de la Subasta es obligatorio'
        ),
        'fecha_entrega' => array(
            'rule' => 'notBlank',
            'message' => 'El campo Fecha de Entrega es obligatorio'
        ),
    );
    public $belongsTo = array('User');
    public $hasMany = [
        'Item' => [
            'className' => 'Item',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
        'Participacion' => [
            'className' => 'Participacion',
            'foreignKey' => 'proceso_id'
        ],
        'Oferta' => [
            'className' => 'Oferta',
            'foreignKey' => 'proceso_id'
        ],
        'Pregunta' => [
            'className' => 'Pregunta',
            'foreignKey' => 'proceso_id'
        ],
    ];

    public function getProcesosActivos($categoria_id = null) {
        $results = $this->find('all', array(
            'conditions' => [
                'Proceso.estado' => 'Activo',
            ],
            'order' => ['Proceso.fecha_fin' => 'ASC']
        ));
        foreach ($results as $key => $value) {
            //listado general.
            $data[$key]['id'] = $value['Proceso']['id'];
            $data[$key]['referencia'] = $value['Proceso']['referencia'];
            $data[$key]['condicion_pago'] = $value['Proceso']['condicion_pago'];
            $data[$key]['q_items'] = count($value['Item']);
            $data[$key]['q_unidades'] = array_sum(array_column($value['Item'], 'cantidad'));
            $data[$key]['fecha_fin'] = $value['Proceso']['fecha_fin'];
        }

        return $data;
    }

    public function getProcesosIds($array) {
        $procesosIds = [];

        foreach ($array as $val) {
            array_push($procesosIds, $val['Oferta']['proceso_id']);
        }

        return array_unique($procesosIds);
    }

    public function validarTitularidadDelProceso($proceso) {
        if ($proceso['User']['id'] == AuthComponent::user('id')) {
            $proceso['Proceso']['propio'] = 'Si';
        }
        return $proceso;
    }

    public function misProcesosActivos($user_id) {
        $procesos = array();
        $result = $this->find('all', [
            'conditions' => ['user_id' => $user_id, 'Proceso.estado' => 'Activo']
        ]);
        if (!$result) {
            return false;
        }

        //Armo un array sólo con los datos necesarios para la vista.
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

    public function getLastNroProceso() {
        $ultimo_proceso = $this->find('first', [
            'fields' => ['MAX(proceso_nro) AS nro'],
            'conditions' => ['user_id' => AuthComponent::user('id')]
        ]);

        $nro = $ultimo_proceso[0]['nro'] == null ? 0 : $ultimo_proceso[0]['nro'];

        return $nro;
    }

    public function afterFind($results, $primary = false) {
//        debug($results);
//        die;
        foreach ($results as $key => $result) {
            $results[$key]['Proceso']['fecha_fin'] = dateDMY($result['Proceso']['fecha_fin']);
            $results[$key]['Proceso']['fecha_entrega'] = dateDMY($result['Proceso']['fecha_entrega']);
        }

        if (in_array(Router::getParams()['action'], ['edit', 'view'])) {
            $categorias = $this->Item->Categoria->find('list');
            $subcategorias = $this->Item->Categoria->Subcategoria->find('list');

            $results[0]['Proceso']['fecha_fin'] = dateDMY($results[0]['Proceso']['fecha_fin']);
            $results[0]['Proceso']['fecha_entrega'] = dateDMY($results[0]['Proceso']['fecha_entrega']);

            foreach ($results[0]['Item'] as $key => $item) {
                $results[0]['Item'][$key]['categoria'] = $categorias[$item['categoria_id']];
                $results[0]['Item'][$key]['subcategoria'] = $subcategorias[$item['subcategoria_id']];
            }
        }



        return $results;
    }

    public function beforeSave($options = array()) {
//        $this->data['Proceso']['fecha_fin'] = dateYMD($this->data['Proceso']['fecha_fin']);
//        $this->data['Proceso']['fecha_entrega'] = dateYMD($this->data['Proceso']['fecha_entrega']);
        return true;
    }

    public function afterSave($created, $options = []) {

//        if ($created) {
//            $this->Item->files = $this->data['Item'];
//            debug($this->data);
//            die;
//        }
//        
//        App::uses('imageLib', 'Lib/php-image-magician');
//        $imgObj = new imageLib($fileName);
//
//        $items = $this->data['Item'];
//        $files = $this->data['File'];
//
//        foreach ($items as $key => $item) {
//            $item_id = $item;
//        }
    }

}
