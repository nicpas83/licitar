<div class="login-box card">
    <div class="card-block">
        <?php echo $this->Form->create('User', ['class' => 'form-horizontal form-material']) ?>
            <h3 class="box-title m-b-20">Iniciar Sesión</h3>
            <div class="form-group ">
                <div class="col-xs-12">
                    <?php echo $this->Form->input('username', ['type' => 'text', 'class' => 'form-control', 'placeholder' => 'nombre de usuario', 'label' => false, 'div' => false, 'required' => 'required']) ?>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <?php echo $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'placeholder' => 'contraseña', 'label' => false, 'div' => false, 'required' => 'required']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> Mantener sesión </label>
                        </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Recordar?</a> </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <?php echo $this->Form->button('Entrar!', ['type' => 'submit', 'class' => 'btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light', 'div' => false]); ?>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                        <div class="social">
                            <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                            <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>no te registraste? <a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'registar']) ?>" class="text-info m-l-5"><b>Crear Cuenta Gratis</b></a></p>
                    </div>
                </div>
        </form>
        <form class="form-horizontal" id="recoverform" action="index.html">
            <div class="form-group ">
                <div class="col-xs-12">
                    <h3>Recover Password</h3>
                    <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" placeholder="Email"> </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
