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

    public function grabarActualizar($data, $proceso_id, $user_id) {

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

    //prepara array con la info necesaria y borra lo demás.
    public function misParticipacionesActivas($user_id) {

        $participaciones = $this->find('all', [
            'conditions' => [
                'Participacion.user_id' => $user_id,
                'Participacion.estado_actual' => 1
            ],
        ]);

        if ($participaciones) {
            foreach ($participaciones as $key => $participacion) {
                $participaciones[$key]['Participacion']['referencia'] = $participacion['Proceso']['referencia'];
                $participaciones[$key]['Participacion']['fecha_fin'] = $participacion['Proceso']['fecha_fin'];
                $participaciones[$key]['Participacion']['detalles'] = $participacion['Proceso']['detalles'];
                $participaciones[$key]['Participacion']['condicion_pago'] = $participacion['Proceso']['condicion_pago'];
                $participaciones[$key]['Participacion']['q_items'] = 0;
                $participaciones[$key]['Participacion']['total_oferta'] = 0;

                foreach ($participacion['Oferta'] as $oferta) {
                    $participaciones[$key]['Participacion']['q_items'] ++;
                    $participaciones[$key]['Participacion']['total_oferta'] += $oferta['valor_oferta'];
                }
                $participaciones[$key] = $this->quitarClavesDelArray($participaciones[$key], array('Oferta', 'Proceso'));
            }
        }

        return $participaciones;
    }

}
