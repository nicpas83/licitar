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

    public function buscarMejoresOfertas($items) {

        $proceso_id = $items[0]['proceso_id'];
        $ofertas = $this->find('all', [
            'fields' => ['created', 'user_id', 'item_id', 'valor_oferta'],
            'conditions' => ['proceso_id' => $proceso_id],
        ]);


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
    
    public function validarOferta($proceso_id, $ofertas){
        debug($ofertas);die;
        
    }

    public function registrarOferta($proceso_id, $user_id, $participacion_id, $oferta) {
        $data = array();

        foreach ($oferta['Oferta']['valor_oferta'] as $key => $valor) {

            $array = array(
                'valor_oferta' => $valor,
                'item_id' => $oferta['Oferta']['item_id'][$key],
                'proceso_id' => $proceso_id,
                'user_id' => $user_id,
                'participacion_id' => $participacion_id
            );

            array_push($data, $array);
        }

        $this->create();
        $result = $this->saveAll($data);

        if ($result) {
            return true;
        }
    }

    public function actualizarOferta($oferta) {
        
    }

}
