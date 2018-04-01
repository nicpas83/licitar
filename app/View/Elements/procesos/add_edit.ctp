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
    $excOfertaCompleta = $proceso['excluyente_oferta_completa'];
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
?>
<input id="op" type="hidden" value="<?php echo $op ?>" />
<h4 class="card-title">1. Datos Generales del proceso.</h4>
<div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <label>Título Descriptivo o Referencia <span class="text-danger">*</span></label>
            <div class="controls">
                <?php echo $this->Form->input('referencia', ['value' => $referencia, 'required', 'data-validation-required-message' => "El Título es obligatorio"]) ?>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label>Fin de la Subasta? <span class="text-danger">*</span></label>
            <div class="controls">
                <div class="input-group">
                    <?php echo $this->Form->input('fecha_fin', ['value' => $fechaFin, 'type' => 'text', 'required', 'data-validation-required-message' => "Elegí una fecha"]); ?>
                    <span class="input-group-addon"><i class="icon-calender"></i></span> 
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group ">
            <label>Condición de pago?</label>
            <?php echo $this->Form->input('condicion_pago', ['default' => $condicionPago, 'type' => 'select', 'options' => $condiciones, 'class' => 'form-control',]) ?>
        </div>
    </div>
</div>

<h4 class="card-title">2. Información Adicional para el proveedor</h4>
<h5 class="card-subtitle"></h5>
<div class="row">
    <div class="col-lg-5">
        <div class="form-group">
            <label>Comentá cualquier detalle importante.</label>
            <?php echo $this->Form->input('detalles', ['value' => $detalles, 'rows' => '4', 'type' => 'textarea', 'placeholder' => '(opcional)',]) ?>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="form-group">
            <label>Fecha de Entrega <span class="text-danger">*</span></label>
            <div class="controls">
                <div class="input-group">
                    <?php echo $this->Form->input('fecha_entrega', ['value' => $fechaEntrega, 'type' => 'text', 'required', 'data-validation-required-message' => "Elegí una fecha"]); ?>
                    <span class="input-group-addon"><i class="icon-calender"></i></span> 
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-sm-12" >
        <div class="form-group">
            <label>Requisitos Excluyentes</label>
            <div class="input-group">
                <ul class="icheck-list">
                    <li>
                        <?php echo $this->Form->input('excluyente_factura', ['default' => $excFactura, 'type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow']) ?>
                        <label for="flat-checkbox-1">Que el Proveedor emita Factura A.</label>
                    </li>
                    <li>
                        <?php echo $this->Form->input('excluyente_gestion_envio', ['default' => $excGestionEnvio, 'type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow']) ?>
                        <label for="flat-checkbox-2">Que el proveedor gestione el envío.</label>
                    </li>
                    <li>
                        <?php echo $this->Form->input('excluyente_oferta_completa', ['default' => $excOfertaCompleta, 'type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow']) ?>
                        <label for="flat-checkbox-2">Que el Proveedor oferte en todos los Items.</label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h4 class="card-title">3. Agrega los Productos o Servicios que necesites.</h4>
<h5 class="card-subtitle">Completá los campos y hacé click en "Agregar Item".</h5>

<div class="row" id="rowItem-1">
    <div class="col-lg-3">
        <div class="form-group">
            <label>Categoria <span class="text-danger">*</span></label>
            <?php echo $this->Form->input('tmp_categoria', ['name' => false, 'type' => 'select', 'options' => $categorias, 'class' => 'form-control select2', 'data-width' => "100%"]); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label>Sub Categoria <span class="text-danger">*</span></label>
            <?php echo $this->Form->input('tmp_subcategoria', ['name' => false, 'type' => 'select', 'options' => $sub_categorias, 'class' => 'form-control select2', 'data-width' => "100%"]); ?>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label>Marca, Modelo o Referencia <span class="text-danger">*</span></label>
            <?php echo $this->Form->input('tmp_nombre', ['name' => false, 'type' => 'text', 'maxlength' => '50']) ?>
        </div>
    </div>
    <div class="col-lg-1 col-sm-6">
        <div class="form-group">
            <label>Cantidad</label>
            <?php echo $this->Form->input('tmp_cantidad', ['name' => false, 'value' => '1', 'min' => '1', 'type' => 'number']) ?>
        </div>
    </div>
    <div class="col-lg-2 col-sm-6">
        <div class="form-group">
            <label>Unidad</label>
            <?php echo $this->Form->input('tmp_unidad', ['name' => false, 'type' => 'select', 'options' => $unidades, 'default' => '6']); ?>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label>Especificaciones o Detalles especiales del producto<span class="danger"></span></label>
            <?php echo $this->Form->input('tmp_especificaciones', ['name' => false, 'type' => 'textarea', 'placeholder' => '(opcional)', 'maxlength' => '500']) ?>
        </div>
    </div>


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
