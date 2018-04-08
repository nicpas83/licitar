<?php // debug($participaciones);die;    ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Mis Participaciones en curso</h4>
                <div class="table-responsive m-t-40">
                    <table id="participacionesIndex" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Detalles</th>
                                <th>Fecha Fin</th>
                                <th>Condición de Pago</th>
                                <th>Cant Items</th>
                                <th>Oferta Total</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($participaciones)) {

                                foreach ($participaciones as $participacion) {
                                    ?>
                                    <tr>
                                        <td><?php echo $participacion['Participacion']['referencia'] ?></td>
                                        <td><?php echo $participacion['Participacion']['detalles'] ?></td>
                                        <td><?php echo $participacion['Participacion']['fecha_fin'] ?></td>
                                        <td><?php echo $participacion['Participacion']['condicion_pago'] ?></td>
                                        <td><?php echo $participacion['Participacion']['q_items'] ?></td>
                                        <td><?php echo $participacion['Participacion']['total_oferta'] ?></td>
                                        <td>
                                            <?php echo $this->Form->postLink('', array('action' => 'delete', $participacion['Participacion']['id']), $deleteBtn); ?>
                                            <?php echo $this->Html->link('', array('controller' => 'procesos','action' => 'view', $participacion['Participacion']['proceso_id']), $viewBtn); ?>
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
