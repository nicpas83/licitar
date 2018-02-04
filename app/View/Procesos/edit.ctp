<?php // debug($proceso);die;      ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Editar Proceso de Compra</div>
                </div>

                <?php echo $this->Form->create(array('class' => 'form-horizontal')); ?>
                <h4 class="card-title">1. Datos Generales del proceso.</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Título Descriptivo o Referencia</label>
                            <?php echo $this->Form->input('id', ['value' => $proceso['id'], 'type' => 'hidden', 'label' => false, 'div' => false]); ?>
                            <?php /* activo-borrador */ echo $this->Form->input('estado', ['value' => $proceso['estado'], 'type' => 'hidden', 'label' => false, 'div' => false]); ?>
                            <?php echo $this->Form->input('referencia', ['value' => $proceso['referencia'], 'type' => 'text', 'class' => 'form-control', 'label' => false, 'div' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Fin de la Subasta?<span class="danger"></span></label>
                            <div class="input-group">
                                <?php echo $this->Form->input('fecha_fin', ['value' => $proceso['fecha_fin'], 'id' => 'fechaFinSubasta', 'type' => 'text', 'class' => 'form-control', 'label' => false, 'div' => false]); ?>
                                <span class="input-group-addon"><i class="icon-calender"></i></span> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group ">
                            <label>Condición de pago?<span class="danger"></span></label>
                            <?php echo $this->Form->input('condicion_pago', ['default' => $proceso['condicion_pago'], 'type' => 'select', 'options' => $condiciones, 'class' => 'form-control', 'label' => false, 'div' => false]) ?>
                        </div>
                    </div>
                </div>

                <h4 class="card-title">2. Información Adicional para el proveedor</h4>
                <h5 class="card-subtitle"></h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Comenta cualquier detalle que consideres relevante.</label>
                            <?php echo $this->Form->input('detalles', ['value' => $proceso['detalles'], 'rows' => '4', 'type' => 'textarea', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Requisitos Excluyentes para que un Proveedor te haga una oferta.</label>
                            <div class="input-group">
                                <ul class="icheck-list">
                                    <li>
                                        <?php echo $this->Form->input('excluyente_factura', ['default' => $proceso['excluyente_factura'], 'type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
                                        <label for="flat-checkbox-1">Que el Proveedor emita Factura A.</label>
                                    </li>
                                    <li>
                                        <?php echo $this->Form->input('excluyente_gestion_envio', ['default' => $proceso['excluyente_gestion_envio'], 'type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
                                        <label for="flat-checkbox-2">Que el proveedor gestione el envío.</label>
                                    </li>
                                    <li>
                                        <?php echo $this->Form->input('excluyente_oferta_completa', ['default' => $proceso['excluyente_oferta_completa'], 'type' => 'checkbox', 'class' => 'form-control check', 'data-checkbox' => 'icheckbox_flat-yellow', 'div' => false, 'label' => false]) ?>
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
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Nombre, Modelo o Referencia <span class="text-danger"></span></label>
                            <?php echo $this->Form->input('TmpNombre', ['name' => false, 'type' => 'text', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <div class="form-group">
                            <label>Cantidad<span class="danger"></span></label>
                            <?php echo $this->Form->input('TmpCantidad', ['name' => false, 'value' => '1', 'type' => 'number', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label>Unidad<span class="danger"></span></label>
                            <?php echo $this->Form->input('TmpUnidad', ['name' => false, 'type' => 'select', 'options' => $unidades, 'default' => '6', 'class' => 'form-control', 'div' => false, 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Especificaciones<span class="danger"></span></label>
                            <?php echo $this->Form->input('TmpEspecificaciones', ['name' => false, 'type' => 'text', 'class' => 'form-control', 'div' => false, 'label' => false]) ?>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <button id="addItem" type="button" class="btn btn-info">Agregar Iem</button>
                        </div>
                    </div>
                </div>

                <!--<td><button type="button" class="btn btn-danger removeItem"><i class="fa fa-times"></i> </button></td>-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table" id="items_proceso">
                                <?php foreach ($items as $key => $item) { ?>
                                    <tr>
                                        <?php echo $this->Form->input('Item.' . $key . '.id', ['value' => $item['id'], 'type' => 'hidden', 'label' => false, 'div' => false]); ?>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.rubro_id', ['default' => $item['rubro_id'], 'name' => false, 'type' => 'select', 'options' => $rubros, 'class' => 'form-control select2', 'data-width' => "100%", 'label' => false, 'div' => false]); ?></td>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.nombre', ['value' => $item['nombre'], 'type' => 'text', 'class' => 'form-control', 'div' => false, 'label' => false]) ?></td>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.cantidad', ['value' => $item['cantidad'], 'type' => 'number', 'class' => 'form-control', 'div' => false, 'label' => false]) ?></td>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.unidad', ['default' => $item['unidad'], 'type' => 'select', 'options' => $unidades, 'default' => '6', 'class' => 'form-control', 'div' => false, 'label' => false]); ?></td>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.especificaciones', ['value' => $item['especificaciones'], 'type' => 'text', 'class' => 'form-control', 'div' => false, 'label' => false]) ?></td>
                                        <td><button type='button' class='btn btn-danger removeItem'><i class='fa fa-times'></i> </button></td>
                                    </tr>
                                    <?php
                                }
                                ?>

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
