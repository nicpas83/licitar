<?php
// debug($user);die;                  
$title = "Configuración de Alertas E-Mail";
$subtitle = "";
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

                <h3>Vendedor</h3>
                <p>Selecciona una Categoría y luego tilda las subcategorías de tu interés.</p>
                <div class="row">
                    <?php
                    echo $this->element('f_select2', ['params' => ['name' => 'tmp_categoria', 'label' => 'Categoría', 'lg' => '3', 'options' => $categorias]]);
                    echo $this->element('f_checkbox', ['params' => ['name' => 'tmp_subcategorias', 'label' => 'Subcategorías', 'value' => ['Todas' => 'Todas']]]);
                    echo $this->Form->button('Confirmar', ['type' => 'button', 'class' => 'btn btn-info ml30']);
                    ?>

                </div>
                <div class="row">
                    <div class="table-responsive m-t-40">
                        <table id="alertasCategorias" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Categorias</th>
                                    <th>Subcategorias</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div id="alertasComprador">

                <h3>Comprador </h3>
                <div class="row">

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group pull-right">
                        <?php echo $this->Form->button('Guardar', ['class' => 'btn btn-info']); ?>
                    </div>
                </div>
            </div>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>
<!-- /.row -->
