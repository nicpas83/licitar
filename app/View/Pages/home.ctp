 <div class="row">
    <div class="col-lg-6">
        <div class="row justify-content-center banner-text">
            <div class="col-md-10 m-b-20">
                <h1>La mejor forma de <span class="text-info">gestionar tus compras</span></h1>
                <p class="subtext"><span class="font-medium">Publicá tus necesidades de compra </span> y recibirás las mejores ofertas mediante un sistema de <span class="font-medium">SUBASTA INVERSA!</span></p>
                <p class="subtext"><span class="font-medium">Negociá los mejores precios para tu empresa y conseguí varias cotizaciones en un mismo lugar.</span></p>
                <div class="down-btn"> 
                    <a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'login']); ?>" class="btn btn-rounded btn-info m-b-10">INICIAR SESION</a> 
                    <a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'registro']); ?>" class="btn btn-rounded btn-success m-b-10">REGISTRATE GRATIS!</a> 
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="col-lg-6">
        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="img-responsive" src="img/1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">First title goes here</h3>
                        <p>this is the subcontent you can use this</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-responsive" src="img/2.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Second title goes here</h3>
                        <p>this is the subcontent you can use this</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-responsive" src="img/3.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="text-white">Third title goes here</h3>
                        <p>this is the subcontent you can use this</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<br />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Últimas Publicaciones de Compra!</h4>
                <h6 class="card-subtitle">Inicia Sesión para ver todo el contenido.</h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Rubro</th>
                                <th>Referencia</th>
                                <th>Total Productos</th>
                                <th>Total Unidades</th>
                                <th>Fecha Inicio Subasta</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CONSTRUCCION</td>
                                <td><a href="">Materiales para construccion en seco</a></td>
                                <td>7</td>
                                <td>680</td>
                                <td>15/12/2017</td>
                            </tr>
                            <tr>
                                <td>FERRETERIA</td>
                                <td><a href="">Tornillos y Repuestos varios</a></td>
                                <td>4</td>
                                <td>250</td>
                                <td>10/11/2017</td>
                            </tr>
                            <tr>
                                <td>PINTURAS</td>
                                <td><a href="">Latex interior y exterior</a></td>
                                <td>4</td>
                                <td>4</td>
                                <td>10/11/2017</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
