<?php

App::uses('AppModel', 'Model');
App::uses('Categorias.Categoria', 'Model');

class Proceso extends AppModel {

    public $useTable = 'procesos';
    public $filtroCategoria = null;
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

    /* validado */

    public function getProcesosActivos($categoria_id = null) {
        $results = $this->find('all', array(
            'conditions' => [
                'Proceso.estado' => 1,
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
            $data[$key]['fecha_fin'] = date('d/m/Y', strtotime($value['Proceso']['fecha_fin']));
        }

        return $data;
    }

    /* fin validados */

    public function getProcesosIds($array) {
        $procesosIds = [];

        foreach ($array as $val) {
            array_push($procesosIds, $val['Oferta']['proceso_id']);
        }

        return array_unique($procesosIds);
    }

    public function validarTitularidadDelProceso($proceso, $user_id) {
        if ($proceso['User']['id'] == $user_id) {
            $proceso['Proceso']['propio'] = 'Si';
        }
        return $proceso;
    }

    public function configurarRequisitosExcluyentes($proceso) {
        $mensajes = array();
        if ($proceso['Proceso']['excluyente_factura'] == 1) {
            array_push($mensajes, 'Emitir Factura A');
        }
        if ($proceso['Proceso']['excluyente_gestion_envio'] == 1) {
            array_push($mensajes, 'Encargarse de la Gestión de Envío');
        }
        $proceso['Proceso']['requisitos'] = $mensajes;
        return $proceso;
    }

    public function misProcesosActivos($user_id) {
        $procesos = array();
        $result = $this->find('all', [
            'conditions' => ['user_id' => $user_id, 'Proceso.estado' => 1]
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

    public function decodeItems($items = null) {

        $categorias = json_decode($items['categorias']);
        $subcategorias = json_decode($items['subcategorias']);
        $nombres = json_decode($items['nombres']);
        $cantidades = json_decode($items['cantidades']);
        $unidades = json_decode($items['unidades']);
        $especificaciones = json_decode($items['especificaciones']);
        $data = array();

        foreach ($categorias as $key => $val) {
            $data[$key]['categoria_id'] = $val;
        }
        foreach ($subcategorias as $key => $val) {
            $data[$key]['subcategoria_id'] = $val;
        }
        foreach ($nombres as $key => $val) {
            $data[$key]['nombre'] = $val;
        }
        foreach ($cantidades as $key => $val) {
            $data[$key]['cantidad'] = $val;
        }
        foreach ($unidades as $key => $val) {
            $data[$key]['unidad'] = $val;
        }
        foreach ($especificaciones as $key => $val) {
            $data[$key]['especificaciones'] = $val;
        }
        return $data;
    }

    //Para los input hidden al editar.
    public function encodeItems($items = null) {

        $data = array();

        foreach ($items as $item) {

            $data['itemIds'][] = $item['id'];
            $data['categorias'][] = $item['categoria_id'];
            $data['categoriasTxt'][] = $item['categoria'];
            $data['subcategorias'][] = $item['subcategoria_id'];
            $data['subcategoriasTxt'][] = $item['subcategoria'];
            $data['nombres'][] = $item['nombre'];
            $data['cantidades'][] = $item['cantidad'];
            $data['unidades'][] = $item['unidad'];
            $data['especificaciones'][] = $item['especificaciones'];
        }

        $items = array();

        $items['itemIds'] = json_encode($data['itemIds']);
        $items['categorias'] = json_encode($data['categorias']);
        $items['categoriasTxt'] = json_encode($data['categoriasTxt'], JSON_UNESCAPED_UNICODE);
        $items['subcategorias'] = json_encode($data['subcategorias']);
        $items['subcategoriasTxt'] = json_encode($data['subcategoriasTxt'], JSON_UNESCAPED_UNICODE);
        $items['nombres'] = json_encode($data['nombres'], JSON_UNESCAPED_UNICODE);
        $items['cantidades'] = json_encode($data['cantidades']);
        $items['unidades'] = json_encode($data['unidades']);
        $items['especificaciones'] = json_encode($data['especificaciones'], JSON_UNESCAPED_UNICODE);


        return $items;
    }

    public function buscarUltimoProcesoUsuario($user_id) {
        $ultimo_proceso = $this->find('first', array(
            'fields' => array('MAX(proceso_nro) AS nro'),
            'conditions' => array('user_id' => $user_id)
        ));

        $nro = $ultimo_proceso[0]['nro'] == null ? 0 : $ultimo_proceso[0]['nro'];

        return $nro;
    }

    public function afterFind($results, $primary = false) {
        if (Router::getParams()['action'] == 'homepage') {
            foreach ($results as $key => $result) {
                $results[$key]['Proceso']['fecha_fin'] = $this->dateDMY($result['Proceso']['fecha_fin']);
                $results[$key]['Proceso']['fecha_entrega'] = $this->dateDMY($result['Proceso']['fecha_entrega']);
            }
        }

        if (in_array(Router::getParams()['action'], ['edit', 'view'])) {
            $categorias = $this->Item->Categoria->find('list');
            $subcategorias = $this->Item->Categoria->Subcategoria->find('list');

            $results[0]['Proceso']['fecha_fin'] = $this->dateDMY($results[0]['Proceso']['fecha_fin']);
            $results[0]['Proceso']['fecha_entrega'] = $this->dateDMY($results[0]['Proceso']['fecha_entrega']);

            foreach ($results[0]['Item'] as $key => $item) {
                $results[0]['Item'][$key]['categoria'] = $categorias[$item['categoria_id']];
                $results[0]['Item'][$key]['subcategoria'] = $subcategorias[$item['subcategoria_id']];
            }
        }



        return $results;
    }

    public function beforeSave($options = array()) {
        $this->data['Proceso']['fecha_fin'] = $this->dateYMD($this->data['Proceso']['fecha_fin']);
        $this->data['Proceso']['fecha_entrega'] = $this->dateYMD($this->data['Proceso']['fecha_entrega']);
        return true;
    }

    public function afterSave($created, $options = []) {

        if ($created) {

            $this->Item->files = $this->data['Item'];
//            debug($this->data);
//            die;
        }
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
