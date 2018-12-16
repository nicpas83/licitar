<?php
echo $this->Html->script('procesos/preguntas.js', ['inline' => false]);
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Preguntas realizadas:</h4>
                <h6 class="card-subtitle"></h6>
                <ul class="search-listing">
                    <?php
                    if ($preguntas) {

                        foreach ($preguntas as $key => $val) {
                            $i = $key + 1;
                            $respuesta = isset($val['Respuesta']['respuesta']) ? $val['Respuesta']['respuesta'] : "";
                            ?>
                            <li>
                                <h3 class="text-info"><?php echo $val['Pregunta']['pregunta'] ?></h3>
                                <p><?php echo $respuesta ?></p>
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
</div>
