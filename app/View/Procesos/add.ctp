<?php // debug($condiciones);die;             ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <div class="ribbon-wrapper card">
                    <div class="ribbon ribbon-warning font-normal">Nuevo Proceso de Compra</div>
                    <h2 class="ribbon-content text-justify"> 
                        La fecha de fin que elijas para tu proceso será el día donde 
                        podrás ver los datos del proveedor que resultó ganador del proceso.
                        <br/>
                        El proveedor que resulte ganador es el que menor Costo Total te haya ofrecido.
                        <br/>
                        En el caso de que otro provedor te hubiera mejorado la oferta en 
                        algún Ítem de tu proceso, también te mostraremos sus datos. 
                        <br/>
                        Será tu elección cerrar la negociación completa con el proveedor ganador o, 
                        si éste acepta mantenerte el resto de la oferta, podrás comprar ese Item al 
                        otro proveedor. 
                    </h2>
                    <div>
                        <button id="aceptar" type="button" class="btn btn-info m-t-10">Entendido</button>
                    </div>



                </div>

                <div id="nuevoProceso">
                    <?php 
                    echo $this->Form->create(array('class' => 'form-horizontal')); 
                    echo $this->element('procesos/add_edit');
                    ?>
                   

                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group pull-right">
                                <button id="addItem" type="button" class="btn btn-info">Agregar Item</button>
                            </div>
                        </div>
                    </div>
                    <!--<td><button type="button" class="btn btn-danger removeItem"><i class="fa fa-times"></i> </button></td>-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table" id="items_proceso">
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group pull-right">
                                <?php echo $this->Form->button('Finalizar', ['class' => 'btn btn-info', 'div' => false]); ?>
                            </div>
                        </div>
                    </div>

                    <?php echo $this->Form->end() ?>

                </div>
            </div>
        </div>

    </div>
</div>
