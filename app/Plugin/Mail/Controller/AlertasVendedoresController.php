<?php

App::uses('AppController', 'Controller');
//App::uses("AccessInflector", "Lib");

class AlertasVendedoresController extends AppController {
    
    public function rubros_publicacion() {
        
//        debug(AccessInflector::getUninflected());
//        debug(AccessInflector::getPlural());die;
        if ($this->request->is('post')) {
            if ($this->User->AlertaVendedor->saveAll($this->request->data['AlertaVendedor'])) {
                $this->Flash->success(__('Los Datos de tu cuenta fueron actualizados.'), 'success');
                return $this->redirect(array('action' => 'alertas_vendedor'));
            } else {
                $this->Flash->error(__('Error al actualizar los datos.'));
            }
        }
        $alertas_vendedor = $this->AlertaVendedor->getAlertas();
        $this->set('alertas_vendedor', $alertas_vendedor);
        $this->set('categorias', $this->Categoria->options());
    }
    
    

    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }

        if ($this->AlertaVendedor->delete($id)) {
            $this->Flash->success('Alerta eliminada.');
            $this->redirect(array('controller' => 'users', 'action' => 'alertas_vendedor'));
        }
    }


    public function ajax_set_alerta() {
        $this->AlertaVendedor->save([
            'user_id' => AuthComponent::user('id'),
            'categoria_id' => $this->request->data['categoria_id'],
            'subcategorias' => implode(',', $this->request->data['subcategorias']),
        ]);
        $this->set('data', $this->AlertaVendedor->getLastInsertID());
        $this->render("/ajax", "ajax");
    }

    public function ajax_get_alerta($id = null) {
        $alerta = $this->AlertaVendedor->findById($id);
        if ($alerta) {
            $data['categoria'] = $alerta['AlertaVendedor']['categoria_id'];
            $data['subcategorias'] = explode(',', $alerta['AlertaVendedor']['subcategorias']);

            $this->set("data", $data);
            return $this->render("/ajax", "ajax");
        }
    }

    public function ajax_update_alerta() {
        $this->AlertaVendedor->updateAll([
            'categoria_id' => "'" . $this->request->data['categoria_id'] . "'",
            'subcategorias' => "'" . implode(',', $this->request->data['subcategorias']) . "'",
                ], [
            'AlertaVendedor.id' => $this->request->data['alerta_id']
        ]);

        $this->render("/ajax", "ajax");
    }
    
    public function ajax_delete() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->AlertaVendedor->delete($this->request->data['id'])) {
            $this->set("data", true);
            return $this->render("/ajax", "ajax");
        }
    }

}
