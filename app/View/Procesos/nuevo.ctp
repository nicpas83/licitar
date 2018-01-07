<?php // debug($condiciones);die; ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Nuevo Proceso de Compra</div>
                    <p class="ribbon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel tellus vulputate risus finibus tristique. In ultrices tempor enim et vestibulum. Quisque in lacus nec nisl rutrum porttitor. Aliquam non turpis urna. Fusce placerat mi accumsan viverra scelerisque.</span> </p>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <!--<h2 class="card-title text-center">¡Comprá en 3 simples pasos!</h2>-->
                <?php echo $this->Form->create(array('class' => 'form-horizontal')); ?>
                <h4 class="card-title">1. Datos Generales del proceso.</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Título Descriptivo o Referencia</label>
                            <?php echo $this->Form->input('referencia', ['type' => 'text', 'class' => 'form-control', 'label' => false, 'div' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Fin de la Subasta?<span class="danger"></span></label>
                            <div class="input-group">
                                <?php echo $this->Form->input('fecha_fin', ['id' => 'fechaFinSubasta', 'type' => 'text', 'class' => 'form-control', 'label' => false, 'div' => false]); ?>
                                <span class="input-group-addon"><i class="icon-calender"></i></span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label>Condición de pago?<span class="danger"></span></label>
                            <?php echo $this->Form->input('condicion_pago', ['type' => 'select', 'options' => $condiciones, 'class' => 'form-control', 'label' => false, 'div' => false]) ?>
                        </div>
                    </div>
                </div>

                <h4 class="card-title">2. Información Adicional para el proveedor</h4>
                <h5 class="card-subtitle"></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Comenta cualquier detalle que consideres relevante.</label>
                            <?php echo $this->Form->input('detalles', ['type' => 'textarea', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Requisitos Excluyentes para que un Proveedor te haga una oferta.</label>
                            <div class="input-group">
                                <ul class="icheck-list">
                                    <li>
                                        <?php echo $this->Form->input('excluyente_factura', ['type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
                                        <label for="flat-checkbox-1">Factura A</label>
                                    </li>
                                    <li>
                                        <?php echo $this->Form->input('excluyente_gestion_envio', ['type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
                                        <label for="flat-checkbox-2">Gestión del Envío por cuenta del Proveedor</label>
                                    </li>
                                    <li>
                                        <?php echo $this->Form->input('excluyente_costo_envio', ['type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
                                        <label for="flat-checkbox-2">Costo de Envío incluído en el precio</label>
                                    </li>
                                </ul>
                                
                        </div>
                    </div>
                </div>
                </div>

                <h4 class="card-title">3. Agrega los Productos o Servicios que necesites.</h4>
                <h5 class="card-subtitle">Máximo 15.</h5>

                <div class="row" id="rowItem-1">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label>Rubro o Categoría?<span class="danger"></span></label>
                            <?php echo $this->Form->input('TmpRubro', ['name' => false, 'type' => 'select', 'options' => $rubros, 'class' => 'form-control select2', 'data-width' => "100%", 'label' => false, 'div' => false]); ?>
                            <?php echo $this->Form->input('Item.rubros', ['type' => 'hidden', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nombre, Modelo o Referencia <span class="text-danger"></span></label>
                            <?php echo $this->Form->input('TmpNombre', ['name' => false, 'type' => 'text', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                            <?php echo $this->Form->input('Item.nombres', ['type' => 'hidden', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label>Cantidad<span class="danger"></span></label>
                            <?php echo $this->Form->input('TmpCantidad', ['name' => false, 'value' => '1', 'type' => 'number', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                            <?php echo $this->Form->input('Item.cantidades', ['type' => 'hidden', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Unidad<span class="danger"></span></label>
                            <?php echo $this->Form->input('TmpUnidad', ['name' => false, 'type' => 'select', 'options' => $unidades, 'default' => '6', 'class' => 'form-control', 'div' => false, 'label' => false]); ?>
                            <?php echo $this->Form->input('Item.unidades', ['type' => 'hidden', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Especificaciones<span class="danger"></span></label>
                            <?php echo $this->Form->input('TmpEspecificaciones', ['name' => false, 'type' => 'text', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                            <?php echo $this->Form->input('Item.especificaciones', ['type' => 'hidden', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <button id="addItem" type="button" class="btn btn-info">Agregar</button>
                        </div>
                    </div>
                </div>
                <!--<td><button type="button" class="btn btn-danger removeItem"><i class="fa fa-times"></i> </button></td>-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table" id="items_proceso">
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <?php echo $this->Form->button('Finalizar', ['class' => 'btn btn-info', 'div' => false]); ?>
                            <!--<button id="Finalizar" type="button" class="btn btn-info">Finalizar</button>-->
                            <button type="button" class="btn btn-info">Guardar Borrador</button>
                        </div>
                    </div>
                </div>

                <?php echo $this->Form->end() ?>

            </div>
        </div>  
    </div>

</div>
<!-- /.row -->
