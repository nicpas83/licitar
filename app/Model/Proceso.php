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

    public function verProcesoActivo($proceso_id, $user_id) {

        if (!is_numeric($proceso_id)) {
            return false;
        }
        $proceso = $this->find('first', ['conditions' => ['Proceso.id' => $proceso_id]]);
        if (!$proceso) {
            return false;
        }
        //Agrego mensajes de los requisitos excluyentes
        $proceso['Proceso']['requisitos'] = $this->configurarMensajesRequisitos($proceso['Proceso']);

        //limpio claves requisitos
        $quitarClaves = array('excluyente_factura', 'excluyente_gestion_envio', 'excluyente_oferta_completa');
        $proceso['Proceso'] = $this->quitarClavesDelArray($proceso['Proceso'], $quitarClaves);

        // agrego 'propio' si/no
        $proceso = $this->validarTitularidadDelProceso($proceso, $user_id);

        //traer ofertas de cada item.
        $proceso['Item'] = $this->traerUltimasOfertasPorUsuario($proceso['Item']);

//        debug($proceso);die;
        return $proceso;
    }

    public function traerUltimasOfertasPorUsuario($items) {
        App::uses('Oferta', 'Model');
        $ofertas = new Oferta();

        $proceso_id = $items[0]['proceso_id'];
        $options = [
            'fields' => ['created', 'user_id', 'item_id', 'valor_oferta'],
            'conditions' => ['proceso_id' => $proceso_id],
            'group' => ['user_id', 'item_id'],
            'having' => ['MAX(created)']
        ];
        $ofertasDelProceso = $ofertas->find('all', $options);

//        debug($ofertasDelProceso);die;


        foreach ($items as $key => $item) {
            foreach ($ofertasDelProceso as $oferta) {
                if ($item['id'] == $oferta['Oferta']['item_id']) {
                    $items[$key]['ofertas'][$oferta['Oferta']['user_id']] = $oferta['Oferta']['valor_oferta'];
                }
            }
        }

//        debug($items);die;

        return $items;
    }

    public function validarTitularidadDelProceso($proceso, $user_id) {
        if ($proceso['User']['id'] == $user_id) {
            $proceso['Proceso']['propio'] = 'Si';
        }
        return $proceso;
    }

    public function configurarMensajesRequisitos($proceso) {
//        debug($proceso);die;
        //preparar mensajes para requisitos excluyentes
        $mensajes = array();
        if ($proceso['excluyente_factura'] == 'Si') {
            array_push($mensajes, 'Emitir Factura A');
        }
        if ($proceso['excluyente_gestion_envio'] == 'Si') {
            array_push($mensajes, 'Gestión del Envío');
        }
        if ($proceso['excluyente_oferta_completa'] == 'Si') {
            array_push($mensajes, 'Realizar oferta para todos los Items.');
        }
        return $mensajes;
    }


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
            $procesos[$key]['comprador'] = $value['User']['username'];
            $procesos[$key]['referencia'] = $value['Proceso']['referencia'];
            $procesos[$key]['proceso_nro'] = $value['Proceso']['proceso_nro'];
            $procesos[$key]['q_items'] = count($value['Item']);
            $procesos[$key]['q_unidades'] = array_sum(array_column($value['Item'], 'cantidad'));
            $procesos[$key]['fecha_fin'] = $value['Proceso']['fecha_fin'];

            /* FILTROS DE BUSQUEDA */
            //listado compradores con proceso activo
            $compradores[$value['User']['id']] = $value['User']['username'];
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
            'conditions' => ['user_id' => $user_id, 'Proceso.estado' => 1]
        ]);
        
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
    
    

    public function registrarParticipacion($proceso_id, $user_id) {

        $result = $this->Participacion->find('first', array(
            'conditions' => [
                'proceso_id' => $proceso_id,
                'user_id' => $user_id,
            ],
            'recursive' => -1
        ));

        if ($result) {
            $participacion_id = $result['Participacion']['id'];
        } else {
            $nuevaParticipacion = array(
                'user_id' => $user_id,
                'proceso_id' => $proceso_id
            );
            $this->Participacion->create();
            $this->Participacion->save($nuevaParticipacion);
            $participacion_id = $this->Participacion->getLastInsertId();
        }

        return $participacion_id;
    }

    public function decodeItems($items) {
                
        $rubros = json_decode($items['rubros']);
        $nombres = json_decode($items['nombres']);
        $cantidades = json_decode($items['cantidades']);
        $unidades = json_decode($items['unidades']);
        $especificaciones = json_decode($items['especificaciones']);
        $data = array();

        foreach ($rubros as $key => $val) {
            $data[$key]['rubro_id'] = $val;
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
    
    public function buscarUltimoProcesoUsuario($user_id){
        $ultimo_proceso = $this->find('first', array(
            'fields' => array('MAX(proceso_nro) AS nro'),
            'conditions' => array('user_id' => $user_id)
        ));
        
        $nro = $ultimo_proceso[0]['nro'] == null ? 0 : $ultimo_proceso[0]['nro'];
        
        return $nro;
    }

    public function afterFind($results, $primary = false) {

        //Agrego el nombre del rubro para cada Item.
        $rubrosObj = new Rubro();
        $rubros = $rubrosObj->options();

        if (isset($results[0]['Proceso']) || isset($results['Proceso'])) {
            foreach ($results as $keyPr => $result) {
                $results[$keyPr]['Proceso']['fecha_fin'] = $this->dateDMY($result['Proceso']['fecha_fin']);
                if (!empty($result['Item'])) {
                    foreach ($result['Item'] as $keyIt => $item) {
                        $results[$keyPr]['Item'][$keyIt]['rubro'] = $rubros[$item['rubro_id']];
                    }
                }
            }
        }
//        debug($results);die;

        return $results;
    }

    public function beforeSave($options = array()) {

        $this->data['Proceso']['fecha_fin'] = $this->dateYMD($this->data['Proceso']['fecha_fin']);

        return true;
    }

}
