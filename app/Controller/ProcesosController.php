<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ProcesosController extends AppController {

    public function nuevo() {

        if ($this->request->is('post')) {

            $rubros = json_decode($this->request->data['Item']['rubros']);
            $nombres = json_decode($this->request->data['Item']['nombres']);
            $cantidades = json_decode($this->request->data['Item']['cantidades']);
            $unidades = json_decode($this->request->data['Item']['unidades']);
            $especificaciones = json_decode($this->request->data['Item']['especificaciones']);
            $arr = array();

            foreach ($rubros as $key => $val) {
                $arr[$key]['rubro_id'] = $val;
            }
            foreach ($nombres as $key => $val) {
                $arr[$key]['nombre'] = $val;
            }
            foreach ($cantidades as $key => $val) {
                $arr[$key]['cantidad'] = $val;
            }
            foreach ($unidades as $key => $val) {
                $arr[$key]['unidad'] = $val;
            }
            foreach ($especificaciones as $key => $val) {
                $arr[$key]['especificaciones'] = $val;
            }
            $this->request->data['Item'] = $arr;
            $this->request->data['Proceso']['user_id'] = $this->Auth->user('id');

            if ($this->Proceso->saveAll($this->request->data)) {
                $this->Flash->success('El registro fue guardado.');
                return $this->redirect(array('controller' => 'pages','action' => 'display'));
            } else {
                $this->Flash->error(__('Error al guardar el registro.'));
            }
        }
    }

    public function activos() {
        
    }

    public function borradores() {
        
    }

}
