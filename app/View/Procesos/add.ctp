<?php // debug($condiciones);die;                   ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning font-normal">¡Comprá en 3 simples pasos!</div>
                </div>

                <div>
                    <?php
                    echo $this->Form->create($formHorizontal);
                    echo $this->element('procesos/add_edit');
                    ?>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group pull-right">
                                <?php echo $this->Form->button('Finalizar', ['class' => 'btn btn-info', 'disabled']); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end() ?>
                </div>
            </div>
        </div>

    </div>
</div>
