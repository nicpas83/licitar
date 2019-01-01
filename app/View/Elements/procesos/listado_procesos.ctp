<?php
$this->Html->script('procesos/favoritos', ['inline' => false]);
$formHorizontal['url'] = ['controller' => 'ofertas', 'action' => 'add']; //oferta
echo $this->Form->create('Oferta', $formHorizontal);
?>
<div class="table-responsive">
    <table id="procesosIndex" class="table table-bordered table-striped initDt" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Título de referencia</th>
                <th>Detalles</th>
                <th>Items</th>
                <th>Preferencia de Pago</th>
                <th>Finaliza</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($params as $proceso) {
                $active = $proceso['favorito'] == 'Si' ? "active" : "";
                ?>
                <tr>
                    <td>
                        <?php
                        echo $this->Html->link($proceso['referencia'], $this->Html->url(['controller' => 'procesos', 'action' => 'view', $proceso['id']]));
                        echo $this->element('list_labels', ['params' => $proceso['categorias']]);
                        ?>
                    </td>
                    <td><?php echo $proceso['detalles'] ?></td>
                    <td><?php echo $proceso['q_items'] ?></td>
                    <td><?php echo $proceso['preferencia_pago'] ?></td>
                    <td><?php echo $proceso['fecha_fin'] ?></td>
                    <td class="center">
                        <?php
                        echo $this->Html->link('', ['action' => 'view', $proceso['id']], $viewBtn);
                        if ($proceso['propio'] != 'Si') {
                            echo $this->element('btn_toggle', ['params' => ['pk' => $proceso['id'], 'icon' => "far fa-heart", 'active' => $active, 'title' => 'Agregar a Favoritos']]);
                        }
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>    
