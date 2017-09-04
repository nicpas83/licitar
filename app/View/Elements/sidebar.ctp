<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="assets/images/users/1.jpg" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe <span class="caret"></span></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                    <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                    <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">MENU</li>
                
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Comprador</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo $this->Html->url(['controller' => 'avisos', 'action' => 'publicar']) ?>">Publicar Aviso</a></li>
                        <li><a href="<?php echo $this->Html->url(['controller' => 'publicaciones', 'action' => 'index']) ?>">Administrar Publicaciones</a></li>
                        <li><a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'mi_perfil']) ?>">Editar mi Perfil</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Vendedor</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="">Buscar Publicaciones</a></li>
                        <li><a href="">Mis Favoritos</a></li>
                        <li><a href="">Ofertas en Curso</a></li>
                        <li><a href="">Editar mi Perfil</a></li>
                    </ul>
                </li>
                
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->