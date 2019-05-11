<?php
echo $this->element('page/title_nav', [
    'levels' => ['Mis Compras' => ''],
    'actions' => ['Nueva Publicación' => 'nuevo']
]);
//debug($actions);
//die;
?>
<div class="row">               
    <?php echo $this->element('page/kpi_left_icon', ['title' => 'Activas', 'value' => $kpi['activas'], 'icon' => 'mdi mdi-cart-outline', 'color' => 'warning']) ?>
    <?php echo $this->element('page/kpi_left_icon', ['title' => 'Finalizadas', 'value' => $kpi['finalizadas'], 'icon' => 'mdi mdi-checkbox-marked', 'color' => 'success']) ?>
    <?php echo $this->element('page/kpi_left_icon', ['title' => 'Preguntas Pendientes', 'value' => $kpi['preguntas'], 'icon' => 'mdi mdi-comment-question-outline', 'color' => 'danger']) ?>
</div>

<div class="row">
    <div class="card col-12">
        <div class="card-block">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs customtab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#activas" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Activas</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#finalizadas" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Finalizadas</span></a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#preguntas" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Preguntas</span></a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="activas" role="tabpanel">
                    <?php echo $this->element('procesos/listado_procesos', ['publicaciones' => $activas, 'actions' => ['finalizar', 'edit']]); ?>
                </div>

                <div class="tab-pane" id="finalizadas" role="tabpanel">
                    <?php echo $this->element('procesos/listado_procesos', ['publicaciones' => $finalizadas, 'actions' => ['resultados']]); ?>
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
