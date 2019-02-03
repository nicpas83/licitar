<?php
$bgColor = "bg-info";

if (isset($color)) {
    $bgColor = "bg-$color";
}   
?> 
<div class="col-md-6 col-lg-3">
    <div class="card card-inverse card-info">       
        <div class="box <?php echo $bgColor ?> text-center">
            <h1 class="font-light text-white"><?php echo $value ?></h1>
            <h6 class="text-white"><?php echo $title ?></h6>
        </div>
    </div>
</div>