<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">MENU</li>
                
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-cart-outline"></i><span class="hide-menu">Comprar</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'nuevo']) ?>">Nuevo Proceso</a></li>
                        <li><a href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'activos']) ?>">Procesos Activos</a></li>
                        <li><a href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'borradores']) ?>">Borradores</a></li>
                    </ul>
                </li>
                <li class="nav-devider"></li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Vender</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="">Buscar Procesos</a></li>
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
</aside>


<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->