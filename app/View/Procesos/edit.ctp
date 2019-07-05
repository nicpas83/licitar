<?php
echo $this->Html->script('categorias_change', array('inline' => false));
echo $this->Html->script('procesos/add_edit_funciones', array('inline' => false));
echo $this->Html->script('procesos/edit', array('inline' => false));
//debug($proceso);
//debug($items);die;       
?>
<?php
echo $this->element('page/title_nav', [
    'levels' => ['Mis Compras' => 'mis_compras', 'Editar Publicación' => ''],
    'actions' => ['Nueva Publicación' => 'nuevo']
]);
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Datos generales']) ?>
                <?php echo $this->Form->create($formHorizontal); ?>
                <?php echo $this->element('procesos/form_general', [$proceso]); ?>
                <div class="form-group pull-right">
                    <?php
                    echo $this->Form->button('Cancelar', ['id' => 'cancelar', 'class' => 'btn btn-info mr10', 'type' => 'button']);
                    echo $this->Form->button('Guardar!', ['id' => 'guardar', 'class' => 'btn btn-success', 'type' => 'button']);
                    ?>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Ítems incluidos']) ?>
                <?php echo $this->element('procesos/listado_items_editar'); ?>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>

</div>
