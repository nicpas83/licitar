<?php // debug($activos);die;                 ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Mis Favoritos']) ?>

                <?php echo $this->element('procesos/listado_procesos', ['params' => $procesos]); ?>
            </div>
        </div>
    </div>
</div>
</div>
