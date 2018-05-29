<ul class="navbar-nav my-lg-0">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->Html->image('/assets/images/users/1.jpg', ['class' => 'profile-pic', 'alt' => 'user']) ?></a>
        <div class="dropdown-menu dropdown-menu-right animated flipInY">
            <ul class="dropdown-user">
                <li>
                    <div class="dw-user-box">
                        <div class="u-img"><?php echo $this->Html->image('/assets/images/users/1.jpg', ['alt' => 'user']) ?></div>
                        <div class="u-text">
                            <h4><?php echo $logUserName ?></h4>
                            <p class="text-muted"><?php echo $logUserEmail ?></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                    </div>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                    <a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'mi_cuenta']) ?>"><i class="ti-user"></i> Mi Cuenta</a>
                </li>
                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo $this->Html->url(['controller' => 'alertas', 'action' => 'configuracion']) ?>"><i class="ti-settings"></i> Configuración Alertas</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo $this->Html->url(['controller' => 'users', 'action' => 'logout']) ?>"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
        </div>
    </li>
</ul>