<div class="table-responsive m-t-40">
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
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($items)) {
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
                        <td><?php echo $subtotal ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>
