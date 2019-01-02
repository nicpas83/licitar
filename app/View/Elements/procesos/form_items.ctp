<div class="row">
    <?php
    echo $this->element('f_input', ['params' => ['name' => 'nombre', 'label' => 'Nombre del producto o servicio', 'lg' => '6', 'maxLength' => '60', 'validate']]);
    echo $this->element('f_select2', ['params' => ['name' => 'categoria', 'label' => 'Categoría', 'lg' => '3', 'options' => $categorias, 'validate']]);
    echo $this->element('f_select2', ['params' => ['name' => 'subcategoria', 'label' => 'Sub Categoría', 'lg' => '3', 'options' => ['Elija Categoría'], 'validate']]);

    echo $this->element('f_text', ['params' => ['name' => 'especificaciones', 'label' => 'Especificaciones o Detalles especiales del producto', 'lg' => '6', 'rows' => '5', 'placeholder' => '(opcional)', 'maxLength' => '500']]);
    echo $this->element('f_number', ['params' => ['name' => 'cantidad', 'label' => 'Cantidad', 'lg' => '1', 'sm' => '6', 'validate']]);
    echo $this->element('f_select', ['params' => ['name' => 'unidad', 'label' => 'Unidad', 'lg' => '2', 'sm' => '6', 'options' => $unidades, 'value' => '6']]);
    ?>
</div>