<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Preguntar al comprador:</h4>
                <?php echo $this->Form->create(array('url' => ['action' => 'preguntar', $proceso['id']], 'class' => 'form-horizontal')); ?>
                <div class="form-group">            
                    <?php echo $this->Form->input('pregunta', ['type' => 'textarea', 'placeholder' => 'Escribí tu pregunta...', 'rows' => '4', 'class' => 'form-control', 'div' => false, 'label' => false]); ?>
                </div>
                <div class="form-group  pull-right">            
                    <?php echo $this->Form->button('Preguntar', ['class' => 'btn btn-info pull-left', 'div' => false]); ?>
                </div>
                <div class="clearfix"></div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning">Importante</div>
                    <p class="ribbon-content">
                        Recordá que no se permiten los datos de contacto explícitos ni las insinuaciones. 
                        Respetar estas normas nos permite un sistema transparente y con igualdad de condiciones para todos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>