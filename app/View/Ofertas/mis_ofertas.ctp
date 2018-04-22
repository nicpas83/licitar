<?php // debug($procesos);die;    ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Mis Ofertas en curso</h4>
                <div class="table-responsive m-t-40">
                    <table id="misOfertas" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Cant Items</th>
                                <th>Cant Unidades</th>
                                <th>Oferta Total</th>
                                <th>Finaliza</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($participaciones)) {

                                foreach ($participaciones as $proceso) {
                                    ?>
                                    <tr>
                                        <td><?php echo $proceso['Proceso']['referencia'] ?></td>
                                        <td><?php echo $proceso['Proceso']['total_items'] ?></td>
                                        <td><?php echo $proceso['Proceso']['total_unidades'] ?></td>
                                        <td></td>
                                        <td><?php echo $proceso['Proceso']['fecha_fin'] ?></td>
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
