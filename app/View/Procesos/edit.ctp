<?php
//debug($proceso);
//debug($items);die;       
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Editar Proceso de Compra</div>
                    <h2 class="ribbon-content text-justify"> 
                        Sólo podrás editar los loremnas  ias  nsnudu kdsn
                    </h2>
                </div>

                <?php
                echo $this->Form->create($formHorizontal);
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
                                <thead>
                                    <tr>
                                        <th>Categoría</th>
                                        <th>Subcategoría</th>
                                        <th>Referencia</th>
                                        <th>Cantidad</th>
                                        <th>Unidad</th>
                                        <th>Especificaciones</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($items as $key => $item) { ?>
                                        <tr>
                                            <?php echo $this->Form->input('Item.' . $key . '.id', ['value' => $item['id'], 'type' => 'hidden', 'label' => false, 'div' => false]); ?>
                                            <td><?php echo $item['categoria']; ?></td>
                                            <td><?php echo $item['subcategoria']; ?></td>
                                            <td><?php echo $item['nombre']; ?></td>
                                            <td><?php echo $item['cantidad']; ?></td>
                                            <td><?php echo $item['unidad']; ?></td>
                                            <td><?php echo $item['especificaciones']; ?></td>

                                            <td>
                                                <button type='button' class='btn btn-warning itemEdit'><i class='fa fa-edit'></i> </button>
                                                <button type='button' class='btn btn-danger itemRemove'><i class='fa fa-times'></i> </button>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
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
