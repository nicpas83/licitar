<?php
//debug($levels);die;
if (isset($add)) {
    if (empty($add['action'])) {
        $add['action'] = "add";
    }
    $controller = Router::getParams()['controller'];
    $action_link = ['controller' => $controller, 'action' => $add['action']];
    $action_label = isset($add['label']) ? $add['label'] : "Nuevo Registro";
}
?> 
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo $this->Html->url(['controller' => 'pages', 'action' => 'inicio']) ?>">Inicio</a></li>
            <?php
            if (isset($levels)) {
                $niveles = count($levels);

                if ($niveles == 1) {
                    echo "<li class='breadcrumb-item active'>$levels[0]</li>";
                } else {
                    foreach ($levels as $key => $level) {
                        //usar array links excepto en el ultimo nivel.
                        if ($key < ($niveles - 1)) {
                            echo "<li class='breadcrumb-item'>" . $this->Html->link($level, $links[$key]) . "</li>";
                        } else {
                            echo "<li class='breadcrumb-item active'>$level</li>";
                        }
                    }
                }
            }
            ?>
        </ol>
    </div>

<?php
if (isset($add)) {
    ?>

        <div class="col-md-6 col-4 align-self-center">
            <a class="btn pull-right hidden-sm-down btn-success" href="<?php echo $this->Html->url($action_link) ?>" aria-expanded="false"><i class="mdi mdi-plus-circle"></i><?php echo $action_label ?></a>
        </div>


    <?php
}
?>

</div>