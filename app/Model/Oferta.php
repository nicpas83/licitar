<?php

App::uses('AppModel', 'Model');
App::uses('Categoria', 'Model');

class Oferta extends AppModel {

    public $useTable = 'ofertas';
    
    public $belongsTo = array(
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

    public function getMisOfertas() {
        $this->virtualFields["mi_mejor_oferta"] = "MIN(Oferta.valor_oferta)";
        $ofertas = $this->find('all', [
            'conditions' => [
                'Oferta.user_id' => AuthComponent::user('id'),
                'Oferta.estado_actual' => 1
            ],
            'group' => ['Oferta.item_id'],
        ]);

        if (!$ofertas) {
            return false;
        }

        return $ofertas;
    }

    public function setMisResultadosActuales($mis_ofertas) {

        $itemsIds = array_column(array_column($mis_ofertas, 'Item'), 'id');
        $resultados = $this->getMejoresOfertas($itemsIds);
//        debug($itemsIds);die;
        

        foreach ($mis_ofertas as $key => $val) {

            $itemId = $val['Item']['id'];

            foreach ($resultados[$itemId] as $keyRes => $resultado) {

                if (AuthComponent::user('id') == $resultado['user_id']) {
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
        $this->virtualFields["mejor_oferta"] = "MIN(Oferta.valor_oferta)";
        $mejores_ofertas = $this->find('all', [
            'conditions' => ['item_id IN' => $itemsIds],
            'group' => ['Oferta.user_id', 'Oferta.item_id'],
            'recursive' => -1
        ]);
//        debug($mejores_ofertas);die;

        //recorro cada item y defino un array con los resultados de ofertas.  
        foreach ($itemsIds as $item) {
            $resultados[$item] = [];

            foreach ($mejores_ofertas as $mejor_oferta) {

                if ($item == $mejor_oferta['Oferta']['item_id']) {
                    $resultados[$item][] = [
                        'user_id' => $mejor_oferta['Oferta']['user_id'],
                        'oferta' => $mejor_oferta['Oferta']['mejor_oferta']
                    ];
                }
            }
            //ordeno los resultados mediante función de appModel
            $resultados[$item] = $this->arrayOrderBy($resultados[$item], 'oferta');
        }

//        debug($resultados);die;

        return $resultados;
    }

    public function validarOferta($data) {
        $proceso = $this->Proceso->findById($data['params']['pass'][0]);
        debug($data->params['pass'][0]);die;
        debug($proceso);die;
        
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

    public function registrarOferta($proceso_id, $oferta) {
        
        foreach ($oferta['Oferta'] as $key => $val) {

            if (empty($val['valor_oferta'])) {
                unset($oferta['Oferta'][$key]);
                continue;
            }

            $oferta['Oferta'][$key]['proceso_id'] = $proceso_id;
            $oferta['Oferta'][$key]['user_id'] = AuthComponent::user('id');
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
