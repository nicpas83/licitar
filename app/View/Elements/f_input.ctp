<?php
$validate = "";
$validation = "";
$validationMsg = "";
$maxLength = "";
$inTable = false;
$lg = isset($params['lg']) ? $params['lg'] : '12';
$label = isset($params['label']) ? $params['label'] : "";
$name = isset($params['name']) ? $params['name'] : "";
$type = isset($params['type']) ? $params['type'] : "text";
$value = isset($params['value']) ? $params['value'] : "";
$placeholder = isset($params['placeholder']) ? $params['placeholder'] : "";
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
    'type' => $type,
    'value' => $value,
    'placeholder' => $placeholder,
    $validation => $validationMsg,
    $maxLength => $maxLengthValue,
];


if ($inTable) {
    ?>
    <div class="controls">
        <?php echo $this->Form->input("" . $name . "", $options) ?>
    </div>
    <?php
} else {
    ?>
    <div class="col-lg-<?php echo $lg ?>">
        <div class="form-group">
            <label><?php echo $label ?><span class="text-danger"><?php echo $validate ?></span></label>
            <div class="controls">
                <?php echo $this->Form->input("" . $name . "", $options) ?>
            </div>
        </div>
    </div>
    <?php
}
?>
