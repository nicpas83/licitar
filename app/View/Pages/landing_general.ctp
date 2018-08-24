<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">WADABOO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">Servicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#beneficios">Beneficios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Empezar!</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success mt15 ml40" href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'registrar']) ?>">Registrate</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success mt15 ml10" href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'login']) ?>">Ingresa</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"></div>
            <div class="intro-heading text-uppercase">Cientos de proveedores a tu alcance</div>
            <div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'nueva_compra']) ?>">Publicar tu Compra</a>
            </div>
            <div>
                <a class="btn btn-primary btn js-scroll-trigger mt10" href="#services">Potencia tus ventas</a>
            </div>
        </div>
    </div>
</header>

<!-- Services -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">¿Cómo funciona?</h2>
                <h3 class="section-subheading text-muted">Gestioná tus compras en forma de subasta. ¡Ahorrá tiempo y dinero!</h3>

            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">1. Publicar</h4>
                <p class="text-muted">¿Qué necesitas comprar? Haz un detalle de lo que necesitas comprar. Utiliza las categorias y subcategorías para asegurarte que tu pedido llegará a los proveedores correctos.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">2. Seleccionar</h4>
                <p class="text-muted">Recibe ofertas y observa como mejoran tus costos! Responde las posibles consultas antes de que finalice tu compra y obten mejores precios.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="far fa-handshake fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">3. Aceptar</h4>
                <p class="text-muted">Ponte en contacto con el vendedor que haya ganado la subasta y acuerda la entrega de tu compra.</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="beneficios">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Beneficios</h2>
                <!--<h3 class="section-subheading text-muted"></h3>-->
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 col-sm-6 beneficios-item">
                <a class="beneficios-link" data-toggle="modal" href="#beneficiosModal1">
                    <div class="beneficios-hover">
                        <div class="beneficios-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <?php echo $this->Html->image("/agency/img/eficencia.jpg", ['class' => 'img-fluid']) ?>
                    <!--<img class="img-fluid" src="img/beneficios/01-thumbnail.jpg" alt="">-->
                </a>
                <div class="beneficios-caption mt10">
                    <h4>Eficacia</h4>
                    <p class="text-muted">Los proveedores competiten para ofrecerte el mejor precio.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 beneficios-item">
                <a class="beneficios-link" data-toggle="modal" href="#beneficiosModal2">
                    <div class="beneficios-hover">
                        <div class="beneficios-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <?php echo $this->Html->image("/agency/img/transparencia.jpg", ['class' => 'img-fluid']) ?>
                    <!--<img class="img-fluid" src="img/beneficios/02-thumbnail.jpg" alt="">-->
                </a>
                <div class="beneficios-caption mt10">
                    <h4>Transparencia</h4>
                    <p class="text-muted">Todas las compras y ofertas son públicas.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 beneficios-item">
                <a class="beneficios-link" data-toggle="modal" href="#beneficiosModal3">
                    <div class="beneficios-hover">
                        <div class="beneficios-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <?php echo $this->Html->image("/agency/img/ahorro.jpg", ['class' => 'img-fluid']) ?>
                    <!--<img class="img-fluid" src="img/beneficios/03-thumbnail.jpg" alt="">-->
                </a>
                <div class="beneficios-caption mt10">
                    <h4>Ahorro</h4>
                    <p class="text-muted">Consigue el mejor precio sin perder tiempo pidiendo cotizaciones.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- About -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Crecé con nosotros</h2>
                <h3 class="section-subheading text-muted">Amplía tus canales de compra y venta.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <?php echo $this->Html->image("/agency/img/comprar.png", ['class' => 'rounded-circle img-fluid']) ?>
                            <!--<img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">-->
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>¿SOS COMPRADOR?</h4>
                                <h4 class="subheading">Publicar es gratis!</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Al publicar tu necesidad de compra los proveedores tendrán que competir para ganar y ofrecerte el mejor precio.</p>
                                <a class="btn btn-primary text-uppercase js-scroll-trigger" href="#services">Publicar Ahora</a>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <?php echo $this->Html->image("/agency/img/vender.png", ['class' => 'rounded-circle img-fluid']) ?>
                            <!--<img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">-->
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>¿SOS VENDEDOR?</h4>
                                <h4 class="subheading">Abre nuevos canales de venta</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Consigue cientos de clientes nuevos y ofrece tus mejores precios!</p>
                                <a class="btn btn-primary text-uppercase js-scroll-trigger" href="#services">Ofertar en Subastas</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">Copyright &copy; WADABOO 2018</span>
            </div>
            <!--            <div class="col-md-4">
                            <ul class="list-inline social-buttons">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>-->
            <!--            <div class="col-md-4">
                            <ul class="list-inline quicklinks">
                                <li class="list-inline-item">
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>-->
        </div>
    </div>
</footer>

