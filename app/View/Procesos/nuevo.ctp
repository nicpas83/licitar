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
                <h4 class="card-title">Completá el formulario para describir tu necesidad de compra.</h4>
                <h6 class="card-subtitle">... algún subtitulo para entender mejor?</h6>
                <form action="#" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6 id="steps-uid-0-h-0" tabindex="-1" class="title current">Datos Generales</h6>
                    <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false" style="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre del proceso <span class="danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Ej: Ropa de trabajo, Sillas de oficina" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Rubro <span class="danger">*</span></label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect">

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Visibilidad <span class="danger">*</span></label>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de Subasta <span class="danger">*</span></label>
                                    <select class="custom-select col-12" id="inlineFormCustomSelect">
                                        <option selected></option>
                                        <option value="1">Compulsa de precios</option>
                                        <option value="2">Sobre cerrado</option>
                                    </select>
                                    <div class="alert alert-warning">
                                        <b>Compulsa de precios</b>: los proveedores que participan en el proceso pueden ver las demás oferas y competir.
                                        <b>Sobre cerrado</b>: únicamente el comprador  puede ver los precios ofrecidos, y habrá 1 ganador. 													
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Fecha de Inicio del proceso <span class="danger">*</span></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose" >
                                        <span class="input-group-addon"><i class="icon-calender"></i></span> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Recibir ofertas hasta las: <span class="danger">*</span></label>
                                    <div class="input-group clockpicker " data-placement="left" data-align="top" data-autoclose="true">
                                        <input type="text" class="form-control"> 
                                        <span class="input-group-addon"> <span class="fa fa-clock-o"></span> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <!-- Step 2 -->
                    <h6 id="steps-uid-0-h-1" tabindex="-1" class="title">Productos o Servicios</h6>
                    <section id="steps-uid-0-p-1" role="tabpanel" aria-labelledby="steps-uid-0-h-1" class="body" aria-hidden="true" style="display: none;">

                    </section>
                    <!-- Step 3 -->
                    <h6 id="steps-uid-0-h-2" tabindex="-1" class="title">Adicionales</h6>
                    <section id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body" aria-hidden="true" style="display: none;">

                    </section>

            </div>
            
            </form>





            <form class="form-horizontal m-t-40">

                <div class="col-sm-6 pull-left">

                </div>
                <!--col 1/2--> 

                <div class="col-sm-6 pull-left">

                </div>
                <!-- col 2/2 -->

                <div class="clearfix"></div>

            </form>


        </div>
    </div>
</div>
<!-- /.row -->