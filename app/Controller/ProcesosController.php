<?php

App::uses('AppController', 'Controller');

// Ejemplo para pasar variables a la vista:   $this->set('posts', $this->Post->find('all'));

class ProcesosController extends AppController {

    public function index(){
        
    }
    public function mis_procesos() {
        if($this->Auth->user('role') == 1){
            $procesos = $this->Proceso->misProcesosActivos($this->Auth->user('id'));
            $this->set('indicadores', $procesos['Indicadores']);
            $this->set('procesos',$procesos['Procesos']);
            $this->render('comprador_index');
        
            
        }elseif($this->Auth->user('role') == 2){
            $this->set('procesos', $this->Proceso->find('all', ['conditions' => ['user_id' => $this->Auth->user('id')]]));
            $this->render('vendedor_index');
        }
        
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

    public function ver($id) {
        $this->Proceso->unbindModel(array('hasMany' => array('Item')));
        $proceso = $this->Proceso->find('first', ['conditions' => ['id' => $id]]);
        $this->Proceso->Item->unbindModel(array('belongsTo' => array('Proceso')));
        $items = $this->Proceso->Item->find('all', ['conditions' => ['Item.proceso_id' => $id]]);

        //valido que por URL solo se pueda acceder a procesos activos.
        if ($proceso['Proceso']['estado'] == 1) {
            $this->set('proceso', $proceso['Proceso']);
            $this->set('items', $items);
        } else {
            $this->flash(__("El proceso al que intenta acceder no es un proceso activo."), array("action" => "index"));
            //$this->Flash->error('El proceso al que intenta acceder no es un proceso activo.');
        }
    }

    public function borradores() {
        
    }

}
