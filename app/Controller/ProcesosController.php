<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ProcesosController extends AppController {

    public function index() {
        $procesos = $this->Proceso->procesosActivos($this->phpNow);
        $this->set('rubros', $procesos['rubros']);
        $this->set('compradores', $procesos['compradores']);
        $this->set('procesos', $procesos['procesos']);
    }

    public function ver($id) {
        $rubros = $this->Rubro->options();
        $proceso = $this->Proceso->find('all',[
            'conditions' => ['Proceso.id' => $id]
        ]);
        
        foreach($proceso[0]['Item'] as $key => $item){
            $proceso[0]['Item'][$key]['rubro'] = $rubros[$item['rubro_id']];
        }
        
        //valido que por URL solo se pueda acceder a procesos activos.
        if ($proceso[0]['Proceso']['estado'] == 1) {
            $this->set('proceso', $proceso[0]['Proceso']);
            $this->set('items', $proceso[0]['Item']);
        } else {
            $this->flash(__("El proceso al que intenta acceder no es un proceso activo."), array("action" => "index"));
            //$this->Flash->error('El proceso al que intenta acceder no es un proceso activo.');
        }
    }

    public function mis_procesos() {
        $procesos = $this->Proceso->misProcesosActivos($this->Auth->user('id'));
        $this->set('indicadores', $procesos['Indicadores']);
        $this->set('procesos', $procesos['Procesos']);
    }

    public function nuevo() {

        $this->set('rubros', $this->Rubro->options());
        $this->set('unidades', $this->Unidad->options());
        $this->set('condiciones', [
            'Contado' => 'Contado',
            '30 dias' => '30 dias',
            '30-60 dias' => '30-60 dias',
            '30-60-90 dias' => '30-60-90 dias',
        ]);

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
                return $this->redirect(array('controller' => 'pages', 'action' => 'display'));
            } else {
                $this->Flash->error(__('Error al guardar el registro.'));
            }
        }
    }

    public function borradores() {
        
    }

}
