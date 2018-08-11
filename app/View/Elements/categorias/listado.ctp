<?php
App::uses('Categoria', 'Model');
$categorias = (new Categoria())->find('all');
$count_visible = 4;
?>
<style type="text/css">

    #cat-list{
        list-style: none;
        width: 90%;
        margin: 0 auto;
    }
    #cat-list li{
        width: 150px;
        height: 150px;
        float:left;
        margin: 10px auto;
    }
    .cat-icon{
        margin: 0 auto;
        text-align: center;
    }
    .cat-icon img{
        width: 50%;
        text-align: center;
    }
    .cat-text{
        margin: 10px auto;
        text-align: center;
        width: 80%;
        font-size: 0.9em;
    }

</style>

<ul id="cat-list">
    <?php foreach ($categorias as $categoria) { ?>
        <li>
            <div class="cat-icon">
                <?php echo $this->Html->image("" . $categoria['Categoria']['icon'] . "", ['alt' => $categoria['Categoria']['nombre']]) ?>
            </div>
            <p class="cat-text"><?php echo $this->Html->link($categoria['Categoria']['nombre'], "/procesos/categoria/".$categoria['Categoria']['id']); ?></p>
        </li>
    <?php } ?>
</ul>