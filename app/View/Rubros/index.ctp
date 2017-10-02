<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $configView['titulo'] ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="actionBtn">
        <?php
        echo $this->Html->link('Nuevo', array('action' => 'nuevo'), array('class' => 'btn btn-primary btn-sm'));
        echo $this->Html->link('Ver Inactivos', array('action' => 'index', $configView['estado']), array('class' => 'btn btn-primary btn-sm'));
        ?>   
    </div>
    <br/>
    <div class="table-responsive">
        <table id="rubros" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($rubros as $val) {
                    ?>
                    <tr>
                        <td><?php echo $val['Rubro']['orden']; ?></td>
                        <td><?php echo $val['Rubro']['nombre']; ?></td>
                        <td><?php echo $val['Rubro']['descripcion']; ?></td>
                        <td><?php echo $val['Rubro']['str_estado']; ?></td>
                        
                        <td>
                            <?php
                            if (isset($configView['accion']['activar'])) {
                                echo $this->Html->link('', array('action' => 'activar', $val['Rubro']['id']), array('title' => 'Activar', 'class' => $configView['accion']['activar']));
                            }
                            if (isset($configView['accion']['desactivar'])) {
                                echo $this->Html->link('', array('action' => 'desactivar', $val['Rubro']['id']), array('title' => 'Desactivar', 'class' => $configView['accion']['desactivar']));
                            }
                            if (isset($configView['accion']['eliminar'])) {
                                echo $this->Form->postLink('', array('action' => 'eliminar', $val['Rubro']['id']), array('confirm' => 'Estás seguro?', 'title' => 'Eliminar', 'class' => $configView['accion']['eliminar']));
                            }
                            echo $this->Html->link('', array('action' => 'editar', $val['Rubro']['id']), array('title' => 'Editar', 'class' => $configView['accion']['editar']));
                            ?> 
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</div>
<!-- /.container-fluid -->