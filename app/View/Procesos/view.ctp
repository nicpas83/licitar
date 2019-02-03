<?php
if ($proceso['propio'] == 'Si') {
    echo $this->element('page/title_nav', [
        'levels' => ['Mis Compras', 'Publicaciones', $proceso['referencia']],
        'links' => [0 => ['controller' => 'procesos', 'action' => 'mis_compras'], 1 => ['controller' => 'pages']]
    ]);
} else {
    echo $this->element('page/title_nav', [
        'levels' => ['Publicaciones', $proceso['referencia']],
        'links' => [0 => ['controller' => 'pages']]
    ]);
}
?>

<div class="row">
    <div class="col-12">
        <div class="ribbon-wrapper card col-md-7 pull-left">
            <div class="ribbon ribbon-warning">Detalles </div>  
            <!--<p class="ribbon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel tellus vulputate risus finibus tristique. In ultrices tempor enim et vestibulum. Quisque in lacus nec nisl rutrum porttitor. Aliquam non turpis urna. Fusce placerat mi accumsan viverra scelerisque.</span> </p>-->                    
            <ul>
                <li>
                    <span class="font-bold">Título: </span> 
                    <?php echo $proceso['referencia'] ?>
                </li>
                <li>
                    <span class="font-bold">La subasta finaliza el: </span> 
                    <?php echo $proceso['fecha_fin'] ?>
                </li>
                <li>
                    <span class="font-bold">Solicita entrega el: </span> 
                    <?php echo $proceso['fecha_entrega'] ?>
                </li>
                <li>
                    <span class="font-bold">Preferencia de Pago: </span> 
                    <?php echo $proceso['preferencia_pago'] ?>
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
                <?php
                if ($proceso['propio'] == 'Si') {
                    echo $this->element('procesos/view_comprador');
                } else {
                    echo $this->element('procesos/aviso_importante');
                    echo $this->element('procesos/view_proveedor');
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Preguntas -->
<?php echo $this->Form->input("pk", ['id' => 'ModelPk', 'type' => 'hidden', 'value' => $proceso['id']]) ?>
<?php
if (!isset($proceso['propio'])) {
    echo $this->element('procesos/nueva_pregunta');
}
echo $this->element('procesos/preguntas_realizadas', $preguntas);
?>

