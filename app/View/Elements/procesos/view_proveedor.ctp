<div class="table-responsive m-t-40">
    <?php
    $formHorizontal['url'] = ['controller' => 'ofertas', 'action' => 'add', $proceso['id']]; //oferta
    echo $this->Form->create('Oferta', $formHorizontal);
    ?>
    <table id="itemsDelProceso" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre - Descripción</th>
                <th>Especificaciones</th>
                <th>Cantidad</th>
                <th>Mejor Oferta</th>
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
                        <td>
                            <p><?php echo $item['nombre']; ?></p>
                            <?php echo $this->element('pst_label', ['params' => ['value' => $item['categoria'], 'class' => 'light-info']]); ?>
                            <?php echo $this->element('pst_label', ['params' => ['value' => $item['subcategoria'], 'class' => 'light-info']]); ?>
                        </td>
                        <td><small><?php echo $item['especificaciones'] ?></small></td>
                        <td>
                            <small><?php echo $item['cantidad'] ?></small>
                            <small><?php echo $item['unidad'] ?></small>
                        </td>
                        <td>
                            <?php
                            if ($precio_unitario) {
                                echo $this->element('pst_moneda', ['params' => ['value' => $precio_unitario]]);
                                if ($item['ganador_id'] == $logUserId) {
                                    echo $this->element('pst_small', ['params' => ['value' => $logUserName, 'icon' => 'fa fa-user-plus text-success']]);
                                }
                            } else {
                                echo "Sin Ofertas";
                            }
                            ?>                                            
                        </td>
                        <td>
                            <?php echo $this->element('f_input_moneda', ['params' => ['name' => "Oferta.$i.valor_oferta", 'inTable']]) ?>
                            <small>auto-oferta</small>
                            <small><?php echo $this->element('ui_slider', ['params' => ['name' => "Oferta.$i.auto_oferta"]]) ?></small>
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
        <div class="form-group pull-right">
            <?php
            if (!isset($proceso['propio'])) {

                echo $this->Form->button('Realizar Oferta', ['id' => 'ofertar', 'class' => 'btn btn-info', 'div' => false]);
            }
            ?>
        </div>
    </div>
</div>
<?php echo $this->Form->end() ?>