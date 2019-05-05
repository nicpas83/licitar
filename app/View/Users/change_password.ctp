<div class="row">
    <div class="col-12">
        <?php echo $this->Form->create('User') ?>
        <div class="d-flex justify-content-center">
            <div class="form-group col-lg-6 justify-content-center">
                <label>Contraseña actual</label>
                <input type="password" class="form-control" name="password" />
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group col-lg-6 row">
                <label>Contraseña nueva</label>
                <input type="password" class="form-control" name="new_password" />
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group col-lg-6">
                <label>Confirmar contraseña nueva</label>
                <input type="password" class="form-control" name="new_password_confirmation" />
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group pull-right">
                    <?php echo $this->Form->button('Actualizar', ['class' => 'btn btn-info']); ?>

                </div>
            </div>
        </div>
        <?php echo $this->Form->end() ?>
    </div>
</div>






