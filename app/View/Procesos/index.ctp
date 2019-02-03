<?php 
echo $this->element('page/title_nav', [
    'levels' => ['Publicaciones']
]);
?>
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
                <?php echo $this->element('procesos/listado_procesos', ['params' => $procesos]); ?>
            </div>
        </div>
    </div>
</div>



