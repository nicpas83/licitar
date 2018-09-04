<?php // debug($condiciones);die;
$formHorizontal['type'] = 'file';
$title ="¡Comprá en 3 simples pasos!";
$subtitle ="Intentá ser claro y específico al cargar tu pedido de compra. Mientras más claro seas, mejores ofertas recibirás!";
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => $title, 'subtitle'=>$subtitle]); ?>
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
