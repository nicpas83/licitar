<?php

App::uses('AppModel', 'Model');
App::uses('Rubro', 'Model');

class Oferta extends AppModel {

    public $useTable = 'ofertas';
    public $recursive = -1;
    public $validate = array(
//        'titulo' => array(
//            'rule' => 'notBlank',
//            'message' => 'El campo es obligatorio'
//        )
    );
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
    
    public function actualizarOferta($oferta){
        
        
    }

}
