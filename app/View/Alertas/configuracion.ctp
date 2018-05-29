<?php // debug($user);die;                   ?>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
            <?php echo $this->element('ribbon_title', ['title' => 'Configuración de Alertas']); ?>
            <?php echo $this->Form->create($formHorizontal); ?>
            <h3>General</h3>
            <div class="row">

            </div>

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group pull-right">
                        <?php echo $this->Form->button('Actualizar', ['class' => 'btn btn-info']); ?>

                    </div>
                </div>
            </div>
            <?php echo $this->Form->end() ?>

        </div>
    </div>
</div>
<!-- /.row -->
