<!-- INTRO
     ============================================= -->

<section id="intro" class="intro-parallax">
    <div class="container">				

        <!-- Header -->		
        <header id="header"> 
            <div class="row">	

                <!-- Logo Image -->
                <div id="logo_image" class="col-xs-6">
                    <h1 class="logo">Wadaboo</h1>
                </div>

                <!-- Header Social Icons -->
                <div id="social_icons" class="col-xs-6 text-right">																	
                    <ul class="social-icons clearfix">
                        <li><a class="he_social ico-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="he_social ico-twitter" href="#"><i class="fa fa-twitter"></i></a></li>	
                        <li><a class="he_social ico-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>							

                        <!--	
                                <li><a class="he_social ico-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="he_social ico-dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>	
                                <li><a class="he_social ico-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="he_social ico-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>	
                                <li><a class="he_social ico-dropbox" href="#"><i class="fa fa-dropbox"></i></a></li>
                                <li><a class="he_social ico-skype" href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a class="he_social ico-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="he_social ico-tumblr" href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a class="he_social ico-vimeo" href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a class="he_social ico-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a class="he_social ico-github" href="#"><i class="fa fa-github-alt"></i></a></li>
                                <li><a class="he_social ico-renren" href="#"><i class="fa fa-renren"></i></a></li>
                                <li><a class="he_social ico-vk" href="#"><i class="fa fa-vk"></i></a></li>
                                <li><a class="he_social ico-xing" href="#"><i class="fa fa-xing"></i></a></li>
                                <li><a class="he_social ico-weibo" href="#"><i class="fa fa-weibo"></i></a></li>
                                <li><a class="he_social ico-rss" href="#"><i class="fa fa-rss"></i></a></li>										
                        -->										
                    </ul>
                </div>	 <!-- End Footer Social Icons -->	

            </div>
        </header>	<!-- End Header -->	

        <div class="row">

            <!-- Intro Section Description -->		
            <div id="intro_description" class="col-sm-7 col-md-7">

                <!-- Intro Section Title -->
                <h1><strong>Gestioná</strong> tus compras <strong>en forma de subasta</strong> y empezá a <strong>ahorrar ya!</strong></h1>

                <!-- Description #1 -->	
                <div class="intro_feature">
                    <h4><i class="fa fa-check"></i> Ahorrá tiempo y dinero</h4>
                    <p>Al publicar tu necesidad de compra los proveedores tendrán que competir para ganar 
                        y ofrecerte el mejor precio.
                    </p>
                </div>

                <!-- Description #2 -->	
                <div class="intro_feature">
                    <h4><i class="fa fa-check"></i> Reducí tus costos operativos</h4>
                    <p>No importa si tenés un emprendimiento o una Pyme, en algún momento tendrás la 
                        necesidad de reducir tus costos. Podrás elegir cualquier producto de tu interés 
                        y te avisaremos cuando haya una compra similar para que puedas unir fuerzas con 
                        otro comprador y abaratar tus costos.
                    </p>
                </div>

                <!-- Description #3 -->	
                <div class="intro_feature">
                    <h4><i class="fa fa-check"></i> Encontrá todos los proveedores en un solo lugar.</h4>
                    <p>Aumentá la red de contactos utilizando los proveedores que los demás usuarios 
                        comparten y mezclalos con los que ya tenés y aumentá la posibilidad de optimizar 
                        tus recursos. 
                    </p>
                </div>

                <!-- Intro Section Button -->	
                <div class="intro_button text-center">
                    <a class="btn btn-primary btn-lg" href="#">Download Now</a>
                </div>

            </div>	<!-- End Intro Section Description -->	


            <!-- Intro Section Form -->		
            <div id="intro_form" class="col-sm-5 col-md-5">

                <!--Register form -->
                <div class="form_register">
                    <h2>Creá tu cuenta gratis!</h2>

                    <?php echo $this->element('form_register'); ?>	

                </div>							
            </div>	<!-- End Intro Section Form -->

        </div>	<!-- End row -->	

    </div>	   <!-- End container -->		
</section>  <!-- END INTRO -->


<!-- ABOUT-1
============================================= -->

<section id="about-1">
    <div class="container">	

        <!-- Section Title -->	
        <div class="row">
            <div class="col-md-12 titlebar">
                <h1>Un pedido, <strong>muchas ofertas</strong> ¿Querés saber más?</h1>
                <p>Te presentamos la única plataforma que organiza, efectiviza, y te permite ahorrar 
                    tiempo y dinero en UN solo click.</p>
            </div>
        </div>

        <div class="row">

            <!--  About-1 Text -->	
            <div id="about-1-text" class="col-md-6">	

                <h4>¿Qué es Wadaboo?</h4>

                <p>Wadaboo es una plataforma de compras pensada para solucionar los problemas cotidianos 
                    que los emprendimientos y Pymes enfrentan cada día al querer satisfacer sus 
                    necesidades productivas y no productivas. Es un punto de encuentro para compradores 
                    y proveedores, que funciona con un sistema de subastas inversas, lo cuál lo hace 
                    transparente, eficiente, y colaborativo al poder unir fuerzas con otros compradores.
                </p>

                <!--  Accordion -->
                <div id="accordion_holder">	
                    <h4>¿Cómo funciona?</h4>

                    <ul class="accordion clearfix">

                        <!-- Text #1 -->
                        <li id="text_1">
                            <a href="#text1">¿Cómo publicar?</a>								
                            <div>
                                <p>Cuando tengas un nuevo requerimiento podés entrar con tu usuario y contraseña e ir a la 
                                    pestaña "Nuevo proceso" y allí en menos de 1 minuto podrás publicar tu pedido. 
                                    Solo tendrás que elegir método de pago, plazo de entrega, darle un nombre a tu producto, 
                                    elegir un rubro y publicar. 
                                </p>
                            </div>									
                        </li>				

                        <!-- Text #2 -->
                        <li id="text_2">
                            <a href="#text2">¿Cuando termina la subasta y quién resulta ganador?</a>								
                            <div>
                                <p>Una vez que hayas publicado tu pedido de compras, tendrás que esperar a que llegue el
                                    día y la hora que vos elegiste para que termine la subasta inversa.										
                                </p>
                            </div>									
                        </li>

                        <!-- Text #3 -->
                        <li id="text_3">
                            <a href="#text3">Aenean rhoncus diam eleifend, pulvinar feugiat feugiat dolor?</a>								
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                </p>
                            </div>									
                        </li>

                    </ul>	

                </div>	<!--  End Accordion -->

            </div>	<!-- End About-1 Text --> 

            <!-- About-1 Image --> 
            <div id="about-1-img" class="col-md-6 text-center">
                <img class="img-responsive" src="<?php echo $this->Html->url('/crossway/img/thumbs/startup-1.png') ?>" alt="image" />		
            </div>

        </div>	<!-- End row -->	
    </div>	   <!-- End container -->		
</section>  <!-- END ABOUT-1 -->




<!-- FEATURES
============================================= -->

<section id="features" class="parallax">
    <div class="container">	

        <!-- Section Title -->	
        <div class="row">
            <div class="col-md-12 titlebar">
                <h1>Our awesome <strong>features</strong></h1>
                <p>Praesent semper, lacus sed cursus porta, odio augue feugiat tincidunt ligula massa in primis faucibus posuere cubilia </p>
            </div>
        </div>

        <!-- Features Holder -->	
        <div class="row">
            <div class="col-md-12">		

                <ul>
                    <!-- Feature Icon 1 -->
                    <li id="feature_1">       									
                        <div class="col-sm-6 col-md-4 feature-box clearfix">	
                            <div class="feature-box-icon">
                                <i class="fa fa-flask"></i>
                            </div>

                            <div class="feature-box-content">
                                <h4>Responsive Design</h4>
                                <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Feature Icon 2 -->
                    <li id="feature_2">       									
                        <div class="col-sm-6 col-md-4 feature-box clearfix">	
                            <div class="feature-box-icon">
                                <i class="fa fa-globe"></i>
                            </div>

                            <div class="feature-box-content">
                                <h4>Web Marketing</h4>
                                <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Feature Icon 3 -->
                    <li id="feature_3">       
                        <div class="col-sm-6 col-md-4 feature-box clearfix">	
                            <div class="feature-box-icon">
                                <i class="fa fa-desktop"></i>
                            </div>

                            <div class="feature-box-content">
                                <h4>Desktop Friendly</h4>
                                <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            </div>
                        </div>
                    </li>

                    <!-- Feature Icon 4 -->
                    <li id="feature_4">
                        <div class="col-sm-6 col-md-4 feature-box clearfix">	
                            <div class="feature-box-icon">
                                <i class="fa fa-cog"></i>
                            </div>

                            <div class="feature-box-content">
                                <h4>Very easy to customize</h4>
                                <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            </div>							
                        </div>
                    </li>

                    <!-- Feature Icon 5 -->
                    <li id="feature_5">       									
                        <div class="col-sm-6 col-md-4 feature-box clearfix">	
                            <div class="feature-box-icon">
                                <i class="fa fa-heart"></i>
                            </div>

                            <div class="feature-box-content">
                                <h4>Clients Loving</h4>
                                <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            </div>
                        </div>
                    </li>  

                    <!-- Feature Icon 6 -->
                    <li id="feature_6">       									
                        <div class="col-sm-6 col-md-4 feature-box clearfix">	
                            <div class="feature-box-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>

                            <div class="feature-box-content">
                                <h4>Supporting</h4>
                                <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>	 <!-- End col-md-12 -->
        </div>	  <!-- End Features Holder -->	

    </div>	   <!-- End container -->		
</section>  <!-- END FEATURES -->


<!-- FAQs
============================================= -->

<section id="faq">
    <div class="container">	

        <!-- Section Title -->	
        <div class="row">
            <div class="col-md-12 titlebar">
                <h1>Frequently <strong>asked questions</strong></h1>
                <p>Praesent semper, lacus sed cursus porta, odio augue feugiat tincidunt ligula massa in primis faucibus posuere cubilia </p>
            </div>
        </div>

        <div class="row">

            <!-- Question #1-->
            <div id="question_1" class="col-md-6">	
                <div class="question">
                    <h4>Aliquam dapibus interdum lobortis pretium ornare erat</h4>
                    <p>Praesent semper, lacus sed cursus porta, odio augue feugiat eros, ac tincidunt ligula massa in est. 
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ut mi sit amet mauris suscipit
                        bibendum sit amet in odio. Integer congue leo metus, eu mollis lorem viverra nec.
                    </p>
                </div>							
            </div>

            <!-- Question #2-->
            <div id="question_2" class="col-md-6">							
                <div class="question">
                    <h4>Aliquam dapibus lobortis pretium ornare erat</h4>
                    <p>Praesent semper, lacus sed cursus porta, odio augue feugiat eros, ac tincidunt ligula massa in est. 
                        Vestibulum ante ipsum primis in faucibus bibendum sit amet in odio. Integer congue leo metus, eu mollis lorem viverra nec.
                    </p>
                </div>
            </div>

        </div>	<!-- End row -->						

        <div class="row">

            <!-- Question #3-->
            <div id="question_3" class="col-md-6">	
                <div class="question">
                    <h4>Aliquam dapibus interdum turpis, lobortis pretium</h4>
                    <p>Praesent semper, lacus sed cursus porta, odio augue feugiat eros, ac tincidunt ligula massa in est. 
                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ut mi sit amet mauris suscipit
                        bibendum sit amet in odio.
                    </p>
                </div>							
            </div>

            <!-- Question #4-->
            <div id="question_4" class="col-md-6">							
                <div class="question">
                    <h4>Aliquam interdum turpis, lobortis pretium ornare erat</h4>
                    <p>Praesent semper, lacus sed cursus porta, odio augue feugiat eros. Vestibulum ante ipsum primis in faucibus orci luctus et 
                        ultrices posuere cubilia Curae; Etiam ut mi sit amet mauris suscipit bibendum sit amet in odio. Integer congue leo metus, mollis lorem viverra.
                    </p>
                </div>
            </div>

        </div>	<!-- End row -->

    </div>	   <!-- End container -->		
</section>  <!-- END FAQs -->



<!-- CALL TO ACTION
============================================= -->

<section id="call-to-action" class="parallax">
    <div class="container">	
        <div class="row">

            <!-- Call To Action Content -->	
            <div class="col-sm-12 text-center">

                <h1>The Most <strong>Simple Way</strong> to launch your <strong>startup</strong></h1>
                <p>Praesent semper, lacus sed cursus porta, odio augue feugiat primis in faucibus ultrices posuere cubilia Curae; 
                    Integer congue leo metus, mollis lorem viverra.
                </p>

                <!-- Call To Action Button -->	
                <a class="btn btn-primary btn-lg">Download Now</a>

            </div>	<!-- End Call To Action Content -->	

        </div>	<!-- End row -->	
    </div>	   <!-- End container -->		
</section>  <!-- END CALL TO ACTION -->


<!-- FOOTER
============================================= -->

<footer id="footer">
    <div class="container">	
        <div class="row">
            <div id="footer_copy">
                <p style="text-align: center;">&copy; Copyright 2018 <span>Wadaboo</span> Todos los derechos reservados</p>
            </div>							
        </div>	<!-- End Footer Navigation Menu -->


    </div>	<!-- End row -->						
</footer>	<!-- END FOOTER -->
