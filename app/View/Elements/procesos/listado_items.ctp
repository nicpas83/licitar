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
                        <td class='acciones'>
                            <?php echo $this->Form->input("itemPk-" . $item['id'], ['type' => 'hidden', 'value' => $item['id']]); ?>
                        </td>
                    </tr>

                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>