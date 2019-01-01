<?php

App::uses('AppModel', 'Model');

class Favorito extends AppModel {

    public $useTable = 'favoritos';
    public $belongsTo = ['Proceso', 'User'];

    public function getMisProcesosFavoritos() {
        return $this->find('list', [
                    'fields' => ['proceso_id'],
                    'conditions' => ['user_id' => AuthComponent::user('id'), 'estado' => 1]
        ]);
    }

}
