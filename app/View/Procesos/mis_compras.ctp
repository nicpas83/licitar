<?php
echo $this->element('page/title_nav', [
    'levels' => ['Mis Compras'],
    'add' => [
        'action' => 'nuevo',
        'label' => 'Nueva Publicación'
    ],
]);
?>
<div class="row">               
<?php echo $this->element('page/kpi_left_icon', ['title' => 'En Curso', 'value' => $kpi['en_curso'], 'icon' => 'mdi mdi-cart-outline', 'color' => 'warning']) ?>
<?php echo $this->element('page/kpi_left_icon', ['title' => 'Finalizadas', 'value' => $kpi['finalizadas'], 'icon' => 'mdi mdi-checkbox-marked', 'color' => 'success']) ?>
<?php echo $this->element('page/kpi_left_icon', ['title' => 'Preguntas Pendientes', 'value' => $kpi['preguntas'], 'icon' => 'mdi mdi-comment-question-outline', 'color' => 'danger']) ?>
</div>

<div class="row">
    <div class="card col-12">
        <div class="card-block">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#activas" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">En Curso</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#finalizadas" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Finalizadas</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#preguntas" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Preguntas</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="activas" role="tabpanel">
                    <div class="table-responsive mt40">
                        <table class="table table-bordered table-striped initDt" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Titulo de referencia</th>
                                    <th>Detalles</th>
                                    <th>Finaliza</th>
                                    <th>Fecha Entrega</th>
                                    <th>Preferencia Pago</th>
                                    <th>Cant. Items</th>
                                    <th>Cant. Ofertas</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($activas)) {
                                    foreach ($activas as $val) {
                                        ?>
                                        <tr>
                                            <td><?php echo $this->Html->link($val['referencia'], "/procesos/view/" . $val['id']) ?></td>
                                            <td><?php echo $val['detalles'] ?></td>
                                            <td><?php echo $val['fecha_fin'] ?></td>
                                            <td><?php echo $val['fecha_entrega'] ?></td>
                                            <td><?php echo $val['preferencia_pago'] ?></td>
                                            <td><?php echo $val['cant_items'] ?></td>
                                            <td><?php echo $val['cant_ofertas'] ?></td>
                                            <td>
        <?php echo $this->Form->postLink('', ['action' => 'delete', $val['id']], $deleteBtn); ?>
                                        <?php echo $this->Html->link('', ['action' => 'edit', $val['id']], $editBtn); ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "No hay compras activas.";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane" id="finalizadas" role="tabpanel">
                    <div class="table-responsive mt40">
                        <table  class="table table-bordered table-striped initDt" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Titulo de referencia</th>
                                    <th>Items</th>
                                    <th>Finalizó</th>
                                    <th>Cant. Ofertas</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($finalizadas)) {

                                    foreach ($finalizadas as $val) {
                                        ?>
                                        <tr>
                                            <td><?php echo $this->Html->link($val['referencia'], "/procesos/view/" . $val['id']) ?></td>
                                            <td><?php echo $val['total_items'] ?></td>
                                            <td><?php echo $val['fecha_fin'] ?></td>
                                            <td><?php echo $val['total_ofertas'] ?></td>
                                            <td>
                                        <?php echo $this->Html->link('Ver Resultados', array('action' => 'edit', $val['id'])); ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane" id="preguntas" role="tabpanel">
                    <div class="table-responsive mt40">
                        <h4 class="card-title">Preguntas pendientes:</h4>
                        <ul class="search-listing">
                            <?php
                            if ($preguntas) {
                                foreach ($preguntas as $key => $val) {
                                    $pregunta_id = $val['Pregunta']['id'];
                                    $i = $key + 1;
                                    ?>
                                    <li>
                                        <h3 class="text-info"><?php echo $val['Pregunta']['pregunta'] ?></h3>
                                        <div class="form-group">            
                                            <?php echo $this->Form->input('respuesta', ['type' => 'textarea', 'placeholder' => 'Escribí tu respuesta...', 'rows' => '4', 'class' => 'form-control', 'div' => false, 'label' => false]); ?>
                                        </div>
                                        <div class="form-group  pull-right">            
        <?php echo $this->Form->button('Responder', ['id' => "responder-" . $pregunta_id, 'class' => 'btn btn-info pull-left', 'div' => false]); ?>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
