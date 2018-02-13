<?php // debug($procesos);die;    ?>
<div class="row">
    <!-- Column -->
    <div class="col-lg-12">
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card card-block">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light"><?php echo $indicadores['q_procesos_activos'] ?></h1>
                            <h6 class="text-muted">Activos</h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i class="mdi mdi-account-circle"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card card-block">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">28</h1>
                            <h6 class="text-muted">Próx 15 días</h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="30%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i class="mdi mdi-briefcase-check"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card card-block">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">352</h1>
                            <h6 class="text-muted">New Items</h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="40%" class="css-bar m-b-0 css-bar-warning css-bar-40"><i class="mdi mdi-star-circle"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card card-block">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">159</h1>
                            <h6 class="text-muted">Invoices</h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="60%" class="css-bar m-b-0 css-bar-info css-bar-60"><i class="mdi mdi-receipt"></i></div>
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
                <h4 class="card-title">Mis Procesos</h4>
                <div class="table-responsive m-t-40">
                    <table id="misProcesos" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro.</th>
                                <th>Referencia</th>
                                <th>Total Productos</th>
                                <th>Total Unidades</th>
                                <th>Ofertas Recibidas</th>
                                <th>Finaliza</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($procesos)) {

                                foreach ($procesos as $proceso) {
                                    ?>
                                    <tr>
                                        <td><?php echo $proceso['proceso_nro'] ?></td>
                                        <td><?php echo $proceso['referencia'] ?></td>
                                        <td><?php echo $proceso['total_items'] ?></td>
                                        <td><?php echo $proceso['total_unidades'] ?></td>
                                        <td></td>
                                        <td><?php echo $proceso['fecha_fin'] ?></td>
                                        <td>
                                            <?php echo $this->Form->postLink('', array('action' => 'delete', $proceso['id']), $deleteBtn); ?>
                                            <?php echo $this->Html->link('', array('action' => 'view', $proceso['id']), $viewBtn); ?>
                                            <?php echo $this->Html->link('', array('action' => 'edit', $proceso['id']), $editBtn); ?>
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
    </div>
</div>
