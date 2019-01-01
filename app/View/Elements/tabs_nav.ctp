<ul class="nav nav-tabs customtab" role="tablist">
    <?php
    $nav = "";
    $i = 0;
    foreach ($params as $key => $val) {
        $active = $i == 0 ? "active" : "";
        $href = Inflector::camelize($key);

        $nav .= "<li class='nav-item'>";
        $nav .= "<a class='nav-link $active' data-toggle='tab' href='#$href' role='tab'>";
        $nav .= "<span class='hidden-sm-up'><i class='ti-home'></i></span>";
        $nav .= "<span class='hidden-xs-down'>$val</span>";
        $nav .= "</a></li>";
        
        $i++;
    }
    echo $nav;
    ?>
</ul>

