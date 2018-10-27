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

    /**
     *  $quitarClaves = array();
     *  $array = $this->quitarClavesDelArray($array, $quitarClaves);
     */
    public function quitarClavesDelArray($array, $claves) {
        foreach ($claves as $clave) {
            unset($array[$clave]);
        }
        return $array;
    }
    
    public function arrayOrderBy($data, $field) {
        $code = "return strnatcmp(\$a['$field'], \$b['$field']);";
        usort($data, create_function('$a,$b', $code));
        return $data;
    }
    
    public function beforeSave($options = array()) {
        $this->data[$this->alias]['user_id'] = AuthComponent::user('id');
//        debug($this->data);die;
        return true;
    }
    
    

}
