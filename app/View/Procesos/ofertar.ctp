<?php // debug($proceso);die;                        ?>
<div class="row">
    <div class="col-12">
        <div class="ribbon-wrapper card col-md-7 pull-left">
            <div class="ribbon ribbon-warning"> </div>  
            <!--<p class="ribbon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel tellus vulputate risus finibus tristique. In ultrices tempor enim et vestibulum. Quisque in lacus nec nisl rutrum porttitor. Aliquam non turpis urna. Fusce placerat mi accumsan viverra scelerisque.</span> </p>-->                    
           
        </div>
        <div class="ribbon-wrapper card col-md-4 pull-right">
            <div class="ribbon ribbon-warning"></div>  
            
        </div>         

        <div class="clearfix"></div>

        <div class="col-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Items del Proceso:</h4>
                    <div class="table-responsive m-t-40">
                        <?php echo $this->Form->create(array('url'=>['action' => 'ofertar', $proceso['id']], 'class' => 'form-horizontal')); ?>

                        <table id="itemsDelProceso" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Rubro</th>
                                    <th>Nombre - Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Unidad</th>
                                    <th>Especificaciones</th>
                                    <th>Oferta (iva inc.)</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($items)) {

                                    foreach ($items as $item) {
                                        ?>
                                        <tr>
                                            <td><?php echo $item['rubro'] ?></td>
                                            <td><?php echo $item['nombre'] ?></td>
                                            <td><?php echo $item['cantidad'] ?></td>
                                            <td><?php echo $item['unidad'] ?></td>
                                            <td><?php echo $item['especificaciones'] ?></td>
                                            <td>
                                                <?php echo $this->Form->input('valor_oferta.', ['type' => 'number', 'class' => 'form-control', 'div' => false, 'label' => false,'required' => false]) ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'preguntar', $item['id']]) ?>" title="Preguntar" class="btn btn-info mdi mdi-comment-question-outline"></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group pull-right">
                                <?php echo $this->Form->button('Realizar Oferta', ['class' => 'btn btn-info', 'div' => false]); ?>
                            </div>
                        </div>
                    </div>
                    <?php echo $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
