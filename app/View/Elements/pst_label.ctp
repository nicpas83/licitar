<?php
$value = !empty($params['value']) ? $params['value'] : "";
$defaultClass = "label label-";
$class = !empty($params['class']) ? $defaultClass.$params['class'] : "label label-success";

?>

<span class="<?php echo $class ?>"><?php echo $value ?></span>  