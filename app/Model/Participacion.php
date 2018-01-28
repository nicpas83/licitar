<?php

App::uses('AppModel', 'Model');

class Participacion extends AppModel {

    public $useTable = 'participaciones';
    
    public $belongsTo = [
        'Proceso' => [
            'className' => 'Proceso',
            'foreignKey' => 'proceso_id'
        ],
        
    ];
    public $hasMany = [
        'Oferta' => [
            'className' => 'Oferta',
            'foreignKey' => 'participacion_id'
        ]
    ];

    public function grabarActualizar($data,$proceso_id, $user_id) {

        
        $participacion = array(
            'Participacion' => array(
                'user_id' => $user_id,
                'proceso_id' => $proceso_id,
                'estado_inicial' => 'algo',
                'estado_actual' => 'algo mas',
            )
        );

        //Registro la participación en el proceso.
        $this->create();
        if ($this->save($participacion)) {

            //Items del proceso actual
            $items = $this->Proceso->Item->find('all', array(
                'conditions' => ['proceso_id' => $proceso_id],
                'recursive' => -1
            ));
            debug($items);
            die;
            //Registro las ofertas para cada Item.
            $oferta = array(
                'Oferta' => array(
                    'user_id' => $this->Auth->user('id'),
                    'participacion_id' => $this->Proceso->Participacion->id,
                    'proceso_id' => $proceso_id,
                )
            );
        }
    }

    
}
