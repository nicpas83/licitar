<?php

App::uses('AppModel', 'Model');
App::uses('Categoria', 'Categorias.Model');

class AlertaVendedor extends AppModel {

    public $tablePrefix = 'mail_';
    public $useTable = 'alertas_vendedores';
    public $belongsTo = [
        'Alerta' => [
            'className' => 'Mail.Alerta',
            'foreignKey' => 'alerta_id'
        ]
    ];

    public function afterFind($results, $primary = false) {

        return $results;
    }

    public function getAlertas() {
        $alertas = $this->find('all', ['conditions' => ['user_id' => AuthComponent::user('id')]]);
        $categogias = (new Categoria())->find('list');
//        debug($alertas);die;
        $subcategogias = (new Categoria())->Subcategoria->find('list');
        $data = [];

        foreach ($alertas as $key => $alerta) {
            $data[$key]['alerta_id'] = $alerta['AlertaVendedor']['id'];
            $data[$key]['categoria_id'] = $alerta['AlertaVendedor']['categoria_id'];
            $data[$key]['categoria'] = $categogias[$alerta['AlertaVendedor']['categoria_id']];
            $data[$key]['subcategorias_ids'] = $alerta['AlertaVendedor']['subcategorias'];
            $data[$key]['subcategorias'] = "";

            $subcatSeleccionadas = explode(',', $alerta['AlertaVendedor']['subcategorias']);

            foreach ($subcatSeleccionadas as $subcat) {
                $data[$key]['subcategorias'] .= "" . $subcategogias[$subcat] . " - ";
            }
            $data[$key]['subcategorias'] = rtrim($data[$key]['subcategorias'], "  - ");
        }

        return $data;
    }

}
