<div class="row">
    <?php
    echo $this->element('f_input', ['params' => ['name' => 'referencia', 'label' => 'Título Descriptivo o Referencia', 'lg' => '6', 'validate']]);
    echo $this->element('f_date', ['params' => ['name' => 'fecha_fin', 'label' => 'Fin de la Subasta?', 'lg' => '2', 'validate']]);
    echo $this->element('f_select', ['params' => ['name' => 'preferencia_pago', 'label' => 'Preferencia de pago?', 'lg' => '3', 'options' => $preferencias]]);
    echo $this->element('f_text', ['params' => ['name' => 'detalles', 'label' => 'Comentá cualquier detalle importante.', 'lg' => '6', 'placeholder' => '(opcional)']]);
    echo $this->element('f_date', ['params' => ['name' => 'fecha_entrega', 'label' => 'Fecha de Entrega', 'lg' => '2', 'validate']]);
    echo $this->element('f_checkbox', ['params' => ['name' => 'requisitos_excluyentes', 'label' => 'Requisitos Excluyentes', 'options' => $requisitos, 'lg' => '4', 'vertical']])
    ?>
</div>