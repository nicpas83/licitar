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
        'Oferta' => [
            'className' => 'Oferta',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
        'Pregunta' => [
            'className' => 'Pregunta',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
    ];

    public function getProcesosActivos($categoria_id = null) {
        $data = [];
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

    public function getInfoProcesos($estado = 'Activo', $user_id = null) {
        $data = [];
        $filtroUsuario = !empty($user_id) ? ['user_id' => $user_id] : "";

        $procesos = $this->find('all', [
            'conditions' => [
                $filtroUsuario,
                'Proceso.estado' => $estado
            ]
        ]);
        if (!$procesos) {
            return false;
        }

        foreach ($procesos as $key => $val) {
            if (isset($val['Proceso']) && isset($val['Item'])) {
                $data[$key]['id'] = $val['Proceso']['id'];
                $data[$key]['referencia'] = $val['Proceso']['referencia'];
                $data[$key]['fecha_fin'] = $val['Proceso']['fecha_fin'];
                $data[$key]['total_items'] = count($val['Item']);
                $data[$key]['total_ofertas'] = count($val['Oferta']);
            }
        }

        return $data;
    }

    public function getLastNroProceso() {
        $ultimo_proceso = $this->find('first', [
            'fields' => ['MAX(proceso_nro) AS nro'],
            'conditions' => ['user_id' => AuthComponent::user('id')]
        ]);

        $nro = $ultimo_proceso[0]['nro'] == null ? 0 : $ultimo_proceso[0]['nro'];

        return $nro;
    }

    public function getPreguntas($proceso_id = null) {
        if ($proceso_id) {
            $preguntas = $this->Pregunta->find('all', [
                'conditions' => ['Pregunta.proceso_id' => $proceso_id]
            ]);
        }
        return $preguntas;
    }

    public function getMisPreguntasPendientes() {
        //busco mis procesos activos
        $mis_procesos = $this->find('list', [
            'fields' => ['id'],
            'conditions' => ['user_id' => AuthComponent::user('id')],
        ]);

        $preguntas = $this->Pregunta->find('all', [
            'conditions' => [
                'Pregunta.proceso_id' => $mis_procesos,
                'Pregunta.estado' => 'Pendiente'
            ]
        ]);

        return $preguntas;
    }

    public function afterFind($results, $primary = false) {

        if (isset(Router::getParams()['action'])) {

            $categorias = $this->Item->Categoria->find('list');
            $subcategorias = $this->Item->Categoria->Subcategoria->find('list');

            foreach ($results as $key => $result) {
                if (isset($results[$key]['Proceso']['fecha_fin'])) {
                    $results[$key]['Proceso']['fecha_fin'] = dateDMY($result['Proceso']['fecha_fin']);
                    $results[$key]['Proceso']['fecha_entrega'] = dateDMY($result['Proceso']['fecha_entrega']);
                }
                if (isset($result['Item']) && !empty($result['Item'])) {
                    foreach ($result['Item'] as $key2 => $item) {
                        $results[$key]['Item'][$key2]['categoria'] = $categorias[$item['categoria_id']];
                        $results[$key]['Item'][$key2]['subcategoria'] = $subcategorias[$item['subcategoria_id']];
                    }
                }
            }
        }


        return $results;
    }

}
