<?php
foreach ($params as $val) {
    $lg = isset($params['lg']) ? $params['lg'] : '12';
    $label = isset($params['label']) ? $params['label'] : "";
    $name = isset($params['name']) ? $params['name'] : "";
    $value = isset($params['value']) ? $params['value'] : "";

    if ($val == 'validate') {
        $validate = "*";
        $validation = "data-validation-required-message";
        $validationMsg = "El campo " . $label . " es obligatorio.";
    }
}

$options = [
    'type' => 'text',
    'value' => $value,
    $validation => $validationMsg
];
?>

<div class="col-lg-<?php echo $lg ?>">
    <div class="form-group">
        <label><?php echo $label ?><span class="text-danger"><?php echo $validate ?></span></label>
        <div class="controls">
            <div class="input-group">
                <?php echo $this->Form->input("" . $name . "", $options); ?>
                <span class="input-group-addon"><i class="icon-calender"></i></span> 
            </div>
        </div>
    </div>
</div>