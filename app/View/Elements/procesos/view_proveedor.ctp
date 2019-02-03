<div class="table-responsive m-t-40">
    <?php
    $formHorizontal['url'] = ['controller' => 'ofertas', 'action' => 'add']; //oferta
    echo $this->Form->create('Oferta', $formHorizontal);
    ?>
    <table class="display nowrap table table-hover table-striped table-bordered initDt" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Producto / Servicio</th>
                <th>Categogía</th>
                <th>Subcategogía</th>
                <th>Especificaciones</th>
                <th>Cantidad</th>
                <th>Unidad</th>
                <th>Mejor Oferta</th>
                <th>Tu oferta</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($items)) {
                $i = 0;
                foreach ($items as $item) {
                    $mejor_oferta = $item['mejor_oferta'] > 0 ? number_format($item['mejor_oferta'], 2, ",", ".") : $item['mejor_oferta'];
                    $subtotal = $item['mejor_oferta'] > 0 ? number_format(($item['cantidad'] * $item['mejor_oferta']), 2, ",", ".") : 0;
                    ?>
                    <tr>
                        <td><?php echo $item['nombre'] ?></td>
                        <td><small><?php echo $item['categoria'] ?></small></td>
                        <td><small><?php echo $item['subcategoria'] ?></small></td>
                        <td><small><?php echo $item['especificaciones'] ?></small></td>
                        <td><small><?php echo $item['cantidad'] ?></small></td>
                        <td><small><?php echo $item['unidad'] ?></small></td>
                        <td><?php echo $mejor_oferta ?></td>
                        <td>
                            <?php echo $this->element('f_input_moneda', ['params' => ['name' => "Oferta.$i.valor_oferta", 'inTable']]) ?>
                            <!--<small>auto-oferta</small>-->
                            <!--<small><?php // echo $this->element('ui_slider', ['params' => ['name' => "Oferta.$i.auto_oferta"]])  ?></small>-->
                        </td>
<!--                        <td>
                            <?php // echo $this->element('f_input', ['params' => ['name' => "Oferta.$i.observaciones", 'inTable']]) ?>
                        </td>-->
                        <?php echo $this->Form->input("Oferta.$i.item_id", ['type' => 'hidden', 'value' => $item['id']]) ?>
                        <?php echo $this->Form->input("Oferta.$i.proceso_id", ['type' => 'hidden', 'value' => $proceso['id']]) ?>
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
        <div class="form-group pull-right">
            <?php
            if ($proceso['propio'] == 'No') {
                echo $this->Form->button('Realizar Oferta', ['id' => 'ofertar', 'class' => 'btn btn-info', 'div' => false]);
            }
            ?>
        </div>
    </div>
</div>
<?php echo $this->Form->end(); ?>