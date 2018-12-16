<?php
$title = "Tenés una publicación sin terminar";
$subtitle = [
    "Iniciada el " . date('d-m-Y', strtotime($proceso['created'])),
    'Podés continuarla o empezar una nueva publicación.'
];
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block" id="check_borrador">
                <?php echo $this->element('ribbon_title', ['title' => $title, 'subtitle' => $subtitle]); ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <?php
                            echo $this->Form->button('Nueva Publicacion', ['id' => 'nueva_publicacion', 'class' => 'btn btn-info mr10', 'type' => 'button']);
                            echo $this->Form->button('Continuar', ['id' => 'continuar_publicacion', 'class' => 'btn btn-success', 'type' => 'button']);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>