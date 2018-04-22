<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Procesos de Compra Abriertos</div>
                    <p class="ribbon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel tellus vulputate risus finibus tristique. In ultrices tempor enim et vestibulum. Quisque in lacus nec nisl rutrum porttitor. Aliquam non turpis urna. Fusce placerat mi accumsan viverra scelerisque.</span> </p>                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Filtros de búsqueda: </h4>
                <?php echo $this->Form->create(); ?>
                <?php echo $this->Form->input('categoria', ['type' => 'select', 'options' => $categorias, 'class' => 'form-control select2', 'data-width' => "100%", 'label' => false, 'div' => false]); ?>
                <?php echo $this->Form->button('Buscar', $buscar);?>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>    
    </div>
</div>
<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-block">
                <div class="table-responsive m-t-40">
                    <table id="procesosIndex" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Proceso de Compra</th>
                                <th>Cant Items</th>
                                <th>Cant Unidades</th>
                                <th>Condicion de Pago</th>
                                <th>Finaliza</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($procesos as $proceso) { ?>
                                <tr>
                                    <td><a href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'view',$proceso['proceso_id']]) ?>"><?php echo $proceso['referencia'] ?></a></td>
                                    <td><?php echo $proceso['q_items'] ?></td>
                                    <td><?php echo $proceso['q_unidades'] ?></td>
                                    <td><?php echo $proceso['condicion_pago'] ?></td>
                                    <td><?php echo $proceso['fecha_fin'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>    

            </div>
        </div>
    </div>
</div>



