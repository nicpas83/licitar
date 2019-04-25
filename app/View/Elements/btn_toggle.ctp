<?php
$defaultClass = 'btn btn-secondary pull-right';
$getClass = isset($class) ? $class : $defaultClass;
$getActive = !empty($active) ? "active" : "";
$button = "";
$title = "";
$elementId = "";


if (isset($title)) {
    $elementId = Inflector::camelize($title) . "-" . $pk;
}


$button .= "<button id='$elementId' type='button' title='$title' class='$getClass $getActive' data-toggle='button' aria-pressed='true'>";
$button .= "<i class='$icon text' aria-hidden='true'></i>";
$button .= "<i class='$icon text-active text-danger' aria-hidden='true'></i>";
$button .= "</button>";
//die;

echo $button;
?>
