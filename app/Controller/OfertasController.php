<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class OfertasController extends AppController {

    public function add($proceso_id = null) {

        if ($this->request->is('post')) {

            //validar oferta 
            $validacion = $this->Oferta->validarOferta($this->request->data);
            if (!$validacion) {
                $this->Flash->error(__('La oferta que intenta registrar no es válida o no cumple los requisitos.'));
                $this->redirect($this->referer());
            }

            //si viene desde Mis Ofertas el proceso_id puede cambiar en cada Item
            if (!$proceso_id) {
                foreach ($this->request->data['Oferta'] as $key => $oferta) {
                    if (empty($oferta['valor_oferta'])) {
                        continue;
                    }
                    $this->request->data['Oferta'][$key]['user_id'] = $this->Auth->user('id');
                    $this->request->data['Oferta'][$key]['participacion_id'] = $this->Oferta->Participacion->getParticipacion($oferta['proceso_id'], $this->Auth->user('id'));
                    $this->Oferta->create();
                    $result = $this->Oferta->saveAll($this->request->data['Oferta'][$key]);
                }
            } else {
                $participacion_id = $this->Oferta->Participacion->getParticipacion($proceso_id, $this->Auth->user('id'));
                $result = $this->Oferta->registrarOferta($proceso_id, $this->Auth->user('id'), $participacion_id, $this->request->data);
            }


            if ($result) {
                $this->Flash->success('La Oferta fue realizada con éxito.');
                return $this->redirect(array('controller' => 'ofertas', 'action' => 'mis_ofertas'));
            } else {
                $this->Flash->error(__('Error al realizar la Oferta.'));
            }
        }
    }

    public function edit() {
        $this->autoRender = false;  // no tiene vista asociada. 
        if ($this->request->is('post')) {

            if ($this->Oferta->saveMany($this->request->data['Oferta'])) {
                $this->Flash->success('Tu Oferta fue actuallizada con éxio.');
                return $this->redirect(array('controller' => 'participaciones'));
            } else {
                $this->Flash->error('Error al actualizar tu Oferta.');
                return $this->redirect(array('controller' => 'participaciones'));
            }
        } else {
            return $this->redirect(array('controller' => 'procesos'));
        }
    }

    public function mis_ofertas() {

        $mis_ofertas = $this->Oferta->getMisOfertas($this->Auth->user('id'));
        if (!$mis_ofertas) {
            $this->Flash->error(__("No tenés ofertas en curso."));
            $this->redirect($this->referer());
        }

        $mis_ofertas = $this->Oferta->setResultadosActuales($mis_ofertas, $this->Auth->user('id'));



        $this->set('ofertas', $mis_ofertas);
    }

    public function mis_participaciones() {
        $procesos_ids = array();

        foreach ($ofertas as $oferta) {
            array_push($procesos_ids, $oferta['Oferta']['proceso_id']);
        }
        $procesos_ids = array_unique($procesos_ids);

        //traigo info de los procesos en los que participa
        $procesos = $this->Oferta->Proceso->find('all', [
            'conditions' => ['Proceso.id' => $procesos_ids],
        ]);

        $this->set('procesos', $procesos);
//        debug($procesos);die;
    }

}
