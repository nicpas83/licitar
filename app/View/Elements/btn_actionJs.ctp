<?php
$model_id = isset($params['id']) ? $params['id'] : "";

if (isset($params['style'])) {
    switch ($params['style']) {
        case 'delete': $options = $deleteBtn;
            break;
        case 'edit': $options = $editBtn;
            break;
        case 'view': $options = $viewBtn;
            break;
    }
}

$options['id'] = $options['title']."-".$model_id;
debug($options);die;

echo $this->Form->button('',$options);
?>

