<div class="table-responsive m-t-40">
    <table id="procesosIndex" class="table table-bordered table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Título de referencia</th>
                <th>Items</th>
                <th>Condicion de Pago</th>
                <th>Finaliza</th>
                <th>Favoritos</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($procesos as $proceso) { ?>
                <tr>
                    <td><a href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'view', $proceso['id']]) ?>"><?php echo $proceso['referencia'] ?></a></td>
                    <td><?php echo $proceso['q_items'] ?></td>
                    <td><?php echo $proceso['preferencia_pago'] ?></td>
                    <td><?php echo $proceso['fecha_fin'] ?></td>
                    <td>
                        <button type="button" class="btn btn-secondary btn-outline" data-toggle="button" aria-pressed="true">
                            <i class="far fa-heart text" aria-hidden="true"></i>
                            <i class="fa fa-heart text-active text-danger" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>    
