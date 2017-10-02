<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Nuevo Proceso de Compra</h3>    
    </div>
</div>
<!-- .row -->
<!-- Validation wizard -->
<div class="row" id="validation">
    <div class="col-12">
        <div class="card wizard-content">
            <div class="card-block">
                <h2 class="card-title text-center">¡Comprá en 3 simples pasos!</h2>

                <form action="#" class="form-horizontal validation-wizard wizard-circle" style="font-size: 14px;">
                    <!-- Step 1 -->
                    <h6 id="steps-uid-0-h-0" tabindex="-1" class="title current">Datos Generales</h6>
                    <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false" style="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Qué Necesitás Comprar? <span class="danger">*</span></label>
                                    <input type="text" class="form-control" value="">
                                    <div class="alert alert-warning clearfix">
                                        Este nombre será el título de tu publicación. Por ejemplo: "Ropa de trabajo", "Cloruro de Calcio al 97%", "etc ??",,
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>A qué Rubro corresponde?<span class="danger">*</span></label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect">

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cuándo querés que se realice la Subasta inversa? <span class="danger"></span></label>
                                    <div class="col-md-6 pull-left">
                                        <div class="input-group">
                                            <input id="dia_subasta" type="text" class="form-control datepicker" >
                                            <span class="input-group-addon"><i class="icon-calender"></i></span> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 pull-left">
                                        <div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="10:00"> 
                                            <span class="input-group-addon"> <span class="fa fa-clock-o"></span> </span>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="alert alert-warning clearfix">
                                        La subasta empezará el día y horario que tú dispongas y los proveedores tendrán un lapso de 1 hora para competir. Recuerda que puedes cancelar la compra solamente antes de que empiece la subasta. 
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Visibilidad? <span class="danger">*</span></label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect">
                                        <option selected></option>
                                        <option value="1">Pública</option>
                                        <option value="2">Privada</option>
                                    </select>
                                    <div class="alert alert-warning">
                                        <b>Pública</b>: Aparecerá en el buscador. Puede, igualmente, enviar invitaciones a sus proveedores.
                                        <b>Privada</b>: NO aparecerá en el buscador. Invitar es la única manera de que los proveedores puedan participar.													
                                    </div>
                                </div>
                            </div>


                        </div>

                    </section>

                    <!-- Step 2 -->
                    <h6 id="steps-uid-0-h-1" tabindex="-1" class="title">Productos o Servicios</h6>
                    <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">
                        <div class="row" id="cabecera">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label>Producto / Servicio<span class="danger"></span></label>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Cantidad<span class="danger"></span></label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Unidad<span class="danger"></span></label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label>Fecha de entrega<span class="danger"></span></label>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label>Eliminar</label>
                                </div>
                            </div>
                        </div>

                        <!-- filas producto/servicio  -->
                        <div class="row" id="rowItem-1">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" value="">
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="" value="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control datepicker" placeholder="" >
                                        <span class="input-group-addon"><i class="icon-calender"></i></span> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <button type="button" class="btn btn-danger removeItem"><i class="fa fa-times"></i> </button>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <button id="addItem" type="button" class="btn btn-info">Agregar Otro</button>
                                </div>
                            </div>
                        </div>

                    </section>
                    <!-- Step 3 -->
                    <h6 id="steps-uid-0-h-2" tabindex="-1" class="title">Adicionales</h6>
                    <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Breve Descripción o Detalles a considerar para la oferta.</label>
                                    <textarea class="form-control" rows="7" placeholder="Ej: condiciones de pago y entrega, etc."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Requisitos para presentar una oferta.  (*) opcional</label>
                                    <textarea class="form-control" rows="5" placeholder="Ejemplo: condiciones de entrega, certificados especiales, etc."></textarea>
                                </div>
                            </div>
                        </div>
                    </section>

            </div>

            </form>
            <div class="col-sm-12">
                <div class="form-group pull-right">
                    <button type="button" class="btn btn-info">Guardar Borrador</button>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.row -->

<div class="row">

</div>
