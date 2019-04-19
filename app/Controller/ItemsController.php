<?php

App::uses('AppController', 'Controller');

class ItemsController extends AppController {

    public function ajax_add_item() {
        $this->request->data['estado'] = 'Borrador';
        $this->request->data = [
            'Item' => $this->request->data
        ];

        if ($this->Item->save($this->request->data)) {
            $this->set("data", $this->Item->getLastInsertId());
            return $this->render("/ajax", "ajax");
        }
    }

    public function ajax_get_item($id = null) {
        $result = $this->Item->findById($id);
        if ($result) {
            $data['nombre'] = $result['Item']['nombre'];
            $data['categoria_id'] = $result['Item']['categoria_id'];
            $data['subcategoria_id'] = $result['Item']['subcategoria_id'];
            $data['cantidad'] = $result['Item']['cantidad'];
            $data['unidad'] = $result['Item']['unidad'];
            $data['especificaciones'] = $result['Item']['especificaciones'];

            $this->set("data", $data);
            return $this->render("/ajax", "ajax");
        }
    }

    public function ajax_update_item() {

        if ($this->Item->esPropio($this->request->data['id'])) {
            $this->Item->updateAll([
                'categoria_id' => "'" . $this->request->data['categoria_id'] . "'",
                'subcategoria_id' => "'" . $this->request->data['subcategoria_id'] . "'",
                'nombre' => "'" . $this->request->data['nombre'] . "'",
                'cantidad' => "'" . $this->request->data['cantidad'] . "'",
                'unidad' => "'" . $this->request->data['unidad'] . "'",
                'especificaciones' => "'" . $this->request->data['especificaciones'] . "'",
                    ], [
                'Item.id' => $this->request->data['id']
            ]);
            $this->set("data", "OK");
        } else {
            $this->set("data", "ERROR");
        }
        return $this->render("/ajax", "ajax");
    }

    public function ajax_delete() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Item->delete($this->request->data['id'])) {
            $this->set("data", true);
            return $this->render("/ajax", "ajax");
        }
    }

    //validación antes de continuar.
    public function ajax_check_items_before() {
        $items = $this->Item->find('all', [
            'conditions' => [
                'estado' => 'Borrador',
                'user_id' => $this->Auth->user('id')
            ],
            'recursive' => -1
        ]);
        $status = empty($items) ? "false" : "true";
        $this->set("data", $status);
        $this->render("/ajax", "ajax");
    }

}
