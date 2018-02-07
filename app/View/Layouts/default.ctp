<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $this->element('head') ?>
        <script type="text/javascript">var baseUrl = '<?php echo $this->Html->url('/'); ?>';</script>
    </head>

    <body class="fix-header fix-sidebar card-no-border">
        <?php date_default_timezone_set('America/Argentina/Buenos_Aires');?>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>

        <?php echo $this->element('header') ?>
        <?php echo $this->element('sidebar') ?>

        <div class="page-wrapper" style="">
            <div class="container-fluid">
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content') ?>
            </div>
        </div>
        <?php echo $this->element('footer') ?>
        <?php
//        debug($this->params['action']); die;
        echo $this->Html->script('funciones');
        
        if (is_file(WWW_ROOT . 'js' . DS . $this->params['controller'] . '.js')) {
            echo $this->Html->script($this->params['controller']);
        }
        if (is_file(WWW_ROOT . 'js' . DS . $this->params['controller'] . DS . $this->params['action'] . '.js')) {
            echo $this->Html->script($this->params['controller'] . '/' . $this->params['action']);
        }
        ?>

    </body>
</html>