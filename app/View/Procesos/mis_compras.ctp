<?php // debug($procesos);die;     ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Mis Compras Activas']) ?>
                <h4 class="card-title"></h4>
                <div class="table-responsive m-t-40">
                    <table id="misProcesos" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nro.</th>
                                <th>Titulo de referencia</th>
                                <th>Items</th>
                                <th>Qx Ofertas</th>
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
                                        <td><?php echo $this->Html->link($proceso['referencia'], "/procesos/view/".$proceso['id']) ?></td>
                                        <td><?php echo $proceso['total_items'] ?></td>
                                        <td></td>
                                        <td><?php echo $proceso['fecha_fin'] ?></td>
                                        <td>
                                            <?php echo $this->Form->postLink('', array('action' => 'delete', $proceso['id']), $deleteBtn); ?>
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
