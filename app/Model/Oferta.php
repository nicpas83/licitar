<?php

App::uses('AppModel', 'Model');
App::uses('Categoria', 'Model');

class Oferta extends AppModel {

    public $useTable = 'ofertas';
    public $recursive = -1;
    public $belongsTo = array(
        'Participacion' => [
            'className' => 'Participacion',
            'foreignKey' => 'participacion_id',
            'dependent' => true
        ],
        'Proceso' => [
            'className' => 'Proceso',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
        'Item' => [
            'className' => 'Item',
            'foreignKey' => 'item_id',
            'dependent' => true
        ],
    );

    public function getMisOfertas($user_id) {

        $ofertas = $this->find('all', [
            'conditions' => [
                'Oferta.user_id' => $user_id,
                'Oferta.estado_actual' => 1
            ],
            'fields' => [
                'Item.id',
                'Item.nombre',
                'Item.cantidad',
                'Item.unidad',
                'Item.especificaciones',
                'Proceso.id',
                'Proceso.referencia',
                'Proceso.fecha_fin',
                'Proceso.fecha_entrega',
                'Proceso.condicion_pago',
                'MIN(valor_oferta) as mi_mejor_oferta',
                'MAX(Oferta.created) as fecha_hora',
            ],
            'joins' => array(
                array(
                    'table' => 'items',
                    'alias' => 'Item',
                    'type' => 'INNER',
                    'conditions' => array(
                        'Oferta.item_id = Item.id'
                    )
                ),
                array(
                    'table' => 'procesos',
                    'alias' => 'Proceso',
                    'type' => 'INNER',
                    'conditions' => array(
                        'Oferta.proceso_id = Proceso.id'
                    )
                ),
            ),
            'group' => ['Oferta.item_id'],
        ]);

//        debug($ofertas);die;

        if (!$ofertas) {
            return false;
        }

        return $ofertas;
    }

    public function setResultadosActuales($mis_ofertas, $userId) {

        $itemsIds = $this->Item->getItemsIds($mis_ofertas);
        $resultados = $this->getMejoresOfertas($itemsIds);

        foreach ($mis_ofertas as $key => $val) {

            $itemId = $val['Item']['id'];

            foreach ($resultados[$itemId] as $keyRes => $resultado) {

                if ($userId == $resultado['user_id']) {
                    $mis_ofertas[$key][0]['resultado'] = $keyRes + 1;
                }
            }
        }

        return $mis_ofertas;
    }

    /**
     * @param type $itemsIds
     * @return type $ofertas
     */
    public function getOfertas($itemsIds) {
        return $this->find('all', [
                    'conditions' => ['item_id IN' => $itemsIds],
        ]);
    }

    public function getMejoresOfertas($itemsIds) {
        $mejores_ofertas = $this->find('all', [
            'conditions' => ['item_id IN' => $itemsIds],
            'fields' => ['Oferta.user_id', 'Oferta.item_id', 'Oferta.created', 'MIN(Oferta.valor_oferta) as mejor_oferta', 'COUNT(Oferta.id) as q_ofertas'],
            'group' => ['Oferta.user_id', 'Oferta.item_id']
        ]);

        //recorro cada item y defino un array con los resultados de ofertas.  
        foreach ($itemsIds as $item) {
            $resultados[$item] = array();

            foreach ($mejores_ofertas as $mejor_oferta) {

                if ($item == $mejor_oferta['Oferta']['item_id']) {
                    $resultados[$item][] = [
                        'user_id' => $mejor_oferta['Oferta']['user_id'],
                        'oferta' => $mejor_oferta[0]['mejor_oferta']
                    ];
                }
            }
            //ordeno los resultados mediante función de appModel
            $resultados[$item] = $this->arrayOrderBy($resultados[$item], 'oferta');
        }


        return $resultados;
    }

    public function validarOferta($ofertas) {
        $q_items_oferta = 0;
        foreach ($ofertas['Oferta'] as $oferta) {
            if (is_numeric($oferta['valor_oferta']) && $oferta['valor_oferta'] > 0) {
                $q_items_oferta++;
            }
        }

        if ($q_items_oferta === 0) {
            return false;
        } else {
            return true;
        }
    }

    public function registrarOferta($proceso_id, $user_id, $participacion_id, $oferta) {

        foreach ($oferta['Oferta'] as $key => $val) {

            if (empty($val['valor_oferta'])) {
                unset($oferta['Oferta'][$key]);
                continue;
            }

            $oferta['Oferta'][$key]['proceso_id'] = $proceso_id;
            $oferta['Oferta'][$key]['user_id'] = $user_id;
            $oferta['Oferta'][$key]['participacion_id'] = $participacion_id;
        }

        $this->create();
        $result = $this->saveAll($oferta['Oferta']);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function actualizarOferta($oferta) {
        
    }

}
