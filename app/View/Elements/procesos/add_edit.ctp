<?php
echo $this->Html->script('procesos/add_edit', array('inline' => false));
$op = "A";
$id = $referencia = $fechaFin = $condicionPago = $detalles = $fechaEntrega = $excFactura = $excGestionEnvio = $excOfertaCompleta = "";
$itemIds = $itemCategorias = $itemCategoriasTxt = $itemSubcategorias = $itemSubcategoriasTxt = $itemNombres = $itemCantidades = $itemUnidades = $itemEspecificaciones = "";
$estado = 1;
if (isset($proceso)) {
    $op = "E";
    $id = $proceso['id'];
    $estado = $proceso['estado'];
    $referencia = $proceso['referencia'];
    $fechaFin = $proceso['fecha_fin'];
    $condicionPago = $proceso['condicion_pago'];
    $detalles = $proceso['detalles'];
    $fechaEntrega = $proceso['fecha_entrega'];
    $excFactura = $proceso['excluyente_factura'];
    $excGestionEnvio = $proceso['excluyente_gestion_envio'];
}
if (isset($hidden)) {
    $itemIds = $hidden['itemIds'];
    $itemCategorias = $hidden['categorias'];
    $itemCategoriasTxt = $hidden['categoriasTxt'];
    $itemSubcategorias = $hidden['subcategorias'];
    $itemSubcategoriasTxt = $hidden['subcategoriasTxt'];
    $itemNombres = $hidden['nombres'];
    $itemCantidades = $hidden['cantidades'];
    $itemUnidades = $hidden['unidades'];
    $itemEspecificaciones = $hidden['especificaciones'];
}
//debug($this->element('f_checkIN', ['params' => ['lg' => '3', 'label' => 'Requisitos Excluyentes']]));die;
?>
<input id="op" type="hidden" value="<?php echo $op ?>" />
<h4 class="card-title">1. Datos Generales del proceso.</h4>
<div class="row">
    <?php echo $this->element('f_input', ['params' => ['name' => 'referencia', 'label' => 'Título Descriptivo o Referencia', 'lg' => '5', 'value' => $referencia, 'validate']]); ?>
    <?php echo $this->element('f_date', ['params' => ['name' => 'fecha_fin', 'label' => 'Fin de la Subasta?', 'lg' => '2', 'value' => $fechaFin, 'validate']]); ?>
    <?php echo $this->element('f_select', ['params' => ['name' => 'condicion_pago', 'label' => 'Condición de pago?', 'lg' => '3', 'default' => $condicionPago, 'options' => $condiciones]]); ?>

</div>

<h4 class="card-title">2. Información Adicional para el proveedor</h4>
<div class="row">
    <?php echo $this->element('f_text', ['params' => ['name' => 'detalles', 'label' => 'Comentá cualquier detalle importante.', 'lg' => '5', 'value' => $detalles]]); ?>
    <?php echo $this->element('f_date', ['params' => ['name' => 'fecha_entrega', 'label' => 'Fecha de Entrega', 'lg' => '2', 'value' => $fechaEntrega, 'validate']]); ?>
    <?php echo $this->element('f_checkIN', ['params' => ['label' => 'Requisitos Excluyentes', 'lg' => '4']]); ?>
    <?php echo $this->element('f_checkbox', ['params' => ['name' => 'excluyente_factura', 'label' => 'Que el proveedor emita Factura A', 'value' => $excFactura]]); ?>
    <?php echo $this->element('f_checkbox', ['params' => ['name' => 'excluyente_gestion_envio', 'label' => 'Que el proveedor gestione el envío', 'value' => $excGestionEnvio]]); ?>
    <?php echo $this->element('f_checkOUT'); ?>

</div>    
<h4 class="card-title">3. Agrega los Productos o Servicios que necesites.</h4>
<h5 class="card-subtitle">Completá los campos y hacé click en "Agregar Item".</h5>

<div class="row" id="rowItem-1">

    <?php echo $this->element('f_select2', ['params' => ['name' => 'tmp_categoria', 'label' => 'Categoría', 'lg' => '3', 'options' => $categorias]]) ?>
    <?php echo $this->element('f_select2', ['params' => ['name' => 'tmp_subcategoria', 'label' => 'Sub Categoría', 'lg' => '3', 'options' => $sub_categorias]]) ?>
    <?php echo $this->element('f_input', ['params' => ['name' => 'tmp_nombre', 'label' => 'Marca, Modelo o Referencia', 'lg' => '3', 'maxLength' => '50']]); ?>
    <?php echo $this->element('f_number', ['params' => ['name' => 'tmp_cantidad', 'label' => 'Cantidad', 'lg' => '1', 'sm' => '6',]]); ?>
    <?php echo $this->element('f_select', ['params' => ['name' => 'tmp_unidad', 'label' => 'Unidad', 'lg' => '2', 'sm' => '6', 'options' => $unidades, 'value' => '6']]) ?>
    <?php echo $this->element('f_text', ['params' => ['name' => 'tmp_especificaciones', 'label' => 'Especificaciones o Detalles especiales del producto', 'lg' => '6', 'rows' => '6', 'placeholder' => '(opcional)', 'maxLength' => '500']]); ?>

</div>

<?php
//Campos hidden para add y/o edit
echo $this->Form->input('id', ['value' => $id, 'type' => 'hidden',]);
echo $this->Form->input('estado', ['value' => $estado, 'type' => 'hidden',]);
echo $this->Form->input('Item.ids', ['value' => $itemIds, 'type' => 'hidden',]);
echo $this->Form->input('Item.categorias', ['value' => $itemCategorias, 'type' => 'hidden',]);
echo $this->Form->input('Item.tmp_categoriasTxt', ['value' => $itemCategoriasTxt, 'type' => 'hidden',]);
echo $this->Form->input('Item.subcategorias', ['value' => $itemSubcategorias, 'type' => 'hidden']);
echo $this->Form->input('Item.tmp_subcategoriasTxt', ['value' => $itemSubcategoriasTxt, 'type' => 'hidden']);
echo $this->Form->input('Item.nombres', ['value' => $itemNombres, 'type' => 'hidden']);
echo $this->Form->input('Item.cantidades', ['value' => $itemCantidades, 'type' => 'hidden']);
echo $this->Form->input('Item.unidades', ['value' => $itemUnidades, 'type' => 'hidden']);
echo $this->Form->input('Item.especificaciones', ['value' => $itemEspecificaciones, 'type' => 'hidden']);
?>

<div class="row">
    <div class="col-sm-12">
        <button id="addItem" type="button" class="btn btn-info pull-right">Agregar Item</button>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
        <h5 class="card-subtitle">Vista Previa</h5>
        <div class="table-responsive">
            <table class="table" id="items_proceso">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Categoría</th>
                        <th>Subcategoría</th>
                        <th>Referencia</th>
                        <th>Cantidad</th>
                        <th>Unidad</th>
                        <th>Especificaciones</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($items)) {
                        foreach ($items as $key => $item) {
                            ?>
                            <tr id='item-<?php echo $key ?>'>
                                <td class="index"><?php echo $key + 1 ?></td>
                                <td><?php echo $item['categoria'] ?></td>
                                <td><?php echo $item['subcategoria'] ?></td>
                                <td><?php echo $item['nombre'] ?></td>
                                <td><?php echo $item['cantidad'] ?></td>
                                <td><?php echo $item['unidad'] ?></td>
                                <td><?php echo $item['especificaciones'] ?></td>
                                <td class='actions'>
                                    <button type='button' class='btn btn-warning edit'><i class='fa fa-edit'></i></button>
                                    <button type='button' class='btn btn-danger m-l-5 remove'><i class='fa fa-times'></i></button>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
