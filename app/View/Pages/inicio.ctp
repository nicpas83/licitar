<?php
if ($this->Session->read('Auth.User.role') === '1') {
    echo $this->element('inicio/comprador');
} elseif ($this->Session->read('Auth.User.role') === '2') {
    echo $this->element('inicio/proveedor');
}

?>
<!--<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0">Procesos de Compra en curso</h3>    
    </div>
</div>-->

