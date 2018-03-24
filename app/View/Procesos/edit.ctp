<?php // debug($proceso);die;      ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Editar Proceso de Compra</div>
                </div>

                <?php 
                    echo $this->Form->create(array('class' => 'form-horizontal')); 
                    echo $this->element('procesos/add_edit');
                    ?>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <button id="addItem" type="button" class="btn btn-info">Agregar Iem</button>
                        </div>
                    </div>
                </div>

                <!--<td><button type="button" class="btn btn-danger removeItem"><i class="fa fa-times"></i> </button></td>-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table" id="items_proceso">
                                <?php foreach ($items as $key => $item) { ?>
                                    <tr>
                                        <?php echo $this->Form->input('Item.' . $key . '.id', ['value' => $item['id'], 'type' => 'hidden', 'label' => false, 'div' => false]); ?>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.categoria_id', ['default' => $item['categoria_id'], 'name' => false, 'type' => 'select', 'options' => $categorias, 'class' => 'form-control select2', 'data-width' => "100%", 'label' => false, 'div' => false]); ?></td>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.nombre', ['value' => $item['nombre'], 'type' => 'text', 'class' => 'form-control', 'div' => false, 'label' => false]) ?></td>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.cantidad', ['value' => $item['cantidad'], 'type' => 'number', 'class' => 'form-control', 'div' => false, 'label' => false]) ?></td>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.unidad', ['default' => $item['unidad'], 'type' => 'select', 'options' => $unidades, 'default' => '6', 'class' => 'form-control', 'div' => false, 'label' => false]); ?></td>
                                        <td><?php echo $this->Form->input('Item.' . $key . '.especificaciones', ['value' => $item['especificaciones'], 'type' => 'text', 'class' => 'form-control', 'div' => false, 'label' => false]) ?></td>
                                        <td><button type='button' class='btn btn-danger removeItem'><i class='fa fa-times'></i> </button></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </table>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <?php echo $this->Form->button('Finalizar', ['class' => 'btn btn-info', 'div' => false]); ?>
                        </div>
                    </div>
                </div>

                <?php echo $this->Form->end() ?>

            </div>
        </div>
    </div>
</div>
