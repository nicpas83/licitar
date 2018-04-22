<div class="table-responsive m-t-40">
    <?php
    $formHorizontal['url'] = ['action' => 'add', $proceso['id']]; //oferta
    echo $this->Form->create('Oferta', $formHorizontal); 
    ?>
    <table id="itemsDelProceso" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre - Descripción</th>
                <th>Especificaciones</th>
                <th>Cantidad</th>
                <th>Unidad</th>
                <th>Mejor Oferta Recibida</th>
                <th>Tu oferta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($items)) {
                $i = 0;
                foreach ($items as $item) {
                    //defino si hay ofertas
                    $precio_unitario = $item['mejor_oferta'] > 0 ? number_format($item['mejor_oferta'], 2, ",", ".") : false;
                    $subtotal = $item['mejor_oferta'] > 0 ? number_format(($item['mejor_oferta'] * $item['cantidad']), 2, ",", ".") : false;
                    ?>
                    <tr>
                        <td><?php echo $item['nombre'] ?></td>
                        <td><?php echo $item['especificaciones'] ?></td>
                        <td><?php echo $item['cantidad'] ?></td>
                        <td><?php echo $item['unidad'] ?></td>
                        <td>
                            <?php if ($precio_unitario) { ?>
                                <small class="text-info">El <?php echo date('d/n', strtotime($item['fecha_oferta'])) ?>, a las <?php echo date('H:i', strtotime($item['fecha_oferta'])) ?></small>
                                <?php echo $this->element('pst_moneda', ['params' => ['value' => $precio_unitario, 'c/u']]); ?>
                                <small class="text-muted"><?php echo $this->element('pst_moneda', ['params' => ['value' => $subtotal, 'subtotal']]) ?></small>
                            <?php
                            } else {
                                echo "Sin Ofertas";
                            }
                            ?>                                            
                        </td>
                        <td>
                        <?php echo $this->element('f_input_moneda', ['params' => ['name' => "Oferta.$i.valor_oferta", 'inTable']]) ?>
                        </td>

                    <?php echo $this->Form->input("Oferta.$i.item_id", ['type' => 'hidden', 'value' => $item['id']]) ?>
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