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
                    $modalId = "ModalItem-" . $item['id'];
                    $editBtn['id'] = "EditItem-" . $item['id'];
                    $editBtn['data-toggle'] = "modal";
                    $editBtn['data-target'] = "#" . $modalId;
                    $editBtn['data-backdrop'] = "static";
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
                            <?php echo $this->Form->button('', $deleteBtn); ?>
                            <?php echo $this->Form->button('', $editBtn); ?>
                        </td>
                        <?php echo $this->element('procesos/modal_editar_item', ['params' => ['id' => $modalId, 'item' => $item]]); ?>
                    </tr>

                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>