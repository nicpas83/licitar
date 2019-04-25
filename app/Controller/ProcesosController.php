<?php

App::uses('AppController', 'Controller');

class ProcesosController extends AppController {

    public function nuevo() {
        $this->set('categorias', $this->Categoria->options());
        $this->set('subcategorias', $this->Subcategoria->options());
        $this->set('unidades', $this->Proceso->unidades);
        $this->set('preferencias', $this->Proceso->preferenciasPago);
        $this->set('requisitos', $this->Proceso->requisitosExcluyentes);

        
        //checkeo si el usuario tiene proceso en borrador creado
        $borrador = $this->Proceso->find('first', [
            'conditions' => [
                'Proceso.user_id' => $this->Auth->user('id'),
                'Proceso.estado' => 'Borrador'
            ],
        ]);

        //si no tiene items, lo borro 
        if (isset($borrador['Proceso']) && empty($borrador['Item'])) {
            $this->Proceso->delete($borrador['Proceso']['id']);
            $borrador = false;
        }

//            debug($borrador['Proceso']);die;
        if ($borrador) {
            $this->set('borrador_id', $borrador['Proceso']['id']);
            $this->set('proceso', $borrador['Proceso']);
            $this->set('items', $borrador['Item']);
        } else {
            //creo proceso en borrador y paso ID para poder asignarlo a los items.
            $this->Proceso->save(['Proceso' => ['user_id' => $this->Auth->user('id'), 'estado' => 'Borrador']]);
            $this->set('nuevo_id', $this->Proceso->getLastInsertId());
        }
    }

    public function mis_compras() {
        $this->Proceso->filtroUsuario = ['Proceso.user_id' => AuthComponent::user('id')];

        $activas = $this->Proceso->getComprasActivas();
        $finalizadas = $this->Proceso->getComprasFinalizadas();
        $preguntas = $this->Proceso->getPreguntasPendientes();
        $kpi = [
            'en_curso' => count($activas),
            'finalizadas' => count($finalizadas),
            'preguntas' => count($preguntas),
        ];

        $this->set('actions', ['finalizar', 'edit']); //define botones
        $this->set('procesos', $activas);
        $this->set('finalizadas', $finalizadas);
        $this->set('preguntas', $preguntas);
        $this->set('kpi', $kpi);
    }

    public function view($id = null) {
        if (!$id) {
            $this->Flash->error(__("El proceso al que intenta acceder no es un proceso válido."));
            $this->redirect($this->referer());
        }
        $this->Proceso->id = $id;
        $this->Proceso->getProcesoData();

        if ($this->Proceso->estado !== 'Activo') {
            $this->Flash->error(__("El proceso al que intenta acceder no es un proceso activo."));
            $this->redirect($this->referer());
        }
//        debug($this->Proceso->infoGeneral);die;
        $this->set('preguntas', $this->Proceso->preguntas);
        $this->set('proceso', $this->Proceso->infoGeneral);
        $this->set('items', $this->Proceso->items);
    }

    public function categoria($categoria_id = null) {
        $info_categoria = $this->Proceso->Item->getInfoCategoria($categoria_id);
        $procesos = $this->Proceso->getProcesosActivos($categoria_id);
        $items = $this->Proceso->Item->getItemsActivos($categoria_id);

        $this->set('nombre_cat', $info_categoria['nombre_cat']);
        $this->set('icon_cat', $info_categoria['icon_cat']);
        $this->set('descripcion', $info_categoria['descripcion']);
        $this->set('subcats', $info_categoria['subcategorias']);
        $this->set('procesos', $procesos);
        $this->set('items', $items);
//        debug($items);die;
    }

    public function mis_favoritos() {
        App::uses('Favorito', 'Model');
        $mis_favoritos = (new Favorito())->getMisProcesosFavoritos();
        $this->Proceso->filtroIds = ['Proceso.id' => $mis_favoritos];

        $this->set('procesos', $this->Proceso->getProcesosActivos());
    }

    public function edit($id = null) {
        $proceso = $this->Proceso->findById($id);
        //validaciones
        $status = $this->Proceso->validarEdicionUsuario($proceso);

        if ($status == false) {
            $this->Flash->error('El proceso al que intenta acceder no es válido.');
            return $this->redirect(array('controller' => 'procesos', 'action' => 'mis_compras'));
        }
        //check edición
        if ($this->Proceso->esEditableGeneral($proceso) == false) {
            $this->Proceso->readonly = true;
        }

        $this->set('proceso', $proceso['Proceso']);
        $this->set('items', $proceso['Item']);

        $this->set('categorias', $this->Categoria->options());
        $this->set('subcategorias', $this->Subcategoria->options());
        $this->set('unidades', $this->Proceso->unidades);
        $this->set('preferencias', $this->Proceso->preferenciasPago);
        $this->set('requisitos', $this->Proceso->requisitosExcluyentes);
    }

    /**
     * METODOS AJAX
     */
    public function ajax_set_favorito() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }

        $proceso_id = $this->request->data['proceso_id'];
        $user_id = $this->Auth->user('id');

        if ($this->Proceso->esActivo($proceso_id)) {
            App::uses('Favorito', 'Model');
            $favorito = new Favorito();
            $yaExiste = $favorito->find('first', [
                'conditions' => ['proceso_id' => $proceso_id, 'user_id' => $user_id, 'estado' => 1],
                'recursive' => -1,
            ]);

            if ($yaExiste) {
                $id = $yaExiste['Favorito']['id'];
                //desactivo
                $favorito->save(['Favorito' => ['id' => $id, 'estado' => 0]]);
                $this->set('data', "remove");
            } else {
                //agrego
                $favorito->create();
                $favorito->save(['Favorito' => ['proceso_id' => $proceso_id, 'user_id' => $user_id]]);
                $this->set('data', "add");
            }
        }

        return $this->render("/ajax", "ajax");
    }

    public function ajax_set_info_general() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $fecha_fin = dateYMD($this->request->data['fecha_fin']);
        $fecha_entrega = dateYMD($this->request->data['fecha_entrega']);

        $this->Proceso->updateAll([
            'referencia' => "'" . $this->request->data['referencia'] . "'",
            'fecha_fin' => "'" . $fecha_fin . "'",
            'fecha_entrega' => "'" . $fecha_entrega . "'",
            'proceso_nro' => "'" . ($this->Proceso->getLastNroProceso() + 1) . "'",
            'detalles' => "'" . $this->request->data['detalles'] . "'",
            'preferencia_pago' => "'" . $this->request->data['preferencia_pago'] . "'",
            'requisitos_excluyentes' => "'" . $this->request->data['requisitos_excluyentes'] . "'",
            'estado' => "'Activo'"
                ], [
            'Proceso.id' => $this->request->data['id']
        ]);

        $this->Proceso->Item->updateAll([
            'estado' => "'Activo'"
                ], [
            'proceso_id' => $this->request->data['id']
        ]);

        return $this->render("/ajax", "ajax");
    }

    public function ajax_eliminar_borrador() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Proceso->delete($this->request->data['id'])) {
            $this->set("data", true);
            return $this->render("/ajax", "ajax");
        }
    }

    public function ajax_finalizar($id) {
        if (!$this->request->is('post')) {
            return $this->redirect(array('controller' => 'procesos', 'action' => 'mis_compras'));
        }
        if ($this->Proceso->esPropio($id) && $this->Proceso->esActivo($id)) {
            $this->Proceso->finalizar($id);
            $this->set("data", "OK");
        } else {
            $this->set("data", "ERROR");
        }

        return $this->render("/ajax", "ajax");
    }

}
