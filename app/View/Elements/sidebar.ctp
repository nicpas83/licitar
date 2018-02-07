<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" style="">
                <li class="nav-small-cap">MENU</li>
                <?php
                if ($this->Session->check('Auth.User')) {

                    if ($this->Session->read('Auth.User.role') === '1') {
                        ?>    
                        <li>
                            <a class="has-arrow " href="<?php echo $this->Html->url(['controller' => 'pages', 'action' => 'display']) ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a>
                        </li>
                        <li class="nav-devider"></li>        
                        <li>
                            <a class="has-arrow " href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'add']) ?>" aria-expanded="false"><i class="mdi mdi-cart-outline"></i><span class="hide-menu">Nuevo Proceso</span></a>
                        </li>
                        <li class="nav-devider"></li>

                        <li>
                            <a class="has-arrow " href="<?php echo $this->Html->url(['controller' => 'procesos', 'action' => 'mis_procesos']) ?>" aria-expanded="false"><i class="mdi mdi-table-edit"></i><span class="hide-menu">Mis Procesos</span></a>
                        </li>
                        <li class="nav-devider"></li>
                        <li>
                            <a class="has-arrow " href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'configuracion']) ?>" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Configuración</span></a>
                        </li>
                        <li class="nav-devider"></li>


                        <?php
                    }
                }
                ?>
<!--                        <li class="text-muted" id="time"></li>
                        <li class="nav-devider"></li>-->

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<span style="display:none;" id="unixVal"><?php echo time(); ?></span>

<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->