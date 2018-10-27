<?php

App::uses('AppController', 'Controller');

class CategoriasController extends AppController {

    public function ajax_get_subcategorias($categoria_id) {
        $this->autoRender = false;
        $subcategorias = $this->Categoria->Subcategoria->find('list', [
            'fields' => ['Subcategoria.id', 'Subcategoria.nombre'],
            'conditions' => ['Subcategoria.categoria_id' => $categoria_id],
            'order' => ['Subcategoria.nombre']
        ]);

        return json_encode($subcategorias);
    }

    public function ajax_get_treeview_format() {
        $data = [];
        $categorias = $this->Categoria->find('list');
        $i = 0;
        foreach ($categorias as $key => $val) {
            $data[$i] = [
                'text' => $val,
                'href' => "javascript: get_subcat(" . $key . ");",
                'tags' => [0],
            ];
            $i++;
        }

        $this->set("data", $data);
        return $this->render("/ajax", "ajax");
    }

    public function ajax_get_subcategorias_treeview_format($id = null) {
        $data = [];
        $subcategorias = $this->Categoria->Subcategoria->find('list', [
            'conditions' => ['categoria_id' => $id],
        ]);
        $i = 0;
        foreach ($subcategorias as $key => $val) {
            $data[$i] = [
                'text' => $val,
                'href' => "javascript: set_rubro(" . $key . ");",
                'tags' => [0],
            ];
            $i++;
        }

        $this->set("data", $data);
        return $this->render("/ajax", "ajax");
    }

}
