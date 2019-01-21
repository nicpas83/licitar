<?php 
$color = isset($classColor) ? $classColor : "info";

?> 
<div class="col-md-6 col-lg-3 col-xlg-3">
    <div class="card card-inverse card-<?php echo $color ?>">
        <div class="box bg-<?php echo $color ?> text-center">
            <h1 class="font-light text-white"><?php echo $value ?></h1>
            <h6 class="text-white"><?php echo $title ?></h6>
        </div>
    </div>
</div>