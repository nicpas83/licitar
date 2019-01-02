<?php
echo $this->Html->script('categorias_change', array('inline' => false));
echo $this->Html->script('procesos/funciones', array('inline' => false));
echo $this->Html->script('procesos/edit', array('inline' => false));
//debug($proceso);
//debug($items);die;       
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Editar proceso de compra']) ?>
                <?php echo $this->Form->create($formHorizontal); ?>
                <?php echo $this->element('procesos/form_general'); ?>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('procesos/listado_items_editar'); ?>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
        
    </div>

</div>
