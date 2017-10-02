<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Categoría</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <br/> 
    <div class="row">
        <div class="col-lg-6">
            <?php            
            echo $this->Form->create($horizontal);

            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion', ['type' => 'textarea', 'rows' => 3,]);
            
            echo $this->Form->input('estado', ['type' => 'hidden']);
            
            echo $this->Form->end($guardar);

            ?>
        </div>
        <!-- /.col-lg-12 -->
        
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->