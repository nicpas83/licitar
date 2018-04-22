<?php
//echo date('d-n H:i:s'); die;
// debug($items);die;
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
                <h4 class="card-title">El Comprador solicita:</h4>
                <?php
                if (isset($proceso['propio'])) {
                    echo $this->element('procesos/view_comprador');
                } else {
                    echo $this->element('procesos/view_proveedor');
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Preguntas -->
<?php
if (!isset($proceso['propio'])) {
    echo $this->element('procesos/preguntas');
} 
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title m-t-15">Últimas preguntas:</h4>
            </div>
        </div>    
    </div>
</div>
