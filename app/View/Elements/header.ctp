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
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon -->
                    <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <?php echo $this->Html->image('../assets/images/logo-icon.png', array('alt' => 'homepage', 'class' => 'light-logo')); ?>
                     
                        <!-- Light Logo icon -->
                        <?php echo $this->Html->image('../assets/images/logo-light-icon.png', array('alt' => 'homepage')); ?>
                        
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                        <!-- dark Logo text -->
                        <?php echo $this->Html->image('../assets/images/logo-text.png', array('alt' => 'homepage', 'class' => 'dark-logo')); ?>
                        <!-- Light Logo text -->
                        <?php echo $this->Html->image('../assets/images/logo-text.png', array('alt' => 'homepage', 'class' => 'light-logo')); ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto mt-md-0 ">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a> </li>
                    
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <li class="nav-item hidden-sm-down">
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Buscar algo..."> <a class="srh-btn"><i class="ti-search"></i></a> </form>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->Html->image('../assets/images/users/1.jpg', array('alt' => 'user', 'class' => 'profile-pic')); ?></a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><?php echo $this->Html->image('../assets/images/users/1.jpg', array('alt' => 'user')); ?></div>
                                        <div class="u-text">
                                            <h4>Mi Empresa SRL</h4>
                                            <p class="text-muted">info@miempresa.com</p></div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'mi_perfil']) ?>"><i class="ti-user"></i> Mi Perfil</a></li>
                                <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->