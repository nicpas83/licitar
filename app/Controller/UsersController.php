<<?php

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout', 'mi_perfil');
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect(['controller' => 'procesos', 'action' => 'index']);
            }
            $this->Flash->error(__('Error de usuario o contraseña.'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function mi_cuenta() {
        $id = AuthComponent::user('id');
        $this->User->recursive = -1;
        $this->set('user', $this->User->findById($id));

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
    
    public function alertas() {
        $id = AuthComponent::user('id');
        $this->User->recursive = -1;
        $this->set('user', $this->User->findById($id));

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

    public function registrar() {
        if ($this->request->is('post')) {
//            debug($this->request->data);die;
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('El usuario fue creado. Ya podés ingresar al sistema.'), 'success');
                return $this->redirect(array('action' => 'login'));
            } else {
                $this->Flash->error(__('Error al crear el usuario.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(
                    __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

}
