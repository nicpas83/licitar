<?php // debug($proceso);die;?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h3 class="card-title">Referencia: <?php echo $proceso['referencia'] ?></h3>
                <h5 class="card-subtitle">Comprador: <?php echo $loggedInRazonSocial ?> - Proceso Nro. <?php echo $proceso['proceso_nro'] ?></h5>
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

                <?php
                if (!empty($proceso['requisitos'])) {
                    ?>
                    <div class="col-md-6 col-xlg-2 col-xs-12">
                        <div class="ribbon-wrapper card">
                            <div class="ribbon ribbon-warning">Requisitos Excluyentes para presentar una oferta.</div>
                            <ul class="ribbon-content list-icons">
                                <?php
                                foreach ($proceso['requisitos'] as $requisito) {
                                    ?>
                                    <li><i class="fa fa-check text-info"></i>
                                        <?php echo $requisito; ?>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>         
                    <?php
                }
                ?>
            </div>
        </div>  
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Items del Proceso:</h4>
                <div class="table-responsive m-t-40">
                    <table id="itemsDelProceso" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Rubro</th>
                                <th>Nombre - Descripción</th>
                                <th>Cantidad</th>
                                <th>Unidad</th>
                                <th>Especificaciones</th>
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
                                            
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
