<div class="tab-content">
    <?php
    $panes = "";
    $i = 0;
    foreach ($params as $name => $data) {
        $active = $i == 0 ? "active" : "";
        //si el name tiene "/" es una ruta con subcarpeta
        $ruta = explode("/", $name);
        if (count($ruta) == 1) {
            $href = Inflector::camelize($ruta[0]);     
        }
        if (count($ruta) == 2) {
            $href = Inflector::camelize($ruta[1]);
        }

        $panes .= "<div class='tab-pane $active' id='$href' role='tabpanel'>";
        $panes .= "<div class='table-responsive m-t-40'>";
        $panes .= $this->element($name, ['params' => $data]);
        $panes .= "</div>";
        $panes .= "</div>";
        $i++;
    }

    echo $panes;
    ?>
</div>


