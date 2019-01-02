<?php
echo $this->Html->script('procesos/funciones', array('inline' => false));
echo $this->Html->script('procesos/nuevo', array('inline' => false));
echo $this->Html->script('categorias_change', array('inline' => false));

$formHorizontal['type'] = 'file';

if (isset($borrador_id)) {
    echo $this->Form->input('borradorPk', ['type' => 'hidden', 'value' => $borrador_id]);
    echo $this->element('procesos/check_borrador');
} else {
    echo $this->Form->input('nuevoPk', ['type' => 'hidden', 'value' => $nuevo_id]);
}
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <?php echo $this->Form->create($formHorizontal); ?>

            <div class="card-block" id="paso1_card">
                <?php
                $title = "Paso 1. ¿Qué necesitas comprar? ";
                $subtitle = [
                    'Podés <span class="text-bold">agregar hasta 15 items</span> por pedido de compra.',
                    'Especifica los <span class="text-bold">detalles de cada uno.</span>',
                    'Cuando estés listo,  <span class="text-bold">presioná "Siguiente".</span>'
                ];
                echo $this->element('ribbon_title', ['title' => $title, 'subtitle' => $subtitle]);

                echo $this->element('procesos/form_items');
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <?php echo $this->Form->button('Agregar Ítem', ['id' => 'addItem', 'class' => 'btn btn-info mr10', 'type' => 'button']); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-block" id="paso2_card">
                <?php
                $title = "Paso 2. Información general de tu compra.";
                $subtitle = [
                    'La publicación tendrá una <span class="text-bold">duración mínima</span> de 3 días hábiles.',
                    'Podrás especificar una <span class="text-bold">fecha de entrega</span> (mínimo 1 día después de finalizar la subasta).',
                    'No olvides <span class="text-bold">aclarar todo detalle</span> que sea de importancia para los proveedores.'
                ];
                echo $this->element('ribbon_title', ['title' => $title, 'subtitle' => $subtitle]);
                echo $this->element('procesos/form_general');
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <?php
                            echo $this->Form->button('Atrás', ['id' => 'paso2_atras', 'class' => 'btn btn-info mr10', 'type' => 'button']);
                            echo $this->Form->button('Guardar!', ['id' => 'publicar', 'class' => 'btn btn-success', 'type' => 'button']);
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block" id="TableItem-vista_previa">
                <h5>Vista Previa</h5>
                <?php echo $this->element('procesos/listado_items'); ?>
                <div class="col-sm-12">
                    <div class="form-group pull-right">
                        <?php echo $this->Form->button('Siguiente', ['id' => 'paso1_siguiente', 'class' => 'btn btn-success', 'type' => 'button']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
