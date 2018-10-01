<?php

App::uses("Inflector", "Utility");

class AccessInflector extends Inflector {

    public static function getPlural() {
        $explural = parent::$_plural;
        $explural['rules']['/(m)an$/i'] = $explural['rules']['/(?<!u)(m)an$/i'];
        unset($explural['rules']['/(?<!u)(m)an$/i']);
        return $explural;
    }

    public static function getUninflected() {
        return parent::$_uninflected;
    }

}
