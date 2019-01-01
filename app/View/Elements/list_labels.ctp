<div>
    
<?php
$value = !empty($params['value']) ? $params['value'] : "";
$defaultClass = "label label-light-info";
$class = empty($params['class']) ? $defaultClass : $params['class'];

$labels = "";
foreach ($params as $val) {
    $labels .= "<span class='$class'>$val</span>";
}
echo $labels;
?>

</div>