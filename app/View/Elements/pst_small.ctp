<?php
$value = !empty($params['value']) ? $params['value'] : "";
$faClass = !empty($params['icon']) ? $params['icon'] : false;
$class = !empty($params['class']) ? $params['class'] : "";


$icon = $faClass ? "<i class='" . $faClass . "'></i> " : "";
?>

<small class="<?php echo $class ?>"><?php echo $icon.$value ?></small>  