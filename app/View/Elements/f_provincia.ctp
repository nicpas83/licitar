<?php
echo $this->Html->script('provincias');

App::uses('Provincia', 'Ubicacion.Model');
$provincias = (new Provincia())->find('list', [
    'fields' => ['Provincia.id', 'Provincia.nombre'],
    'order' => ['Provincia.nombre ASC']
        ]);


//debug($params);die;
foreach ($params as $val) {
    $lg = isset($params['lg']) ? $params['lg'] : '12';
    $label = isset($params['label']) ? $params['label'] : "";
    $name = isset($params['name']) ? $params['name'] : "";
    $value = isset($params['value']) ? $params['value'] : "";

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
    'id' => 'provinciaSelect',
    'type' => 'select',
    'class' => 'form-control select2',
    'data-width' => "100%",
    'default' => $value,
    'options' => $provincias,
    $validation => $validationMsg
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