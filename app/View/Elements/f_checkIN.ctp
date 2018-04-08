<?php
$lg = isset($params['lg']) ? $params['lg'] : '12';
$label = isset($params['label']) ? $params['label'] : "";
?>


<div class="col-lg-<?php echo $lg ?> col-sm-12" >
    <div class="form-group">
        <label><?php echo $label ?></label>
        <div class="input-group">
            <ul class="icheck-list">