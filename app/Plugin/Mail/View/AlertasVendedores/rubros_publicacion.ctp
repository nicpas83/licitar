<?php
//debug($alertas_vendedor);
//die;
$title = "Configuración de Alertas E-Mail";
$subtitle = "Recibirás un e-mail cuando se publiquen compras en los rubros que elegiste.";
$options = [
    'type' => 'checkbox',
    'class' => 'form-control check',
    'data-checkbox' => 'icheckbox_flat-yellow',
    'default' => '',
];
?>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
            <?php echo $this->element('ribbon_title', ['title' => $title, 'subtitle' => $subtitle]); ?>
            <?php echo $this->Form->create($formHorizontal); ?>

            <div id="alertasVendedor">
                <h3></h3>
                <!--<p>Selecciona una Categoría, tilda las subcategorías de tu interés y luego hacé click en "Agregar".</p>-->
                <div class="row">
                    <?php echo $this->element('f_select2', ['params' => ['name' => 'tmp_categoria', 'label' => 'Categoría', 'lg' => '3', 'options' => $categorias]]); ?>
                    <div class="col-lg-1">
                        <button id="addCatAlert" type="button" class="btn btn-info pull-right mt20">Agregar</button>
                    </div>
                </div>
                <div id="dinamic-subcat" class="check-horizontal">
                    <!-- jquery ajax -->
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="table-responsive m-t-40">
                        <table id="TableAlertaVendedor" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Categorias</th>
                                    <th>Subcategorias</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($alertas_vendedor) {
                                    foreach ($alertas_vendedor as $key => $val) {
                                        ?>
                                        <tr>
                                            <td><?php echo $val['categoria']; ?></td>
                                            <td><?php echo $val['subcategorias']; ?></td>
                                            <td class="acciones"><?php echo $this->Form->input('pk', ['type' => 'hidden', 'value' => $val['alerta_id']]); ?></td>
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
</div>
<!-- /.row -->
