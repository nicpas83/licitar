<?php 
$value = !empty($params['value']) ? $params['value'] : 0;
$symbol = "";
foreach ($params as $val) {
    if ($val == 'c/u') {
        $symbol = "c/u";
    }
    if ($val == 'total') {
        $symbol = "Total";
    }
    if ($val == 'subtotal') {
        $symbol = "Subtotal";
    }
    
}

?>

<p><i class="fa fa-dollar"></i> <?php echo $value." ".$symbol ?> </p>  