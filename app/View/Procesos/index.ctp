<?php echo $this->Html->script('procesos/index', ['inline' => false]) ?> 
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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Publicaciones Activas']) ?>
                <?php echo $this->element('procesos/listado_general', $procesos); ?>
            </div>
        </div>
    </div>
</div>



