<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => "$nombre_cat", 'icon' => "$icon_cat", 'breadlist' => $subcats]); ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs customtab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#vista_general" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Procesos de Compra</span></a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#productos_servicios" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Productos y Servicios</span></a> </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="vista_general" role="tabpanel">
                        <div class="table-responsive m-t-40">
                            <table id="procesosIndex" class="table table-bordered table-striped" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Proceso de Compra</th>
                                        <th>Cant Items</th>
                                        <th>Cant Unidades</th>
                                        <th>Condicion de Pago</th>
                                        <th>Finaliza</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($procesos as $proceso) { ?>
                                        <tr>
                                            <td><a href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'view', $proceso['id']]) ?>"><?php echo $proceso['referencia'] ?></a></td>
                                            <td><?php echo $proceso['q_items'] ?></td>
                                            <td><?php echo $proceso['q_unidades'] ?></td>
                                            <td><?php echo $proceso['preferencia_pago'] ?></td>
                                            <td><?php echo $proceso['fecha_fin'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane active" id="productos_servicios" role="tabpanel">

                    </div>

                </div>




            </div>
        </div>
    </div>
</div>



