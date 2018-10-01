<?php
App::uses("AccessInflector", "Lib");
$this->Html->scriptBlock("var INFLECTOR = new Object();", array('inline' => false));
$this->Html->scriptBlock("INFLECTOR.plural = " . json_encode(AccessInflector::getPlural()), array('inline' => false));
$this->Html->scriptBlock("INFLECTOR.uninflected = " . json_encode(AccessInflector::getUninflected()), array('inline' => false));
        
