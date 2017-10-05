<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ProcesosController extends AppController {

    public function nuevo() {
        $this->set('rubros', $this->Rubro->options());
        
        if ($this->request->is('post')) {
//            $this->request->data['Contenido']['user_id'] = $this->Auth->user('id');
//            $this->Contenido->create();
//            if ($this->Contenido->save($this->request->data)) {
//                $this->Flash->success('El registro fue guardado.');
//                return $this->redirect(array('action' => 'index'));
//            } else {
//                $this->Flash->error(__('Error al guardar el registro.'));
//            }
        }
    }
    
    public function activos(){
        
    }
    public function borradores(){
        
    }

}
