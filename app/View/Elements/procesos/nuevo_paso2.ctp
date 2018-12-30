<?php
$op = "A";
$title = "Paso 2. Información general de tu compra.";
$subtitle = [
    'La publicación tendrá una <span class="text-bold">duración mínima</span> de 3 días hábiles.',
    'Podrás especificar una <span class="text-bold">fecha de entrega</span> (mínimo 1 día después de finalizar la subasta).',
    'No olvides <span class="text-bold">aclarar todo detalle</span> que sea de importancia para los proveedores.'
];
?>

<div class="card-block" id="paso2_card">
    <?php echo $this->element('ribbon_title', ['title' => $title, 'subtitle' => $subtitle]); ?>
    <div class="row">
        <?php
        echo $this->element('f_input', ['params' => ['name' => 'referencia', 'label' => 'Título Descriptivo o Referencia', 'lg' => '6', 'validate']]);
        echo $this->element('f_date', ['params' => ['name' => 'fecha_fin', 'label' => 'Fin de la Subasta?', 'lg' => '2', 'validate']]);
        echo $this->element('f_select', ['params' => ['name' => 'preferencia_pago', 'label' => 'Condición de pago?', 'lg' => '3', 'options' => $condiciones]]);

        echo $this->element('f_text', ['params' => ['name' => 'detalles', 'label' => 'Comentá cualquier detalle importante.', 'lg' => '6', 'placeholder' => '(opcional)']]);
        echo $this->element('f_date', ['params' => ['name' => 'fecha_entrega', 'label' => 'Fecha de Entrega', 'lg' => '2', 'validate']]);
        echo $this->element('f_checkbox', ['params' => ['name' => 'Proceso..requisitos_excluyentes', 'label' => 'Requisitos Excluyentes', 'options' => $requisitos, 'lg' => '4', 'vertical']])
        ?>
        <div class="col-sm-12">
            <div class="form-group pull-right">
                <?php
                echo $this->Form->button('Atrás', ['id' => 'paso2_atras', 'class' => 'btn btn-info mr10', 'type' => 'button']);
                echo $this->Form->button('Publicar!', ['id' => 'publicar', 'class' => 'btn btn-success', 'type' => 'button']);
                ?>
            </div>
        </div>
    </div>



</div>