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

    public function setMejoresOfertas($items, $itemsIds) {

        $ofertas = $this->find('all', [
            'conditions' => ['item_id IN' => $itemsIds],
            'order' => ['Oferta.valor_oferta ASC'],
            'limit' => 3
        ]);
        debug($ofertas);die;

        foreach ($items as $key => $item) {
            $valorOferta = false; //reseteo para cada item

            if ($ofertas) {
                foreach ($ofertas as $oferta) {
                    if ($item['id'] == $oferta['Oferta']['item_id']) {
                        //si es falso o si la nueva oferta es menor.
                        if (!$valorOferta || $oferta['Oferta']['valor_oferta'] < $valorOferta) {
                            //piso valor oferta
                            $valorOferta = $oferta['Oferta']['valor_oferta'];
                            $items[$key]['mejor_oferta'] = $valorOferta;
                        }
                    }
                }
            } else {
                $items[$key]['mejor_oferta'] = "Aún Sin Ofertas";
            }
        }

        return $items;
    }

    public function validarOferta($proceso_id, $ofertas) {
        $proceso = $this->Proceso->findById($proceso_id);
        $q_items_proceso = count($proceso['Item']);
        $q_items_oferta = 0;
        foreach ($ofertas['Oferta'] as $oferta) {
            if (is_numeric($oferta['valor_oferta']) && $oferta['valor_oferta'] > 0) {
                $q_items_oferta++;
            }
        }
        if ($proceso['Proceso']['excluyente_oferta_completa'] == 1) {
            if ($q_items_proceso !== $q_items_oferta) {
                return false;
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
            $oferta['Oferta'][$key]['proceso_id'] = $proceso_id;
            $oferta['Oferta'][$key]['user_id'] = $user_id;
            $oferta['Oferta'][$key]['participacion_id'] = $participacion_id;
        }
//        debug($oferta);die;
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
