<?php // debug($user);die;                  ?>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
            <?php echo $this->element('ribbon_title', ['title' => 'Datos de Mi Cuenta']); ?>
            <?php echo $this->Form->create($formHorizontal); ?>
            <h3>General</h3>
            <div class="row">
                <?php echo $this->element('f_select', ['params' => ['name' => 'tipo_usuario', 'label' => 'Tipo de Usuario', 'lg' => '4', 'value' => $user['User']['tipo_usuario'], 'options' => ['' => '', 'Particular' => 'Particular', 'Empresa' => 'Empresa']]]) ?>
                <?php echo $this->element('f_input', ['params' => ['name' => 'username', 'label' => 'Nombre de Usuario', 'lg' => '4', 'value' => $user['User']['username']]]) ?>
                <?php echo $this->element('f_input', ['params' => ['name' => 'email', 'label' => 'E-Mail', 'lg' => '4', 'type' => 'email', 'value' => $user['User']['email']]]) ?>
            </div>
            <div id="datosParticular">
                <h3>Datos Personales</h3>
                <div class="row">
                    <?php echo $this->element('f_input', ['params' => ['name' => 'part_nombre', 'label' => 'Nombre', 'lg' => '3', 'value' => $user['User']['part_nombre']]]) ?>
                    <?php echo $this->element('f_input', ['params' => ['name' => 'part_apellido', 'label' => 'Apellido', 'lg' => '3', 'value' => $user['User']['part_apellido']]]) ?>
                    <?php echo $this->element('f_number', ['params' => ['name' => 'part_nro_doc', 'label' => 'Nro Documento', 'lg' => '3', 'value' => $user['User']['part_nro_doc']]]) ?>
                    <?php echo $this->element('f_input', ['params' => ['name' => 'part_telefono', 'label' => 'Teléfono de Contacto', 'lg' => '3', 'value' => $user['User']['part_telefono']]]) ?>

                </div>                
            </div>

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
            <div id="datosUbicacion" class="col-lg-6 pull-left">
                <h3>Dirección Postal</h3>
                <div class="row">
                    <?php echo $this->element('f_input', ['params' => ['name' => 'calle', 'label' => 'Calle', 'lg' => '6', 'value' => $user['User']['empresa_cargo']]]) ?>
                    <?php echo $this->element('f_input', ['params' => ['name' => 'altura', 'label' => 'Altura', 'lg' => '2', 'value' => $user['User']['empresa_cargo']]]) ?>
                    <?php echo $this->element('f_input', ['params' => ['name' => 'piso', 'label' => 'Piso', 'lg' => '2', 'value' => $user['User']['empresa_cargo']]]) ?>
                    <?php echo $this->element('f_input', ['params' => ['name' => 'codigo_postal', 'label' => 'CP', 'lg' => '2', 'value' => $user['User']['empresa_cargo']]]) ?>
                    <?php echo $this->element('f_provincia', ['params' => ['name' => 'provincia_id', 'label' => 'Provincia', 'lg' => '6']]) ?>
                    <?php echo $this->element('f_localidad', ['params' => ['name' => 'localidad_id', 'label' => 'Localidad', 'lg' => '6']]) ?>
                </div>
            </div>
            <div id="datosUbicacion" class="col-lg-6 pull-left">
                <h3>Dirección de Entrega</h3>
                <div class="row">
                    <?php echo $this->element('f_text', ['params' => ['name' => 'direccion_entrega', 'label' => 'Tal como la verá el proveedor', 'value' => $user['User']['empresa_cargo']]]) ?>

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
<!-- /.row -->
