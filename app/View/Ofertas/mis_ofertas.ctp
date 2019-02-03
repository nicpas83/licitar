<?php
// debug($ofertas);die;        
$formHorizontal['url'] = ['action' => 'add']; //oferta
echo $this->Form->create('Oferta', $formHorizontal);
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => 'Mis Ofertas en curso']) ?>
                <div class="table-responsive m-t-40">
                    <table id="misOfertas" class="initDt table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Proceso</th>
                                <th>Producto / Servicio</th>
                                <th>Cant Unidades</th>
                                <th>Finaliza</th>
                                <th>Mi Oferta Actual</th>
                                <th>Resultado Actual</th>
                                <th>Ofertar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($ofertas)) {
                                $i = 0;

                                foreach ($ofertas as $oferta) {
                                    $precio_unitario = number_format($oferta['Oferta']['mi_mejor_oferta'], 2, ",", ".");
                                    $subtotal = number_format(($oferta['Oferta']['mi_mejor_oferta'] * $oferta['Item']['cantidad']), 2, ",", ".");
                                    ?>
                                    <tr>
                                        <td><?php echo $this->Html->link($oferta['Proceso']['referencia'], "/procesos/view/" . $oferta['Proceso']['id'] . ""); ?></td>
                                        <td><?php echo $oferta['Item']['nombre'] ?></td>
                                        <td><?php echo $oferta['Item']['cantidad'] ?></td>
                                        <td><?php echo $oferta['Proceso']['fecha_fin'] ?></td>
                                        <td>
                                            <?php echo $this->element('pst_moneda', ['params' => ['value' => $precio_unitario, 'c/u']]); ?>
                                            <small class="text-muted"><?php echo $this->element('pst_moneda', ['params' => ['value' => $subtotal, 'subtotal']]) ?></small>
                                        </td>
                                        <td>
                                            <?php
                                            if ($oferta[0]['resultado'] == 1) {
                                                echo $this->element('pst_small', ['params' => ['value' => '¡Ganando!', 'class' => 'label label-success']]);
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $this->element('f_input_moneda', ['params' => ['name' => "Oferta.$i.valor_oferta", 'inTable']]) ?>
                                        </td>
                                        <?php echo $this->Form->input("Oferta.$i.proceso_id", ['type' => 'hidden', 'value' => $oferta['Proceso']['id']]) ?>
                                        <?php echo $this->Form->input("Oferta.$i.item_id", ['type' => 'hidden', 'value' => $oferta['Item']['id']]) ?>
                                    </tr>
                                    <?php
                                    $i++;
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

<div class="row m-t-10">
    <div class="col-sm-12">

        <div class="alert alert-warning">
            <h3 class="text-warning"><i class="fa fa-exclamation-triangle"></i> Importante</h3> 
            <ul>
                <li>Tu ofertas deben ser PRECIO UNITARIO (IVA INCLUIDO).</li>
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
