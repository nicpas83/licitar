<?php
echo $this->Html->script('procesos/preguntas.js', ['inline' => false]);
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Preguntas:</h4>
                <h6 class="card-subtitle"></h6>
                <ul class="search-listing">
                    <?php
                    if ($preguntas) {
                        foreach ($preguntas as $val) {
                            ?>
                            <li>
                                <h3 class="text-info"><?php echo $val['pregunta'] ?></h3>
                                <p><?php echo $val['respuesta'] ?></p>
                            </li>
                            <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>