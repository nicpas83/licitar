<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Procesos de compra con apertura próxima.</h4>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Rubro</th>
                                <th>Referencia</th>
                                <th>Total Productos</th>
                                <th>Total Unidades</th>
                                <th>Ofertas Recibidas</th>
                                <th>Finaliza</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CONSTRUCCION</td>
                                <td>Materiales para construccion en seco</td>
                                <td>7</td>
                                <td>680</td>
                                <td>2</td>
                                <td>15/12/2017</td>
                                <td>
                                    <a href="" title="Editar" class="btn btn-info fa fa-edit pull-right pad-5"></a>
                                    <a href="" title="Pausar" class="btn btn-info fa fa-pause pull-right pad-5"></a>

                                </td>
                            </tr>
                            <tr>
                                <td>FERRETERIA</td>
                                <td>Tornillos y Repuestos varios</td>
                                <td>4</td>
                                <td>250</td>
                                <td>4</td>
                                <td>10/11/2017</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>PINTURAS</td>
                                <td>Latex interior y exterior</td>
                                <td>4</td>
                                <td>4</td>
                                <td>0</td>
                                <td>10/11/2017</td>
                                <td></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Bucar Procesos Activos.</h4>
                <?php echo $this->Form->create(array('class' => 'form-horizontal')); ?>
                <div class="form-group">
                    <?php echo $this->Form->input('Nombre del proceso', ['name' => 'referencia', 'type' => 'text', 'class' => 'form-control', 'div' => false]) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('Rubro / Categoría', ['name' => 'rubro', 'type' => 'select', 'options' => $rubros, 'class' => 'form-control select2', 'div' => false]); ?>                    
                </div>
                <?php echo $this->Form->end($buscar); ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Buscar Proveedores</h4>
                <h6 class="card-subtitle">Agendalos en tu cuenta para invitarlos a tus procesos de compra.</h6>
                <?php echo $this->Form->create(array('class' => 'form-horizontal')); ?>

                <div class="form-group">
                    <?php echo $this->Form->input('Rubro / Categoría', ['name' => 'rubro', 'type' => 'select', 'options' => $rubros, 'class' => 'form-control select2', 'div' => false]); ?>                    
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('Razón Social', ['name' => 'referencia', 'type' => 'text', 'class' => 'form-control', 'div' => false]) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('Nro. CUIT', ['name' => 'referencia', 'type' => 'text', 'class' => 'form-control', 'div' => false]) ?>
                </div>
                <?php echo $this->Form->end($buscar); ?>

            </div>
        </div>
    </div>
</div>

