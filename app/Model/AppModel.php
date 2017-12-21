<?php
App::uses('Model', 'Model');

class AppModel extends Model {

    public function dateFormatYMD($dateString) {
        $dateString = str_replace('/', '-', $dateString);
        return date('Y-m-d', strtotime($dateString));
    }
    public function dateFormatDMY($dateString) {
        $date = date('d-m-Y', strtotime($dateString));
        $date = str_replace('-', '/', $date);
        return $date;
    }
    
    
    
    
}
