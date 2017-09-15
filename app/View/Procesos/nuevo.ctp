<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Nuevo Proceso de Compra</h3>    
    </div>
</div>
<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="card card-block">
            <h4 class="card-title">Complete el formulario para iniciar el proceso.</h4>

            <form class="form-horizontal m-t-40">

                <div class="col-sm-6 pull-left">
                    <div class="form-group">
                        <label>Nombre del proceso</label>
                        <input type="text" class="form-control" placeholder="Ej: Ropa de trabajo, Sillas de oficina" value="">
                    </div>
                    <div class="form-group">
                        <label>Breve Descripción o Detalles a considerar para la oferta.</label>
                        <textarea class="form-control" rows="7" placeholder="Ej: condiciones de pago y entrega, etc."></textarea>
                    </div>

                    <div class="form-group">
                        <label>Visibilidad </label>
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
                <!--col 1/2--> 

                <div class="col-sm-6 pull-left">
                    <div class="form-group">
                        <label>Rubro </label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect">
                            <option value="-2">Seleccionar</option>
                            <option value="80010">AGRIC,GANADERIA,CAZA,SILVICULT</option>
                            <option value="80001">ALQUILER</option>
                            <option value="80007">SEGUROS</option>
                            <option value="79979">CARPINTERIA</option>
                            <option value="79981">CERRAJERIA</option>
                            <option value="79996">CINE/TELVIS./RADIO/FOTOGRAFIA</option>
                            <option value="79977">COMBUSTIBLES Y LUBRICANTES</option>
                            <option value="80019">CONSTRUCCION</option>
                            <option value="79980">ELECTRICIDAD Y TELEFONIA</option>
                            <option value="79973">ELEMENTOS DE LIMPIEZA</option>
                            <option value="79993">EQUIPOS DE OFICINA Y MUEBLES</option>
                            <option value="80003">EQUIPOS DE SEGURIDAD </option>
                            <option value="79992">EQUIPOS</option>
                            <option value="79978">FERRETERIA</option>
                            <option value="79994">GASES INDUSTRIALES</option>
                            <option value="79995">HERRAMIENTAS</option>
                            <option value="79990">HERRERIA</option>
                            <option value="79997">IMPRENTA Y EDITORIALES</option>
                            <option value="79974">INDUMENT TEXTIL Y CONFECCIONES</option>
                            <option value="79983">INFORMATICA</option>
                            <option value="79975">LIBRERIA,PAP. Y UTILES OFICINA</option>
                            <option value="79986">MATERIALES DE CONSTRUCCION</option>
                            <option value="80015">METALES</option>
                            <option value="80017">METALURGIA</option>
                            <option value="79987">PINTURAS</option>
                            <option value="80002">PROD. MEDICO/FARMACEUTICOS/LAB</option>
                            <option value="79991">PRODUCTOS VETERINARIOS</option>
                            <option value="80014">QUIMICOS</option>
                            <option value="79984">REPUESTOS</option>
                            <option value="79982">SANITARIOS, PLOMERIA Y GAS</option>
                            <option value="80005">SERV. PROFESIONAL Y COMERCIAL</option>
                            <option value="79998">SERVICIOS GENERALES</option>
                            <option value="80008">TRANSPORTE Y DEPOSITO</option>
                            <option value="79985">VIDRIERIA</option>
                            <option value="79999">SERVICIO DE VIGILANCIA Y SEGURIDAD</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Tipo de Subasta </label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect">
                            <option selected></option>
                            <option value="1">Ofertas visibles</option>
                            <option value="2">Sobre cerrado</option>
                        </select>
                        <div class="alert alert-warning">
                            <b>Compulsa de precios</b>: los proveedores que participan en el proceso pueden ver las demás oferas y competir.
                            <b>Sobre cerrado</b>: únicamente el comprador  puede ver los precios ofrecidos, y habrá 1 ganador. 													
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Fecha de Inicio del proceso </label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="datepicker-autoclose" >
                            <span class="input-group-addon"><i class="icon-calender"></i></span> 
                        </div>
                    </div>

                </div>
                <!-- col 2/2 -->

                <div class="form-group">
                    <label>Requisitos para presentar una oferta.  (*) opcional</label>
                    <textarea class="form-control" rows="5"></textarea>
                </div>

                <fieldset class="form-group">
                    <label>Agregar documentación (*) opcional</label>
                    <label class="custom-file d-block">
                        <input type="file" id="file" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>
                </fieldset>


            </form>
        </div>
    </div>
</div>
<!-- /.row -->