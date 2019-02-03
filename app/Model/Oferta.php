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

    

}
