<!DOCTYPE html>
<html lang="en"> 
    <head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>WADABOO</title>
        <meta name="author" content="DSA79">
        <meta name="keywords" content="">
        <meta name="description" content="WADABBOO - Sistema de Compas">		

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		

        <!-- Libs CSS -->
        <?php echo $this->Html->css('/agency/vendor/bootstrap/css/bootstrap.min') ?>
        <?php echo $this->Html->css('/agency/vendor/font-awesome/css/font-awesome.min') ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        
        <?php echo $this->Html->css('/agency/css/agency') ?>

    </head>

    <body id="page-top">

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


        <!-- Bootstrap core JavaScript -->
        <?php echo $this->Html->script('/agency/vendor/jquery/jquery.min') ?>
        <?php echo $this->Html->script('/agency/vendor/bootstrap/js/bootstrap.bundle.min') ?>
        <!-- Plugin JavaScript -->
        <?php echo $this->Html->script('/agency/vendor/jquery-easing/jquery.easing.min') ?>
        <!-- Contact form JavaScript -->
        <?php echo $this->Html->script('/agency/js/jqBootstrapValidation') ?>
        <?php echo $this->Html->script('/agency/js/contact_me') ?>
        <?php echo $this->Html->script('/agency/js/agency.min') ?>

    </body>

</html>