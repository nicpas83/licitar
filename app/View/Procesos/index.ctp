<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Categorías generales']) ?>
                <?php echo $this->element('categorias/listado') ?>
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



