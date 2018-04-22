<?php

App::uses('AppModel', 'Model');

class Item extends AppModel {

    public $useTable = 'items';
    public $validate = array(
        'titulo' => array(
            'rule' => 'notBlank',
            'message' => 'El campo es obligatorio'
        )
    );
    public $hasMany = [
        'Oferta' => [
            'className' => 'Oferta',
            'foreignKey' => 'item_id',
            'dependent' => true
        ]
    ];
    public $belongsTo = [
        'Proceso' => [
            'className' => 'Proceso',
            'foreignKey' => 'proceso_id',
            'dependent' => true
        ],
    ];

    public function getItemsIds($data) {
//        debug($data);
        $itemsIds = [];
        if (isset($data['Item'])) {
            foreach ($data['Item'] as $item) {
                array_push($itemsIds, $item['id']);
            }
            return $itemsIds;
        } else {

            foreach ($data as $val) {
                if (isset($val['Item'])) {
                    array_push($itemsIds, $val['Item']['id']);
                }
            }
            return $itemsIds;
        }
    }
    

    public function setMejoresOfertas($items, $ofertas) {

        foreach ($items as $key => $item) {
            $items[$key]['mejor_oferta'] = 0; //sin ofertas
            $valorOferta = false; //reseteo para cada item

            if ($ofertas) {
                foreach ($ofertas as $oferta) {
                    if ($item['id'] == $oferta['Oferta']['item_id']) {
                        //si es primera oferta o si la nueva oferta es menor.
                        if (!$valorOferta || $oferta['Oferta']['valor_oferta'] < $valorOferta) {
                            //piso valor oferta
                            $valorOferta = $oferta['Oferta']['valor_oferta']; //true
                            $items[$key]['mejor_oferta'] = $valorOferta;
                            $items[$key]['ganador_id'] = $oferta['Oferta']['user_id'];
                            $items[$key]['fecha_oferta'] = $oferta['Oferta']['modified'];
                        }
                    }
                }
            }
        }

        return $items;
    }

    public function setCantidadProveedores($items, $ofertas) {
        foreach ($items as $key => $item) {
            $q_proveeodres = 0; //reseteo para cada item
            $proveedores_ids = [];
            if ($ofertas) {
                foreach ($ofertas as $oferta) {
                    //si la oferta es del item que recorro y el proveedor no está en el array
                    if ($item['id'] == $oferta['Oferta']['item_id'] && !in_array($oferta['Oferta']['user_id'], $proveedores_ids)) {
                        array_push($proveedores_ids, $oferta['Oferta']['user_id']);
                        $q_proveeodres++;
                    }
                }
                $items[$key]['q_proveedores'] = $q_proveeodres;
            } else {
                $items[$key]['q_proveedores'] = 0; //sin ofertas
            }
//            debug($proveedores_ids);
        }
//        die;
        return $items;
    }

}
