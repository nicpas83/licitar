<?php
App::uses('AppModel', 'Model');
App::uses('Categoria', 'Categorias.Model');

class AlertaVendedor extends AppModel {

    public $useTable = 'alertas_vendedores';
    public $belongsTo = ['User'];

    public function afterFind($results, $primary = false) {

        return $results;
    }

    public function getAlertas($user_id) {
        $alertas = $this->find('all', ['conditions' => ['user_id' => $user_id]]);
        $categogias = (new Categoria())->find('list');
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
