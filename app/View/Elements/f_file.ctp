<?php
echo $this->Html->script('/assets/plugins/dropify/dist/js/dropify.min', ['inline' => false]);
echo $this->Html->css('/assets/plugins/dropify/dist/css/dropify.min', ['inline' => false]);

$lg = isset($params['lg']) ? $params['lg'] : '12';
$label = isset($params['label']) ? $params['label'] : "";
$name = isset($params['name']) ? $params['name'] : "";

?>

<div class="col-lg-<?php echo $lg ?>">
    <div class="form-group">
        <label><?php echo $label ?></label>
        <?php echo $this->Form->input($name, ['type' => 'file', 'class' => 'dropify', 'id' => 'input-file-now']); ?>
    </div>
</div>
