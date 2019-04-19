<?php
$this->Html->script('procesos/favoritos', ['inline' => false]);
?>

<div class="table-responsive mt20">
    <table class="table table-bordered table-striped initDt" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Titulo publicación</th>
                <th>Detalles</th>
                <th>Finaliza</th>
                <th>Fecha Entrega</th>
                <th>Preferencia Pago</th>
                <th>Cant. Items</th>
                <th>Cant. Ofertas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($procesos as $val) {
                ?>
                <tr>
                    <td><?php echo $this->Html->link($val['referencia'], "/procesos/view/" . $val['id']) ?></td>
                    <td><?php echo $val['detalles'] ?></td>
                    <td><?php echo $val['fecha_fin'] ?></td>
                    <td><?php echo $val['fecha_entrega'] ?></td>
                    <td><?php echo $val['preferencia_pago'] ?></td>
                    <td><?php echo $val['cant_items'] ?></td>
                    <td><?php echo $val['cant_ofertas'] ?></td>
                    <td class="acciones">
                        <?php
                        foreach ($actions as $action) {
                            if ($action == 'favoritos') {
                                echo $this->element('btn_toggle', ['pk' => $val['id'], 'icon' => "far fa-heart", 'active' => $val['favorito'], 'title' => 'Agregar a Favoritos']);
                            }
                            if ($action == 'view') {
                                echo $this->Html->link('', ['controller' => 'procesos', 'action' => 'view', $val['id']], $viewBtn);
                            }
                            if ($action == 'edit') {
                                echo $this->Html->link('', ['action' => 'edit', $val['id']], $editBtn);
                            }
                            if ($action == 'finalizar') {
                                echo $this->Html->link('', ['action' => 'ajax_finalizar', $val['id']], $finalizarBtn);
                            }
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>    
