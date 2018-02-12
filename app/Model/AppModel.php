<?php

App::uses('Model', 'Model');

class AppModel extends Model {

    public function dateYMD($dateString) {
        $dateString = str_replace('/', '-', $dateString);
        return date('Y-m-d', strtotime($dateString));
    }

    public function dateDMY($dateString) {
        $date = date('d-m-Y', strtotime($dateString));
        $date = str_replace('-', '/', $date);
        return $date;
    }

    var $controllerAction = null;
    function setControllerAction($action = null) {
        if ($action) {
            $this->controllerAction = $action;
        }
    }
    
    public function quitarClavesDelArray($array, $claves) {
        foreach ($claves as $clave) {
            unset($array[$clave]);
        }
        return $array;
    }

}
