<?php
<<<<<<< HEAD
echo $this->element('page/title_nav', [
    'actions' => [
        'Nueva Publicación' => [
            'controller' => 'procesos',
            'action' => 'nuevo'
        ]
]]);
=======
echo $this->element('page/title_nav', ['actions' => ['Nueva Publicación' => 'nuevo']]);
>>>>>>> 01b23eb9c1a725530ebd1e0d354ac918c502db64
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Publicaciones Activas']) ?>
                <?php echo $this->element('procesos/listado_procesos', [$procesos, $actions]); ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Categorías generales']) ?>
                <?php echo $this->element('categorias/listado') ?>
            </div>
        </div>
    </div>
</div>
