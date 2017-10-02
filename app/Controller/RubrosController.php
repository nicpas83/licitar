<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class RubrosController extends AppController {

    public function index($estado = null) {

        if ($estado == '0') {
            $configView = array(
                'titulo' => 'Rubros Inactivos',
                'estado' => 1,
                'accion' => array(
                    'editar' => 'btn btn-primary btn-xs fa fa-edit pull-right',
                    'eliminar' => 'btn btn-primary btn-xs fa fa-trash-o pull-right',
                    'activar' => 'btn btn-primary btn-xs fa fa-check-square-o pull-right'
                )
            );
        } else {
            $estado = 1;
            $configView = array(
                'titulo' => 'Rubros Activas',
                'estado' => 0,
                'accion' => array(
                    'editar' => 'btn btn-primary btn-xs fa fa-edit pull-right',
                    'desactivar' => 'btn btn-primary btn-xs fa fa-ban pull-right'
                )
            );
        }

        //paso variables a la vista.
        $this->set('configView', $configView);
        $this->set('rubros', $this->Rubro->find('all', [
                    'order' => ['orden ASC'],
                    'conditions' => ['estado' => $estado]
                        ]
        ));
    }

    public function nuevo() {

        if ($this->request->is('post')) {
            $this->request->data['Rubro']['user_id'] = $this->Auth->user('id');
            
            $this->Rubro->create();
            if ($this->Rubro->save($this->request->data)) {
                $this->Flash->success('El registro fue guardado.');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Error al guardar el registro.'));
            }
        }
    }

    public function editar($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Registro inválido'));
        }
        $result = $this->Rubro->findById($id);
        if (!$result) {
            throw new NotFoundException(__('Registro inválido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $estado = $this->request->data['Rubro']['estado'];
            $this->Rubro->id = $id;
            if ($this->Rubro->save($this->request->data)) {
                $this->Flash->success(__('El registro fue actualizado.'));
                return $this->redirect(array('action' => 'index', 1));
            }
            $this->Flash->error(__('Error al actualizar el registro.'));
        }

        if (!$this->request->data) {
            $this->request->data = $result;
        }
    }

    public function eliminar($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Rubro->delete($id)) {
            $this->Flash->success(__('El registro fue eliminado.'));
        } else {
            $this->Flash->error(__('Error al eliminar el registro.'));
        }
        return $this->redirect(array('action' => 'index', 0));
    }

    public function activar($id = null) {
        $this->autoRender = false;  // no tiene vista asociada. 

        if ($id) {
            $this->Rubro->desactivar($id);
            if ($this->Rubro->activar($id)) {
                $this->Flash->success(__('El registro fue activado.'));
                return $this->redirect(array('action' => 'index', 1));
            }
        }
    }

    public function historial($orden) {
        if (!empty($orden)) {
            $configView = array(
                'titulo' => 'Historial',
                'linkBtn' => 'Volver',
                'accion' => array(
                    'editar' => 'btn btn-primary btn-xs fa fa-edit pull-right',
                    'eliminar' => 'btn btn-primary btn-xs fa fa-trash-o pull-right',
                    'activar' => 'btn btn-primary btn-xs fa fa-check-square-o pull-right'
                )
            );
        }
        //paso variables a la vista.
        $this->set('configView', $configView);
        $this->set('contenidos', $this->Rubro->find('all', [
                    'order' => ['estado DESC'],
                    'conditions' => ['orden' => $orden]
                        ]
        ));
    }

    public function combo_seccion($name) {
        $this->autoRender = false;
        return $this->Rubro->crear_combo($name);
    }

    public function actualizarComboAnidado($nuevoCombo, $relacionadoA) {
        $this->autoRender = false;
        return $this->Rubro->crear_combo($nuevoCombo, $relacionadoA);
    }

    public function obtenerRubro() {
        $this->autoRender = false;
        if (isset($_POST) && !empty($_POST['seccion']) && !empty($_POST['descripcion'])) {
            $data = $this->Rubro->buscar_registro($_POST['seccion'], $_POST['descripcion']);
        }
        return json_encode($data[0]['Rubro']);
    }

}
