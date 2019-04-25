<?php
$lg = isset($params['lg']) ? $params['lg'] : '12';
$label = isset($params['label']) ? $params['label'] : "";
$name = isset($params['name']) ? $params['name'] : "";
$value = isset($params['value']) ? $params['value'] : "";
$options = isset($params['options']) ? $params['options'] : "";

$css = 'check-horizontal';
foreach ($params as $val) {
    if ($val == 'vertical') {
        $css = 'check-vertical';
    }
}

if ($css == 'check-horizontal') {

    $config = [
        'type' => 'checkbox',
        'class' => 'custom-control-input',
        'default' => $value,
    ];
    ?>
    <div class="col-lg-<?php echo $lg ?> col-sm-12 <?php echo $css ?>" >
        <div class="form-group">
            <label><?php echo $label ?></label>
            <?php
            foreach ($options as $key => $val) {
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
            ?>
        </div>
    </div>
    <?php
}

if ($css == 'check-vertical') {

    $config = [
        'type' => 'checkbox',
        'class' => 'form-control check',
        'data-checkbox' => 'icheckbox_flat-yellow',
        'default' => $value,
    ];
    ?>
    <div class="col-lg-<?php echo $lg ?> col-sm-12" >
        <div class="form-group">
            <label><?php echo $label ?></label>
            <div class="input-group">
                <ul class="icheck-list">
                    <?php
                    foreach ($options as $key => $val) {
                        $config['value'] = $key;
                        ?>
                        <li>
                            <?php echo $this->Form->input("" . $name . "", $config) ?>
                            <label for="flat-checkbox-1"><?php echo $val ?></label>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <?php
}
?>