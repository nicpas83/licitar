<!DOCTYPE html>
<html lang="en">
    <head>

        <?php echo $this->element('head') ?>

    </head>

    <body class="fix-header fix-sidebar card-no-border">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>

        <?php echo $this->element('header') ?>
        
        <?php echo $this->element('sidebar') ?>

        <?php echo $this->fetch('content') ?>

        <?php echo $this->element('footer') ?>


    </body>
</html>