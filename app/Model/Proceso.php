<?php

App::uses('AppModel', 'Model');
App::uses('Categorias.Categoria', 'Model');

class Proceso extends AppModel {

    public $useTable = 'procesos';
    public $filtroIds = "";
    public $readonly = false;
    public $filtroCategoria = "";
    public $filtroUsuario = "";
    public $filtroEstado = "";
    public $esPropio = "";
    public $infoGeneral;
    public $items;
    public $ofertas;
    public $preguntas;
    public $respuestas;
    public $preferenciasPago = [
        'Efectivo' => 'Efectivo',
        'Transferencia' => 'Transferencia',
        'Tarjeta Crédito' => 'Tarjeta Crédito',
        'Cheque al Día' => 'Cheque al Día',
        'Cheque Pago Diferido' => 'Cheque Pago Diferido',
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
//    public $belongsTo = array('User');
    public $hasMany = [
        'Item' => [
            'className' => 'Item',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
        'Pregunta' => [
            'className' => 'Pregunta',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
    ];

    /*
     * Prepara la info del proceso, seteando las posibles ofertas y respuestas,
     */

    public function getProcesoData() {
        $this->infoGeneral = $this->findById($this->id)['Proceso'];
        $this->estado = $this->infoGeneral['estado'];
        $this->items = $this->findById($this->id)['Item'];
        $this->asignar_mejores_ofertas();

        $this->preguntas = $this->findById($this->id)['Pregunta'];
        $this->asignar_respuestas();
    }

    public function asignar_mejores_ofertas() {
        App::uses('Oferta', 'Model');

        $this->ofertas = (new Oferta())->find('all', [
            'fields' => ['Oferta.item_id', 'MIN(Oferta.valor_oferta) as mejor_oferta'],
            'conditions' => ['Oferta.proceso_id' => $this->id],
            'group' => ['item_id']
        ]);

        foreach ($this->items as $key => $item) {
            $this->items[$key]['mejor_oferta'] = "Sin ofertas";
            foreach ($this->ofertas as $oferta) {
                if ($item['id'] == $oferta['Oferta']['item_id']) {
                    $this->items[$key]['mejor_oferta'] = $oferta[0]['mejor_oferta'];
                }
            }
        }
    }

    public function asignar_respuestas() {
        App::uses('Respuesta', 'Model');

        $preguntasIds = array_column($this->preguntas, 'id');
        $respuestas = (new Respuesta())->find('list', [
            'fields' => ['pregunta_id', 'respuesta'],
            'conditions' => ['pregunta_id' => $preguntasIds]
        ]);

        if ($respuestas) {
            foreach ($this->preguntas as $key => $pregunta) {
                foreach ($respuestas as $pregunta_id => $respuesta) {
                    $this->preguntas[$key]['respuesta'] = "";
                    if ($pregunta['id'] == $pregunta_id) {
                        $this->preguntas[$key]['respuesta'] = $respuesta;
                    }
                }
            }
        }
    }

    public function validarEdicionUsuario($proceso) {
        if (!$proceso) {
            return false;
        }

        if ($proceso['Proceso']['user_id'] !== AuthComponent::user('id')) {
            return false;
        }

        return true;
    }

    public function esEditableGeneral($proceso) {

        if ($proceso && $proceso['Proceso']['estado'] == 'Activo') {
            if (empty($proceso['Oferta'])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function esActivo($proceso_id) {
        $proceso = $this->findById($proceso_id);
        if ($proceso && $proceso['Proceso']['estado'] == 'Activo') {
            return true;
        } else {
            return false;
        }
    }

    public function esPropio($proceso_id) {
        $user_id = AuthComponent::user('id');
        $result = $this->find('first', [
            'conditions' => ['Proceso.user_id' => $user_id, 'Proceso.id' => $proceso_id]
        ]);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function finalizar($proceso_id) {
        $user_id = AuthComponent::user('id');
        $this->updateAll([
            'Proceso.estado' => "'Finalizado'"
                ], [
            'Proceso.id' => $proceso_id,
            'Proceso.user_id' => $user_id
        ]);
    }

    public function getProcesosCategoria($categoria_id) {
        $procesos_id = $this->Item->find('list', [
            'fields' => ['proceso_id'],
            'conditions' => [
                'categoria_id' => $categoria_id,
                'estado' => 'Activo'
            ]
        ]);
        return $procesos_id;
    }

    public function getProcesosActivos($categoria_id = null) {
        $data = [];
        if ($categoria_id) {
            $this->filtroCategoria = ['Proceso.id' => $this->getProcesosCategoria($categoria_id)];
        }
        $results = $this->find('all', array(
            'conditions' => [
                'Proceso.estado' => 'Activo',
                $this->filtroCategoria,
                $this->filtroIds,
            ],
            'order' => ['Proceso.fecha_fin']
        ));

        //favoritos
        App::uses('Favorito', 'Model');
        $mis_favoritos = (new Favorito())->getMisProcesosFavoritos();

        foreach ($results as $key => $val) {
            $cant_ofertas = isset($val['Oferta']) ? count($val['Oferta']) : 0;

            if (isset($val['Proceso']) && isset($val['Item'])) {
                $data[$key]['id'] = $val['Proceso']['id'];
                $data[$key]['referencia'] = $val['Proceso']['referencia'];
                $data[$key]['detalles'] = $val['Proceso']['referencia'];
                $data[$key]['fecha_fin'] = $val['Proceso']['fecha_fin'];
                $data[$key]['fecha_entrega'] = $val['Proceso']['fecha_fin'];
                $data[$key]['preferencia_pago'] = $val['Proceso']['preferencia_pago'];
                $data[$key]['cant_items'] = count($val['Item']);
                $data[$key]['cant_ofertas'] = $cant_ofertas;
                $data[$key]['propio'] = $val['Proceso']['propio'];
                $data[$key]['favorito'] = $val['Proceso']['propio'];
            }
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

    public function getMisCompras($estado = null) {
        $data = [];
        if ($estado == 'activas') {
            $this->filtroEstado = ['Proceso.estado' => 'Activo'];
        }
        if ($estado == 'finalizadas') {
            $this->filtroEstado = ['Proceso.estado' => 'Finalizado'];
        }

        $procesos = $this->find('all', ['conditions' => [$this->filtroUsuario, $this->filtroEstado]]);
        if (!$procesos) {
            return $data;
        }
//            debug($procesos);die;
        foreach ($procesos as $key => $val) {

            if (isset($val['Proceso']) && isset($val['Item'])) {
                $data[$key]['id'] = $val['Proceso']['id'];
                $data[$key]['referencia'] = $val['Proceso']['referencia'];
                $data[$key]['detalles'] = $val['Proceso']['referencia'];
                $data[$key]['fecha_fin'] = $val['Proceso']['fecha_fin'];
                $data[$key]['fecha_entrega'] = $val['Proceso']['fecha_fin'];
                $data[$key]['preferencia_pago'] = $val['Proceso']['preferencia_pago'];
                $data[$key]['cant_items'] = count($val['Item']);
                $data[$key]['cant_ofertas'] = $this->getCantidadOfertas($val['Proceso']['id']);
                $data[$key]['propio'] = $val['Proceso']['propio'];
            }
        }
        return $data;
    }

    public function getCantidadOfertas($proceso_id) {
        App::uses('Oferta', 'Model');
        return (new Oferta())->find('count', ['conditions' => ['proceso_id' => $proceso_id], 'recursive' => -1]);
    }

    public function getMisPreguntas($estado = null) {
        $data = [];
        //busco mis procesos activos
        $procesosIds = $this->find('list', [
            'fields' => ['id'],
            'conditions' => [
                $this->filtroUsuario,
            ],
        ]);
        if (!$procesosIds) {
            return $data;
        }
        $preguntas = $this->Pregunta->find('all', [
            'conditions' => [
                'Pregunta.proceso_id' => $procesosIds,
                'Pregunta.estado' => 'Pendiente'
            ]
        ]);
        if (!$preguntas) {
            return $data;
        }

        return $preguntas;
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

    public function afterFind($results, $primary = false) {

        //evito entrar desde los shell.
        if (isset(Router::getParams()['action'])) {

            $categorias = $this->Item->Categoria->find('list');
            $subcategorias = $this->Item->Categoria->Subcategoria->find('list');

            foreach ($results as $key => $result) {
                if (isset($result['Proceso']['user_id']) && isset($result['Item'])) {
                    $results[$key]['Proceso']['propio'] = $result['Proceso']['user_id'] == AuthComponent::user('id') ? "Si" : "No";
                    $results[$key]['Proceso']['cant_items'] = count($result['Item']);
                }
                if (isset($result['Proceso']['fecha_fin'])) {
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
