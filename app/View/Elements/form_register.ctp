<div class="login-box card">
    <div class="card-block">
        <?php echo $this->Form->create('User', ['class' => 'form-horizontal', 'url' => ['controller' => 'users', 'action' => 'registrar']]) ?>

        <div class="form-group">
            <div class="col-xs-12">
                <div class="controls">
                    <?php echo $this->Form->input('username', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'required', 'data-validation-required-message' => "Campo Obligatorio", 'minlength' => '6', 'data-validation-minlength-message' => 'Al menos 6 caracteres.', 'label' => false, 'div' => false]) ?>
                    <p class="help-block"></p>
                </div>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <?php echo $this->Form->input('email', ['type' => 'email', 'class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required', 'label' => false, 'div' => false]) ?>
            </div>
        </div>
        <div class="form-group ">
            <div class="col-xs-12">
                <?php echo $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'placeholder' => 'Contraseña', 'required' => 'required', 'label' => false, 'div' => false]) ?>
            </div>
        </div>


        <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
                <?php echo $this->Form->button('Registrar', ['type' => 'submit', 'class' => 'btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light', 'div' => false]); ?>
                <?php echo $this->Form->end(); ?>
                <!--<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>-->
            </div>
        </div>
        <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
                <p>Ya estás registrado? <a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'login']) ?>" class="text-info m-l-5"><b>Inicia Sesión</b></a></p>
            </div>
        </div>

    </div>
</div>