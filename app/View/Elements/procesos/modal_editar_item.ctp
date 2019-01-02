<?php // debug($id);  
?>
<div id="<?php echo $params['id'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <?php
                    echo $this->element('f_input', ['params' => ['name' => 'nombre', 'label' => 'Nombre del producto o servicio', 'lg' => '6', 'maxLength' => '60', 'validate', 'value' => $params['item']['nombre']]]);
                    echo $this->element('f_number', ['params' => ['name' => 'cantidad', 'label' => 'Cantidad', 'lg' => '3', 'validate', 'value' => $params['item']['cantidad']]]);
                    echo $this->element('f_select', ['params' => ['name' => 'unidad', 'label' => 'Unidad', 'lg' => '3', 'options' => $unidades, 'value' => $params['item']['unidad']]]);
                    echo $this->element('f_select2', ['params' => ['name' => 'categoria', 'label' => 'Categoría', 'lg' => '6', 'options' => $categorias, 'value' => $params['item']['categoria_id']]]);
                    echo $this->element('f_select2', ['params' => ['name' => 'subcategoria', 'label' => 'Sub Categoría', 'lg' => '6', 'options' => ['Elija Categoría']]]);
                    echo $this->element('f_text', ['params' => ['name' => 'especificaciones', 'label' => 'Especificaciones o Detalles especiales del producto', 'lg' => '12', 'rows' => '5', 'placeholder' => '(opcional)', 'maxLength' => '500', 'value' => $params['item']['especificaciones']]]);

                    //hidden categoria - subcategoria
                    echo $this->Form->input('cat_id', ['type' => 'hidden', 'id' => "CatId-" . $params['item']['id'] . "", 'value' => $params['item']['categoria_id']]);
                    echo $this->Form->input('subcat_id', ['type' => 'hidden', 'id' => "SubcatId-" . $params['item']['id'] . "", 'value' => $params['item']['subcategoria_id']]);
                    ?>
                </div>    


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Cancelar</button>
                <button id="ModalGuardar-<?php echo $params['item']['id'] ?>" type="button" class="btn btn-success waves-effect text-left">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->