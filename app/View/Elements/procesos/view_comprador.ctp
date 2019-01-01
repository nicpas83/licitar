<div class="table-responsive m-t-40">
    <table id="itemsDelProceso" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre - Descripción</th>
                <th>Especificaciones</th>
                <th>Cantidad</th>
                <th>Mejor Oferta Recibida</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($items)) {
                $i = 0;
                foreach ($items as $item) {
                    if (isset($item['mejor_oferta'])) {
                        //defino si hay ofertas
                        $precio_unitario = $item['mejor_oferta'] > 0 ? number_format($item['mejor_oferta'], 2, ",", ".") : false;
                        $subtotal = $item['mejor_oferta'] > 0 ? number_format(($item['mejor_oferta'] * $item['cantidad']), 2, ",", ".") : false;
                        $fecha_oferta = isset($item['fecha_oferta']) ? $item['fecha_oferta'] : false;
                    }
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
                            <?php if ($precio_unitario) { ?>
                                <small class="text-info">El <?php echo date('d/n', strtotime($fecha_oferta)) ?>, a las <?php echo date('H:i', strtotime($fecha_oferta)) ?></small>
                                <?php echo $this->element('pst_moneda', ['params' => ['value' => $precio_unitario, 'c/u']]); ?>
                                <small class="text-muted"><?php echo $this->element('pst_moneda', ['params' => ['value' => $subtotal, 'subtotal']]) ?></small>
                                <?php
                            } else {
                                echo "Sin Ofertas";
                            }
                            ?>                                            
                        </td>

                    </tr>
                    <?php
                    $i++;
                }
            }
            ?>
        </tbody>
    </table>
</div>
