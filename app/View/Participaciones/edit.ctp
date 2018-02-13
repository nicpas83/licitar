<?php // debug($participacion);die; ?>
<div class="row">
    <div class="col-12">
        <div class="ribbon-wrapper card col-md-7 pull-left">
            <div class="ribbon ribbon-warning"><?php echo $participacion['Proceso']['referencia'] ?> </div>  
            <!--<p class="ribbon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel tellus vulputate risus finibus tristique. In ultrices tempor enim et vestibulum. Quisque in lacus nec nisl rutrum porttitor. Aliquam non turpis urna. Fusce placerat mi accumsan viverra scelerisque.</span> </p>-->                    
            <ul>
                <li>
                    <span class="font-bold">La subasta finaliza el: </span> 
                    <?php echo $participacion['Proceso']['fecha_fin'] ?>
                </li>
                <li>
                    <span class="font-bold">Condiciones de Pago: </span> 
                <?php echo $participacion['Proceso']['condicion_pago'] ?>
                </li>
                <?php if (!empty($participacion['Proceso']['detalles'])) { ?>
                    <li>
                        <span class="font-bold">Detalles a considerar: </span> 
                    <?php echo $participacion['Proceso']['detalles'] ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="ribbon-wrapper card col-md-4 pull-right">
            <div class="ribbon ribbon-warning">Requisitos Excluyentes</div>  
            <ul class="ribbon-content list-icons">
                <?php
                if (!empty($participacion['Proceso']['requisitos_exluyentes'])) {
                    foreach ($participacion['Proceso']['requisitos_exluyentes'] as $requisito) {
                        ?>
                        <li><i class="fa fa-check text-info"></i>
                        <?php echo $requisito; ?>
                        </li>
                        <?php
                    }
                } else {
                    ?>
                    <li><i class="fa fa-check text-info"></i>
                    <?php echo "El proceso no tiene condiciones excluyentes."; ?>
                    </li>
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
<?php echo $this->Form->create(false, array('url'=>['controller'=>'ofertas','action'=>'edit'],'class' => 'form-horizontal')); ?>

                    <table id="itemsDelProceso" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nombre - Descripción</th>
                                <th>Cantidad</th>
                                <th>Unidad</th>
                                <th>Especificaciones</th>
                                <th>Tu Oferta</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($participacion['Oferta'] as $key => $item) {
                                ?>
                                <tr>
                                    <td><?php echo $item['item_nombre'] ?></td>
                                    <td><?php echo $item['item_cantidad'] ?></td>
                                    <td><?php echo $item['item_unidad'] ?></td>
                                    <td><?php echo $item['item_especificaciones'] ?></td>
                                    <td>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-usd"></i></span> 
                                            <?php echo $this->Form->input("Oferta.".$key.".id", ['type' => 'hidden', 'value' => $item['id'], 'div' => false, 'label' => false]) ?>
                                            <?php echo $this->Form->input("Oferta.".$key.".valor_oferta", ['value' => $item['valor_oferta'], 'type' => 'number', 'class' => 'form-control', 'div' => false, 'label' => false, 'required' => true]) ?>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="row m-t-10">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <?php
                            if (!isset($proceso['propio'])) {
                                echo $this->Form->button('Actualizar Mi Oferta', ['class' => 'btn btn-info m-t-10', 'div' => false]);
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
