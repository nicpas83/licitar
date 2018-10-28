<?php
echo $this->Html->script('categorias_change', array('inline' => false));
$op = "A";
$title = "Paso 1. ¿Qué necesitas comprar? ";
$subtitle = [
    'Podés agregar hasta 15 items por pedido de compra.',
    'Escribí un título y seleccioná el rubro adecuado para cada uno.',
    'Cuando estés listo presioná "Siguiente".'
];
?>

<div class="card-block" id="paso1_card">
    <?php echo $this->element('ribbon_title', ['title' => $title, 'subtitle' => $subtitle]); ?>
    <div class="row">
        <?php
        echo $this->element('f_input', ['params' => ['name' => 'nombre', 'label' => 'Título', 'lg' => '6', 'maxLength' => '60', 'validate']]);
        echo $this->element('f_select2', ['params' => ['name' => 'categoria', 'label' => 'Categoría', 'lg' => '3', 'options' => $categorias, 'validate']]);
        echo $this->element('f_select2', ['params' => ['name' => 'subcategoria', 'label' => 'Sub Categoría', 'lg' => '3', 'options' => ['Elija Categoría'], 'validate']]);

        echo $this->element('f_text', ['params' => ['name' => 'especificaciones', 'label' => 'Especificaciones o Detalles especiales del producto', 'lg' => '6', 'rows' => '5', 'placeholder' => '(opcional)', 'maxLength' => '500']]);
        echo $this->element('f_number', ['params' => ['name' => 'cantidad', 'label' => 'Cantidad', 'lg' => '1', 'sm' => '6', 'validate']]);
        echo $this->element('f_select', ['params' => ['name' => 'unidad', 'label' => 'Unidad', 'lg' => '2', 'sm' => '6', 'options' => $unidades, 'value' => '6']]);
        
        ?>
        <div class="col-sm-12">
            <div class="form-group pull-right">
                <?php
                echo $this->Form->button('Agregar Ítem', ['id' => 'addItem', 'class' => 'btn btn-info mr10', 'type' => 'button']);
                echo $this->Form->button('Siguiente', ['id' => 'paso1_siguiente', 'class' => 'btn btn-info', 'type' => 'button']);
                ?>
            </div>
        </div>
    </div>



</div>