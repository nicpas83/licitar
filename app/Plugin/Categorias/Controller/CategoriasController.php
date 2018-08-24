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

}
