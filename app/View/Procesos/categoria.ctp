<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('ribbon_title', ['title' => "$nombre_cat", 'icon' => "$icon_cat", 'breadlist' => $subcats]); ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <?php echo $this->element('procesos/listado_procesos', ['params' => $procesos]); ?>
            </div>
        </div>
    </div>
</div>



