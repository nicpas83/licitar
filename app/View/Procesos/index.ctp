<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Procesos de Compra Abiertos']) ?>

            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
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
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-block">
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
                                    <td><a href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'view', $proceso['proceso_id']]) ?>"><?php echo $proceso['referencia'] ?></a></td>
                                    <td><?php echo $proceso['q_items'] ?></td>
                                    <td><?php echo $proceso['q_unidades'] ?></td>
                                    <td><?php echo $proceso['condicion_pago'] ?></td>
                                    <td><?php echo $proceso['fecha_fin'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>    

            </div>
        </div>
    </div>
</div>



