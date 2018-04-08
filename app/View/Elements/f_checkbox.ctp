<?php
$label = isset($params['label']) ? $params['label'] : "";
$name = isset($params['name']) ? $params['name'] : "";
$value = isset($params['value']) ? $params['value'] : "";

$options = [
    'type' => 'checkbox',
    'class' => 'form-control check',
    'data-checkbox' => 'icheckbox_flat-yellow',
    'default' => $value,
];
?>

<li>
    <?php echo $this->Form->input("" . $name . "", $options) ?>
    <label for="flat-checkbox-1"><?php echo $label ?></label>
</li>


