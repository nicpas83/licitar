<?php
echo $this->Html->script('procesos/nuevo', array('inline' => false));
echo $this->Html->script('procesos/abm_items', array('inline' => false));

$formHorizontal['type'] = 'file';

if (isset($borrador_id)) {
    echo $this->Form->input('borradorPk', ['type' => 'hidden', 'value' => $borrador_id]);
    echo $this->element('procesos/check_borrador');
} else {
    echo $this->Form->input('nuevoPk', ['type' => 'hidden', 'value' => $nuevo_id]);
}
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <?php
            echo $this->Form->create($formHorizontal);
            echo $this->element('procesos/nuevo_paso1');
            echo $this->element('procesos/nuevo_paso2');
            echo $this->Form->end();
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block" id="TableItem-vista_previa">
                <h5>Vista Previa</h5>
                <div class="table-responsive">
                    <table class="table" id="items_proceso">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Categoría</th>
                                <th>Subcategoría</th>
                                <th>Cantidad</th>
                                <th>Unidad</th>
                                <th>Especificaciones</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($items)) {
                                foreach ($items as $key => $item) {
                                    ?>
                                    <tr>
                                        <td><?php echo $key + 1; ?></td>
                                        <td><?php echo $item['nombre']; ?></td>
                                        <td><?php echo $categorias[$item['categoria_id']]; ?></td>
                                        <td><?php echo $subcategorias[$item['subcategoria_id']]; ?></td>
                                        <td><?php echo $item['cantidad']; ?></td>
                                        <td><?php echo $item['unidad']; ?></td>
                                        <td><?php echo $item['especificaciones']; ?></td>
                                        <td class='acciones'><?php echo $this->Form->input("itemPk-".$item['id'], ['type' => 'hidden', 'value' => $item['id']]); ?></td>
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
