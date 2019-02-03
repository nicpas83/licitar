<?php

App::uses('AppController', 'Controller');

class OfertasController extends AppController {

    public function add() {
        if ($this->request->is('post')) {

            foreach ($this->request->data['Oferta'] as $key => $oferta) {
                if (empty($oferta['valor_oferta'])) {
                    unset($this->request->data['Oferta'][$key]);
                }
            }

            if (!empty($this->request->data['Oferta'])) {
                $result = $this->Oferta->saveMany($this->request->data['Oferta']);
                if ($result) {
                    $this->Flash->success('La Oferta fue realizada con éxito.');
                    return $this->redirect($this->referer());
                } else {
                    $this->Flash->error(__('Error al realizar la Oferta.'));
                    return $this->redirect($this->referer());
                }
            } else {
                $this->Flash->error(__('No se registaron ofertas válidas.'));
                return $this->redirect($this->referer());
            }
        }
        $this->autoRender = false;
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

        $mis_ofertas = $this->Oferta->getMisOfertas();
        if (!$mis_ofertas) {
            $this->Flash->error(__("No tenés ofertas en curso."));
            $this->redirect($this->referer());
        }

        $this->set('ofertas', $this->Oferta->setMisResultadosActuales($mis_ofertas));
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
