<?php
/**
 * Variables requeridas:  $icon - $value - $title
 * Variables opcionales: $color
 */
$titleId = Inflector::camelize(str_replace(" ", "_", $title));
$id = "Kpi" . $titleId;
$bgColor = "bg-info";
if (isset($color)) {
    $bgColor = "bg-$color";
}
?> 

<div class="col-lg-3 col-md-6">
    <div class="card">
        <div class="d-flex flex-row">
            <div class="p-10 <?php echo $bgColor ?>">
                <h3 class="text-white box m-b-0"><i class="<?php echo $icon ?>"></i></h3></div>
            <div class="align-self-center m-l-20">
                <h3 class="m-b-0 text-info" id="<?php echo $id ?>"><?php echo $value ?></h3>
                <h5 class="text-muted m-b-0"><?php echo $title ?></h5></div>
        </div>
    </div>
</div>

