<?php
if (isset($levels)) {
    foreach ($levels as $level => $link) {
        //si pasa parametro array entonces especifica ruta completa
        if (is_array($link)) {
            $controller = isset($link['controller']) ? $link['controller'] : "";
            $action = isset($link['action']) ? $link['action'] : "";
        } else {
            //considera el controller actual
            $controller = Router::getParams()['controller'];
            $action = $link;
        }
        if (empty($action)) {
            $levels[$level] = '';
        } else {
            $levels[$level] = ['controller' => $controller, 'action' => $action];
        }
    }
}
if (isset($actions)) {
    foreach ($actions as $title => $link) {
        //si pasa parametro array entonces especifica ruta completa
        if (is_array($link)) {
            $controller = isset($link['controller']) ? $link['controller'] : "";
            $action = isset($link['action']) ? $link['action'] : "";
        } else {
            //considera el controller actual
            $controller = Router::getParams()['controller'];
            $action = $link;
        }
        if (empty($action)) {
            $actions[$title] = '';
        } else {
            $actions[$title] = ['controller' => $controller, 'action' => $action];
        }
    }
}

//debug($levels);
//debug($actions);
//die;
?> 
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <ol class="breadcrumb">
            <!--INICIO-->
            <li class="breadcrumb-item"><a href="<?php echo $this->Html->url("/") ?>">Inicio</a></li>
            <?php
            if (isset($levels)) {
                foreach ($levels as $level => $link) {
                    if (is_array($link)) {
                        echo "<li class='breadcrumb-item'>" . $this->Html->link($level, $link) . "</li>";
                    } else {
                        echo "<li class='breadcrumb-item'>$level</li>";
                    }
                }
            } else {
                echo "<li class='breadcrumb-item'></li>";
            }
            ?>
        </ol>
    </div>

    <div class="col-md-6 col-4 align-self-center">
        <?php
        if (isset($actions)) {
            foreach ($actions as $title => $link) {
                $options = [
                    'class' => 'btn pull-right hidden-sm-down btn-success',
                    'escape' => false
                ];
                $icon = !isset($link['icon']) ? ['class' => 'mdi mdi-plus-circle mr5'] : $link['icon'];
                echo $this->Html->link($this->Html->tag('i', '', $icon) . $title, $link, $options);
            }
        }
        ?>

    </div>
</div>