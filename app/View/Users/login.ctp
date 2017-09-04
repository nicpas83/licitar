<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Bienvenido</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-6">
        <?php
        echo $this->Session->flash('auth');

        echo $this->Form->create('User', $horizontal);
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->end($aceptar);
        
        ?>
    </div>
</div>
