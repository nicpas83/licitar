<?php
// debug($user);die;
$title = "Datos de Mi Cuenta";
$subtitle = "";
/*
echo "<pre>";
print_r($user);
echo "</pre>";
die();
*/
echo $this->Html->css('users/mi_cuenta');
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card card-block">
                <?php echo $this->element('ribbon_title', ['title' => $title, 'subtitle' => $subtitle]); ?>
                <?php echo $this->Form->create($formHorizontal); ?>
                <input type="hidden" id="aux_localidad" value="<?= $user['User']['localidad_id'] ?>" />

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="datos-personales-tab" data-toggle="tab" href="#datos-personales" role="tab" aria-controls="datos-personales" aria-selected="false">Datos Personales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="datos-empresa-tab" data-toggle="tab" href="#datos-empresa" role="tab" aria-controls="contact" aria-selected="false">Datos de la empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ubicacion-tab" data-toggle="tab" href="#ubicacion" role="tab" aria-controls="ubicacion" aria-selected="false">Ubicación</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <h3>General</h3>
                        <div id="activas" class="row">
                            <?php echo $this->element('f_select', ['params' => ['name' => 'tipo_usuario', 'label' => 'Tipo de Usuario', 'lg' => '4', 'value' => $user['User']['tipo_usuario'], 'options' => ['' => '', 'Particular' => 'Particular', 'Empresa' => 'Empresa']]]) ?>
                            <?php echo $this->element('f_input', ['params' => ['name' => 'username', 'label' => 'Nombre de Usuario', 'lg' => '4', 'value' => $user['User']['username']]]) ?>
                            <?php echo $this->element('f_input', ['params' => ['name' => 'email', 'label' => 'E-Mail', 'lg' => '4', 'type' => 'email', 'value' => $user['User']['email']]]) ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="datos-personales" role="tabpanel" aria-labelledby="datos-personales-tab">
                        <div id="datosParticular">
                            <h3>Datos Personales</h3>
                            <div class="row">
                                <?php echo $this->element('f_input', ['params' => ['name' => 'part_nombre', 'label' => 'Nombre', 'lg' => '3', 'value' => $user['User']['part_nombre']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'part_apellido', 'label' => 'Apellido', 'lg' => '3', 'value' => $user['User']['part_apellido']]]) ?>
                                <?php echo $this->element('f_number', ['params' => ['name' => 'part_nro_doc', 'label' => 'Nro Documento', 'lg' => '3', 'value' => $user['User']['part_nro_doc']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'part_telefono', 'label' => 'Teléfono de Contacto', 'lg' => '3', 'value' => $user['User']['part_telefono']]]) ?>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="datos-empresa" role="tabpanel" aria-labelledby="datos-empresa-tab">
                        <div id="datosEmpresa">
                            <h3>Datos de la Empresa</h3>
                            <div class="row">
                                <?php echo $this->element('f_input', ['params' => ['name' => 'empresa_razon_social', 'label' => 'Razón Social', 'lg' => '3', 'value' => $user['User']['empresa_razon_social']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'empresa_nombre', 'label' => 'Nombre Fantasía', 'lg' => '3', 'placeholder' => '(opcional...)', 'value' => $user['User']['empresa_nombre']]]) ?>
                                <?php echo $this->element('f_number', ['params' => ['name' => 'empresa_cuit', 'label' => 'CUIT', 'lg' => '3', 'value' => $user['User']['empresa_cuit']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'empresa_telefono', 'label' => 'Teléfono de Contacto', 'lg' => '3', 'value' => $user['User']['empresa_telefono']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'empresa_descripcion', 'label' => 'Actividad de la Empresa', 'lg' => '6', 'value' => $user['User']['empresa_descripcion']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'empresa_cargo', 'label' => 'Cargo que ocupás?', 'lg' => '3', 'value' => $user['User']['empresa_cargo']]]) ?>
                                <?php echo $this->element('f_select', ['params' => ['name' => 'empresa_tamanio', 'label' => 'Cantidad Personal?', 'lg' => '3', 'value' => $user['User']['empresa_tamanio'], 'options' => ['' => '', 'hasta 5' => 'hasta 5', 'entre 5 y 10' => 'entre 5 y 10', 'entre 10 y 20' => 'entre 10 y 20', 'más de 20' => 'más de 20']]]) ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ubicacion" role="tabpanel" aria-labelledby="ubicacion-tab">
                        <div id="datosUbicacion" class="col-lg-6 pull-left">
                            <h3>Dirección</h3>
                            <div class="row">
                                <?php echo $this->element('f_input', ['params' => ['name' => 'calle', 'label' => 'Calle', 'lg' => '6', 'value' => $user['User']['calle']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'altura', 'label' => 'Altura', 'lg' => '2', 'value' => $user['User']['altura']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'piso', 'label' => 'Piso', 'lg' => '2', 'value' => $user['User']['piso']]]) ?>
                                <?php echo $this->element('f_input', ['params' => ['name' => 'codigo_postal', 'label' => 'CP', 'lg' => '2', 'value' => $user['User']['codigo_postal']]]) ?>
                                <?php echo $this->element('f_provincia', ['params' => ['name' => 'provincia_id', 'label' => 'Provincia', 'lg' => '6','value' =>  $user['User']['provincia_id'] ]]) ?>
                                <?php echo $this->element('f_localidad', ['params' => ['name' => 'localidad_id', 'label' => 'Localidad', 'lg' => '6','value' =>  $user['User']['localidad_id']]]) ?>
                            </div>
                        </div>
                        <div id="datosUbicacion" class="col-lg-6 pull-left">
                            <h3>Dirección de Entrega</h3>
                            <div class="row">
                                <?php echo $this->element('f_text', ['params' => ['name' => 'direccion_entrega', 'label' => 'Se mostrará para tus compras', 'value' => $user['User']['direccion_entrega']]]) ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group pull-right">
                            <?php echo $this->Form->button('Actualizar', ['class' => 'btn btn-info']); ?>

                        </div>
                    </div>
                </div>
                <?php echo $this->Form->end() ?>

            </div>
        </div>
    </div>
</div>
<!-- /.row -->