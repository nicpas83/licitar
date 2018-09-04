<?php

// app/Controller/AlertasController.php
App::uses('AppController', 'Controller');

class AlertasVendedoresController extends AppController {
    
    
    public function configuracion() {
        $id = AuthComponent::user('id');
        $this->set('user', $this->Alerta->findByUserId($id));

        if ($this->request->is('post')) {
            $this->User->id = $id;
//            debug($this->request->data);die;
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('Los Datos de tu cuenta fueron actualizados.'), 'success');
                return $this->redirect(array('action' => 'mi_cuenta'));
            } else {
                $this->Flash->error(__('Error al actualizar los datos.'));
            }
        }
    }


}
