<?php
echo $this->Html->script('procesos/add_edit', array('inline' => false));
// debug($proceso);die;
$id = $referencia = $fechaFin = $condicionPago = $detalles = $fechaEntrega = $excFactura = $excGestionEnvio = $excOfertaCompleta = "";
$estado = 1;
if (isset($proceso) && isset($items)) {
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
?>

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
            <?php echo $this->Form->input('detalles', ['value' => $detalles, 'rows' => '4', 'type' => 'textarea']) ?>
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
            <?php echo $this->Form->input('tmp_nombre', ['name' => false, 'type' => 'text']) ?>
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
    <div class="col-lg-12">
        <div class="form-group">
            <label>Especificaciones o Detalles especiales del producto<span class="danger"></span></label>
                <?php echo $this->Form->input('tmp_especificaciones', ['name' => false, 'type' => 'text']) ?>
        </div>
    </div>

</div>


<?php
//Campos hidden para add y/o edit
echo $this->Form->input('id', ['value' => $id, 'type' => 'hidden',]);
echo $this->Form->input('estado', ['value' => $estado, 'type' => 'hidden',]);

echo $this->Form->input('Item.categorias', ['type' => 'hidden',]);
echo $this->Form->input('Item.subcategorias', ['type' => 'hidden']);
echo $this->Form->input('Item.nombres', ['type' => 'hidden']);
echo $this->Form->input('Item.cantidades', ['type' => 'hidden']);
echo $this->Form->input('Item.unidades', ['type' => 'hidden']);
echo $this->Form->input('Item.especificaciones', ['type' => 'hidden']);
?>
