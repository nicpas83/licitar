<?php

App::uses('AppController', 'Controller');

class FavoritosController extends AppController {

    public function ajax_nueva_pregunta() {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }

        $data['Pregunta'] = [
            'user_id' => $this->Auth->user('id'),
            'proceso_id' => $this->data['pk'],
            'pregunta' => $this->data['pregunta'],
            'estado' => 'Pendiente',
        ];

        $this->Pregunta->create();
        if ($this->Pregunta->save($data)) {
            $this->set("data", "Pregunta realizada. Te avisaremos cuando te respondan...");
            return $this->render("/ajax", "ajax");
        }
    }

    public function ajax_set_respuesta() {
        App::uses('Proceso', 'Model');
        App::uses('Respuesta', 'Model');

        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }

        //seguridad. reviso que la pregunta sea una de mis preguntas pendientes.
        $checkId = false;
        $preguntas = (new Proceso())->getMisFavoritosPendientes();

        foreach ($preguntas as $val) {
            if ($this->data['pk'] == $val['Pregunta']['id']) {
                $checkId = true;
                break;
            }
        }

        if (!$checkId) {
            return false;
        }

        $data['Respuesta'] = [
            'user_id' => $this->Auth->user('id'),
            'pregunta_id' => $this->data['pk'],
            'respuesta' => $this->data['respuesta'],
        ];

        $respuesta = new Respuesta();
        $respuesta->create();
        if ($respuesta->save($data)) {
            //actualizo estado Pregunta.
            $this->Pregunta->updateAll(['estado' => "'Respondida'"], ['id' => $this->data['pk']]);
            $this->set("data", "OK");
            return $this->render("/ajax", "ajax");
        }
    }

}
