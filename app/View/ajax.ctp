<?php
if(isset($data)){ 
    if (is_array($data)) {
        $data = json_encode($data);
    }
    echo $data;
}