<?php

function dateYMD($dateString) {
    $dateString = str_replace('/', '-', $dateString);
    return date('Y-m-d', strtotime($dateString));
}

function dateDMY($dateString) {
    $date = date('d-m-Y', strtotime($dateString));
    $date = str_replace('-', '/', $date);
    return $date;
}

?>