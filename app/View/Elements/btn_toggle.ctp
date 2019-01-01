<?php

$defaultClass = 'btn btn-secondary btn-outline pull-right';
$class = empty($params['class']) ? $defaultClass : $params['class'];
$button = "";
$title = "";
$elementId = "";

$pk = $params['pk'];
$icon = $params['icon'];
$active = !empty($params['active']) ? "active" : "";

if (isset($params['title'])) {
    $title = $params['title'];
    $elementId = Inflector::camelize($params['title']) . "-" . $pk;
}


$button .= "<button id='$elementId' type='button' title='$title' class='$class ml5 $active' data-toggle='button' aria-pressed='true'>";
$button .= "<i class='$icon text' aria-hidden='true'></i>";
$button .= "<i class='$icon text-active text-danger' aria-hidden='true'></i>";
$button .= "</button>";
//die;

echo $button;
?>
