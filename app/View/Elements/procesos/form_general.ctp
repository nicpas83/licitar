<?php
$titulo = $fecha_fin = $fecha_entrega = $detalles = $preferencia = $requisito = "";
if (isset($proceso)) {
    $titulo = $proceso['referencia'];
    $fecha_fin = $proceso['fecha_fin'];
    $fecha_entrega = $proceso['fecha_entrega'];
    $detalles = $proceso['detalles'];
    $preferencia = $proceso['preferencia_pago'];
    $requisito = $proceso['requisitos_excluyentes'];
    
}
//debug($preferencia);die;
?>
<div class="row">
    <?php
    echo $this->element('f_input', ['params' => ['name' => 'referencia', 'label' => 'Título Descriptivo o Referencia', 'lg' => '6', 'validate', 'value' => $titulo]]);
    echo $this->element('f_date', ['params' => ['name' => 'fecha_fin', 'label' => 'Fin de la Subasta?', 'lg' => '2', 'validate', 'value' => $fecha_fin]]);
    echo $this->element('f_select', ['params' => ['name' => 'preferencia_pago', 'label' => 'Preferencia de pago?', 'lg' => '3', 'options' => $preferencias, 'value' => $preferencia]]);
    echo $this->element('f_text', ['params' => ['name' => 'detalles', 'label' => 'Comentá cualquier detalle importante.', 'lg' => '6', 'placeholder' => '(opcional)', 'value' => $detalles]]);
    echo $this->element('f_date', ['params' => ['name' => 'fecha_entrega', 'label' => 'Fecha de Entrega', 'lg' => '2', 'validate', 'value' => $fecha_entrega]]);
    echo $this->element('f_checkbox', ['params' => ['name' => 'requisitos_excluyentes', 'label' => 'Requisitos Excluyentes', 'options' => $requisitos, 'value' => $requisito, 'lg' => '4', 'vertical']])
    ?>
</div>