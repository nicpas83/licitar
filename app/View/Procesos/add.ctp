<?php // debug($condiciones);die;       ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div id="accordion2" class="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h1>Nuevo Proceso de Compra</h1>
                        </div>
                        <div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                            <div class="card-block">
                                <h2 class="text-justify"> 
                                    La fecha de fin que elijas para tu proceso será el día donde 
                                    podrás ver los datos del proveedor que resultó ganador del proceso.
                                    <br/>
                                    El proveedor que resulte ganador es el que menor Costo Total haya ofrecido.
                                    En los casos donde haya algún otro provedor que haya mejorado la oferta en 
                                    algún Ítem de tu proceso, también te mostraremos sus datos. 
                                    <br/>
                                    Será tu elección cerrar la negociación completa con el proveedor ganador o, 
                                    si éste acepta mantenerte el resto de la oferta, podrás comprar ese Item al 
                                    otro proveedor. 
                                </h2>
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapse1" aria-expanded="true" aria-controls="collapseOne" class="btn btn-sm btn-success">
                                    Entendido
                                </a>
                            </div>
                        </div>
                    </div>
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
                            <?php echo $this->Form->input('detalles', ['type' => 'textarea', 'rows' => '4', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Requisitos Excluyentes para que un Proveedor te haga una oferta.</label>
                            <div class="input-group">
                                <ul class="icheck-list">
                                    <li>
                                        <?php echo $this->Form->input('excluyente_factura', ['type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
                                        <label for="flat-checkbox-1">Que el Proveedor emita Factura A.</label>
                                    </li>
                                    <li>
                                        <?php echo $this->Form->input('excluyente_gestion_envio', ['type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
                                        <label for="flat-checkbox-2">Que el proveedor gestione el envío.</label>
                                    </li>
                                    <li>
                                        <?php echo $this->Form->input('excluyente_oferta_completa', ['type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
                                        <label for="flat-checkbox-2">Que el Proveedor oferte en todos los Items.</label>
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
                            <button id="addItem" type="button" class="btn btn-info">Agregar Item</button>
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
                        </div>
                    </div>
                </div>

                <?php echo $this->Form->end() ?>

            </div>
        </div>  
    </div>

</div>
<!-- /.row -->
