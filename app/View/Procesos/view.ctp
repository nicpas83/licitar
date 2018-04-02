<?php 
$formHorizontal['url'] = ['action' => 'add', $proceso['id']];
// debug($proceso);die;
?>
<div class="row">
    <div class="col-12">
        <div class="ribbon-wrapper card col-md-7 pull-left">
            <div class="ribbon ribbon-warning"><?php echo $proceso['referencia'] ?> </div>  
            <!--<p class="ribbon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel tellus vulputate risus finibus tristique. In ultrices tempor enim et vestibulum. Quisque in lacus nec nisl rutrum porttitor. Aliquam non turpis urna. Fusce placerat mi accumsan viverra scelerisque.</span> </p>-->                    
            <ul>
                <li>
                    <span class="font-bold">La subasta finaliza el: </span> 
                    <?php echo $proceso['fecha_fin'] ?>
                </li>
                <li>
                    <span class="font-bold">Condiciones de Pago: </span> 
                    <?php echo $proceso['condicion_pago'] ?>
                </li>
                <?php if (!empty($proceso['detalles'])) { ?>
                    <li>
                        <span class="font-bold">Detalles a considerar: </span> 
                        <?php echo $proceso['detalles'] ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="ribbon-wrapper card col-md-4 pull-right">
            <div class="ribbon ribbon-warning">Requisitos Excluyentes</div>  
            <ul class="ribbon-content list-icons">
                <?php
                if (!empty($proceso['requisitos'])) {
                    foreach ($proceso['requisitos'] as $requisito) {
                        ?>
                        <li><i class="fa fa-check text-info"></i><?php echo $requisito; ?></li>
                        <?php
                    }
                } else {
                    ?>
                    <li><i class="fa fa-check text-info"></i>El proceso no tiene condiciones excluyentes.</li>
                <?php } ?>
            </ul>
        </div>         
        <div class="clearfix"></div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Items del Proceso:</h4>
                <div class="table-responsive m-t-40">
                    <?php echo $this->Form->create('Oferta', $formHorizontal); ?>

                    <table id="itemsDelProceso" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Nombre - Descripción</th>
                                <th>Cantidad</th>
                                <th>Unidad</th>
                                <th>Especificaciones</th>
                                <th>Mejor Oferta Recibida</th>
                                <?php if (!isset($proceso['propio'])) { ?>
                                    <th>Tu oferta</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($items)) {
                                $i=0;
                                foreach ($items as $item) {
                                    ?>
                                    <tr>
                                        <td><?php echo $item['categoria'] ?></td>
                                        <td><?php echo $item['nombre'] ?></td>
                                        <td><?php echo $item['cantidad'] ?></td>
                                        <td><?php echo $item['unidad'] ?></td>
                                        <td><?php echo $item['especificaciones'] ?></td>
                                        <td><?php echo $item['mejor_oferta'] ?></td>
                                        <?php if (!isset($proceso['propio'])) { ?>
                                            <td>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-usd"></i></span> 
                                                    <?php echo $this->Form->input("Oferta.$i.valor_oferta", ['type' => 'number']) ?>
                                                    <?php echo $this->Form->input("Oferta.$i.item_id", ['type' => 'hidden', 'value' => $item['id']]) ?>
                                                </div>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row m-t-10">
                    <div class="col-sm-12">

                        <div class="alert alert-warning">
                            <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Importante</h3> 
                            <ul>
                                <li>Tu ofertas deben ser PRECIO TOTAL (IVA INCLUIDO).</li>
                                <li>Si tenés dudas sobre las especificaciones de algún producto/servicio, hacé una pregunta al comprador antes de realizar tu oferta. </li>
                            </ul>
                        </div>

                        <div class="form-group pull-right">
                            <?php
                            if (!isset($proceso['propio'])) {
                                echo $this->Form->button('Realizar Oferta', ['class' => 'btn btn-info', 'div' => false]);
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<!-- Preguntas -->

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Preguntar al comprador:</h4>
                <?php echo $this->Form->create(array('url' => ['action' => 'preguntar', $proceso['id']], 'class' => 'form-horizontal')); ?>
                <div class="form-group">            
                    <?php echo $this->Form->input('pregunta', ['type' => 'textarea', 'placeholder' => 'Escribí tu pregunta...', 'rows' => '4', 'class' => 'form-control', 'div' => false, 'label' => false]); ?>
                </div>
                <div class="form-group  pull-right">            
                    <?php echo $this->Form->button('Preguntar', ['class' => 'btn btn-info pull-left', 'div' => false]); ?>
                </div>
                <div class="clearfix"></div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Importante</div>
                    <p class="ribbon-content">
                        Recordá que no se permiten los datos de contacto explícitos ni las insinuaciones. 
                        Respetar estas normas nos permite un sistema transparente y con igualdad de condiciones para todos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title m-t-15">Últimas preguntas:</h4>
            </div>
        </div>    
    </div>
</div>
