<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Configuración de Mi Cuenta</h3>    
    </div>
</div>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card card-block">

            <?php echo $this->Form->create(array('class' => 'form-horizontal')); ?>
            <h3>Tipo de Cuenta</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('Usar cuenta cómo', ['name' => 'rol', 'type' => 'select', 'options' => ['1' => 'Comprador', '2' => 'Proveedor', '3' => 'Ambos'], 'class' => 'form-control', 'div' => false]); ?>                          
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <?php echo $this->Form->input('Seleccionar Categorías / Categorias de interés', ['name' => 'categoria', 'type' => 'select', 'options' => $categorias, 'class' => 'form-control select2 select2-multiple', 'multiple' => 'multiple', 'div' => false]); ?>                    
                    </div>
                </div>

            </div>
            <h3>Datos Personales</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-email">Apellido</label>
                        <input name="example-email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="example-email">Teléfono</label>
                        <input name="example-email" class="form-control">
                    </div>
                </div>
            </div>

            <h3>Información Comercial</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Razón Social</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Dirección Comercial</label>
                        <input type="text" class="form-control" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-email">Cuit</label>
                        <input name="example-email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="example-email">Teléfono</label>
                        <input name="example-email" class="form-control">
                    </div>
                </div>
            </div>
            <h3>Dirección de Entrega</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Dirección:</label>
                        <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label>Horarios</label>
                        <input type="text" class="form-control" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-email">Persona a Cargo</label>
                        <input name="example-email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="example-email">Teléfono de Contacto</label>
                        <input name="example-email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group pull-right">
                        <button type="button" class="btn btn-info">Actualizar</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
