<!DOCTYPE html>
<!-- Crossway - Startup Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <title>WADABOO - Vos Comprás</title>
        <meta name="author" content="DSA79">
        <meta name="keywords" content="">
        <meta name="description" content="WADABBOO - Sistema de Compas Abiertas">		

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		

        <!-- Libs CSS -->
        <?php echo $this->Html->css('/crossway/css/bootstrap') ?>
        <?php echo $this->Html->css('/crossway/css/font-awesome.min') ?>
        <?php echo $this->Html->css('/crossway/css/flexslider') ?>
        <?php echo $this->Html->css('/crossway/css/owl.carousel') ?>

        <!-- On Scroll Animations -->
        <?php echo $this->Html->css('/crossway/css/animate') ?>

        <!-- Template CSS -->
        <?php echo $this->Html->css('/crossway/css/style') ?>

        <!-- Responsive CSS -->
        <?php echo $this->Html->css('/crossway/css/responsive') ?>

        <!-- Favicons -->	
        <link rel="shortcut icon" href="<?php echo $this->Html->url('/crossway/img/icons/favicon.ico') ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->Html->url('/crossway/img/icons/apple-touch-icon-114x114.png') ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->Html->url('/crossway/img/icons/apple-touch-icon-72x72.png') ?>">
        <link rel="apple-touch-icon" href="<?php echo $this->Html->url('/crossway/img/icons/apple-touch-icon.png') ?>">

        <!-- Google Fonts -->	
        <link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

    </head>

    <body>


        <!-- PRELOADER
        ============================================= -->

        <div id="preloader">
            <div id="status"></div>
        </div>


        <!-- CONTENT WRAPPER
        ============================================= -->

        <div id="content-wrapper">

            <?php echo $this->fetch('content') ?>



        </div>	<!-- END CONTENT WRAPPER -->


        <!-- EXTERNAL SCRIPTS
        ============================================= -->
        <?php echo $this->Html->script('/crossway/js/jquery-2.1.0.min') ?>
        <?php echo $this->Html->script('/crossway/js/bootstrap.min') ?>
        <?php echo $this->Html->script('/crossway/js/retina') ?>
        <?php echo $this->Html->script('/crossway/js/modernizr.custom') ?>
        <?php echo $this->Html->script('/crossway/js/jquery.easing') ?>
        <?php echo $this->Html->script('/crossway/js/jquery.parallax-1.1.3') ?>
        <?php echo $this->Html->script('/crossway/js/jquery.validate.min') ?>
        <?php echo $this->Html->script('/crossway/js/jquery.flexslider') ?>
        <?php echo $this->Html->script('/crossway/js/jquery.accordion.source') ?>
        <?php echo $this->Html->script('/crossway/js/owl.carousel') ?>
        <?php echo $this->Html->script('/crossway/js/waypoints.min') ?>
        <?php echo $this->Html->script('/crossway/js/animations') ?>
        <?php echo $this->Html->script('/crossway/js/custom') ?>
        


        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->


        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
        <!--
        <script>
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-XXXXX-X']);
                _gaq.push(['_trackPageview']);

                (function() {
                        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();
        </script>
        -->


    </body>

</html>