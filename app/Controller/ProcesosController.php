<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ProcesosController extends AppController {

    public function index() {
        $procesos = $this->Proceso->procesosActivos();
        $this->set('categorias', $procesos['categorias']);
        $this->set('compradores', $procesos['compradores']);
        $this->set('procesos', $procesos['procesos']);
    }

    public function view($id = null) {
        $proceso = $this->Proceso->verProcesoActivo($id, $this->Auth->user('id'));
        //valido que por URL solo se pueda acceder a procesos activos.
        if ($proceso && $proceso['Proceso']['estado'] == 1) {
            $this->set('proceso', $proceso['Proceso']);
            $this->set('comprador', $proceso['User']['username']);
            $this->set('items', $proceso['Item']);
        } else {
            $this->flash(__("El proceso al que intenta acceder no es un proceso activo."), array("action" => "index"));
        }
    }

    public function edit($id = null) {

        $proceso = $this->Proceso->findByIdAndUserId($id, $this->Auth->user('id'));
        //valido que por URL solo se pueda acceder a procesos activos y propios.
        if ($proceso && $proceso['Proceso']['estado'] == 1) {
            $this->set('categorias', $this->Categoria->options());
            $this->set('unidades', $this->Unidad->options());
            $this->set('condiciones', [
                'Contado' => 'Contado',
                '30 dias' => '30 dias',
                '30-60 dias' => '30-60 dias',
                '30-60-90 dias' => '30-60-90 dias',
            ]);

            $this->set('proceso', $proceso['Proceso']);
            $this->set('items', $proceso['Item']);
        } else {
            $this->Flash->error('El proceso al que intenta acceder no es válido.');
            return $this->redirect(array('controller' => 'procesos', 'action' => 'mis_procesos'));
        }


        if ($this->request->is('post')) {
            
            //actualizo proceso   
            if ($this->Proceso->saveAll($this->request->data)) {
                $this->Flash->success('El Proceso fue editado con éxio.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            } else {
                $this->Flash->error('Error al grabar el Proceso.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            }
        }
    }

    public function delete($id) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Proceso->delete($id)) {
            $this->Flash->success('El proceso fue eliminado exitosamente.');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function add() {

        if ($this->request->is('post')) {
            $this->request->data['Proceso']['user_id'] = $this->Auth->user('id');
            
            $items = $this->Proceso->decodeItems($this->request->data['Item']);
            $this->request->data['Item'] = $items;
            $procesoNro = $this->Proceso->buscarUltimoProcesoUsuario($this->Auth->user('id'));
            $this->request->data['Proceso']['proceso_nro'] = $procesoNro + 1;

            if ($this->Proceso->saveAll($this->request->data)) {
                $this->Flash->success('El Proceso fue creado con éxio.');
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            } else {
                $this->Flash->error(__('Error al grabar el Proceso.'));
            }
        } else {
            $this->set('categorias', $this->Categoria->options());
            $this->set('unidades', $this->Unidad->options());
            $this->set('condiciones', [
                'Contado' => 'Contado',
                '30 dias' => '30 dias',
                '30-60 dias' => '30-60 dias',
                '30-60-90 dias' => '30-60-90 dias',
            ]);
        }
    }

    public function mis_procesos() {
        $procesos = $this->Proceso->misProcesosActivos($this->Auth->user('id'));

        if (!$procesos) {
            $this->Flash->success('No tenés procesos publicados. Publicá uno!');
            return $this->redirect(array('controller' => 'procesos', 'action' => 'add'));
        }
        $this->set('indicadores', $procesos['Indicadores']);
        $this->set('procesos', $procesos['Procesos']);
    }

    public function borradores() {
        
    }

}
