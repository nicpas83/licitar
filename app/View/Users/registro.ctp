<div class="login-box card">
    <div class="card-block">
        <?php echo $this->Form->create('User', ['class' => 'form-horizontal form-material']) ?>

        <h3 class="box-title m-b-20">Creá tu cuenta gratis!</h3>
        <div class="form-group">
            <div class="col-xs-12">
                <?php echo $this->Form->input('username', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'required' => 'required', 'label' => false, 'div' => false]) ?>
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
        </form>

    </div>
</div>


