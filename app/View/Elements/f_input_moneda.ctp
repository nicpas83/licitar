<?php
$inTable = false;
$validate = "";
$validation = "";
$validationMsg = "";
$maxLength = "";
$lg = isset($params['lg']) ? $params['lg'] : '12';
$sm = isset($params['sm']) ? $params['sm'] : $lg;
$label = isset($params['label']) ? $params['label'] : "";
$name = isset($params['name']) ? $params['name'] : "";
$value = isset($params['value']) ? $params['value'] : "";
$maxLengthValue = isset($params['maxLength']) ? $params['maxLength'] : "";
foreach ($params as $val) {
    if ($val == 'validate') {
        $validate = "*";
        $validation = "data-validation-required-message";
        $validationMsg = "El campo " . $label . " es obligatorio.";
    }
    if($val == 'inTable'){
        $inTable = true;
    }
}
if (!empty($maxLengthValue)) {
    $maxLength = "maxLength";
}

$options = [
    'type' => 'number',
    'value' => $value,
    $validation => $validationMsg,
    $maxLength => $maxLengthValue,
];

if ($inTable) {
    ?>
    <div class="controls">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-usd"></i></span> 
            <?php echo $this->Form->input("" . $name . "", $options) ?>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="col-lg-<?php echo $lg ?> col-sm-<?php echo $sm ?>">
        <div class="form-group">
            <label><?php echo $label ?><span class="text-danger"><?php echo $validate ?></span></label>
            <div class="controls">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-usd"></i></span> 
                        <?php echo $this->Form->input("" . $name . "", $options) ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>



