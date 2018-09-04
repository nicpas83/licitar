<?php
$lg = isset($params['lg']) ? $params['lg'] : '12';
$label = isset($params['label']) ? $params['label'] : "";
$name = isset($params['name']) ? $params['name'] : "";
$css = isset($params['vertical']) ? 'check-vertical' : 'check-horizontal';
$dbVal = isset($params['value']) ? $params['value'] : "";

$config = [
    'type' => 'checkbox',
    'class' => 'custom-control-input',
    'value' => $dbVal,
];
?>
<style type="text/css">

    .check-horizontal div{
        float: left;
        margin-right: 10px;
    }
    .check-vertical{

    }
</style>


<div class="col-lg-<?php echo $lg ?> col-sm-12 f_checkbox <?php echo $css ?>" >
    <?php
    //si es array considero que pueden ser uno o más casillas para un solo campo en la db. 
    if (is_array($dbVal)) {
        foreach ($dbVal as $key => $val) {
            $config['value'] = $key;
            ?>
            <div class="form-check">
                <label class="custom-control custom-checkbox">
                    <?php echo $this->Form->input("" . $name . "", $config) ?>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description"><?php echo $val ?></span>
                </label>
            </div>
            <?php
        }
    }
    ?>

</div>
