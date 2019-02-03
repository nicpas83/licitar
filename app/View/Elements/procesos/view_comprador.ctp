<div class="table-responsive m-t-40">
    <table class="display nowrap table table-hover table-striped table-bordered initDt" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Producto / Servicio</th>
                <th>Categogía</th>
                <th>Subcategogía</th>
                <th>Especificaciones</th>
                <th>Cantidad</th>
                <th>Mejor Oferta</th>
                <th>Subtotal</th>
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
                    }
                    ?>
                    <tr>
                        <td>><?php echo $item['nombre'] ?></td>
                        <td><small><?php echo $item['categoria'] ?></small></td>
                        <td><small><?php echo $item['subcategoria'] ?></small></td>
                        <td><small><?php echo $item['especificaciones'] ?></small></td>
                        <td><small><?php echo $item['cantidad'] . " " . $item['unidad'] ?></small></td>
                        <td><?php echo $item['mejor_oferta'] ?></td>
                    </tr>
                    <?php
                    $i++;
                }
            }
            ?>
        </tbody>
    </table>
</div>
