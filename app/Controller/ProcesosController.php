<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ProcesosController extends AppController {

    public function index() {
        //$this->set('indicadores', $this->Proceso->misIndicadores($this->Auth->user('id')));
        $this->set('procesos', $this->Proceso->misProcesos($this->Auth->user('id')));
    }

    public function nuevo() {

        if ($this->request->is('post')) {
            $this->data['Proceso']['user_id'] = $this->Auth->user('id');
//            debug($this->request->data);die;
            if ($this->Proceso->saveAll($this->request->data)) {
                $this->Flash->success('El registro fue guardado.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            } else {
                $this->Flash->error(__('Error al guardar el registro.'));
            }
        }
    }

}
