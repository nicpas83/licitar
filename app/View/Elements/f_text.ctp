<?php
foreach ($params as $val) {
    $lg = isset($params['lg']) ? $params['lg'] : '12';
    $label = isset($params['label']) ? $params['label'] : "";
    $name = isset($params['name']) ? $params['name'] : "";
    $value = isset($params['value']) ? $params['value'] : "";
    $rows = isset($params['rows']) ? $params['rows'] : "4";
    $placeholder = isset($params['placeholder']) ? $params['placeholder'] : "";

    if ($val == 'validate') {
        $validate = "*";
        $validation = "data-validation-required-message";
        $validationMsg = "El campo " . $label . " es obligatorio.";
    } else {
        $validate = "";
        $validation = "";
        $validationMsg = "";
    }
}

$options = [
    'type' => 'textarea',
    'rows' => $rows,
    'value' => $value,
    $validation => $validationMsg,
    'placeholder' => $placeholder,
];
?>

<div class="col-lg-<?php echo $lg ?>">
    <div class="form-group">
        <label><?php echo $label ?><span class="text-danger"><?php echo $validate ?></span></label>
        <div class="controls">
            <?php echo $this->Form->input("" . $name . "", $options) ?>
        </div>
    </div>
</div>

