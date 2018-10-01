<?php

$title = isset($params['title']) ? $params['title'] : "";
$paramsUrl = isset($params['url']) ? explode('/', $params['url']) : "";
$model_id = isset($params['id']) ? $params['id'] : "";
$url = ['controller' => $paramsUrl[0], 'action' => $paramsUrl[1], $model_id];

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
$options['inline'] = false;
//debug($options);die;
echo $this->Form->postLink($title, $url, $options);
?>

