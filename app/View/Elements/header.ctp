<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $this->Html->url(['controller' => 'pages']) ?>">
                    <!-- Logo icon -->
                    <span class="logo">
                        <!--<i class="ti ti-announcement"></i>-->
                        WADABOO
                    </span>

                    <!-- dark Logo text -->
                    <?php //echo $this->Html->image('/assets/images/logo-text.png', ['class' => 'dark-logo', 'alt' => 'homepage']) ?>  
                    <!-- Light Logo text -->    
                    <?php //echo $this->Html->image('/assets/images/logo-light-text.png', ['class' => 'light-logo', 'alt' => 'homepage']) ?>  
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <?php
            if ($this->Session->check('Auth.User')) {
                ?>
                <div class="navbar-collapse" >
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 " style="text-align: right;">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>

                        <li class="nav-devider"></li>

                    

                    </ul>
                    
                </div>
                <?php
            }
            ?>
        </nav>
    </header>