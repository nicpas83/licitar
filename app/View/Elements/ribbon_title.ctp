<?php
$subtitle = isset($subtitle) ? $subtitle : '';
$icon_img = "";
$bread_list = "";

if (isset($breadlist)) {
    foreach ($breadlist as $key => $val) {
//debug($val);die;
        $bread_list .= "<li class='breadcrumb-item'><a href='" . $this->Html->url() . "'>" . $val . "</a></li>";
    }
}

if (isset($icon)) {
    $icon_img = $this->Html->image($icon);
}

//debug($icon_img);
//die;


if (is_array($subtitle)) {
    ?>
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-warning font-normal">
            <?php echo $title; ?>
        </div>
        <ul>
            <?php
            foreach ($subtitle as $val) {
                ?>
                <li><?php echo $val; ?></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <?php
} else {
    ?>
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-warning font-normal">
            <span><?php echo $title ?></span>
        </div>
        <?php
        if ($subtitle) {
            echo "<p class='ribbon-content'>" . $subtitle . "</p>";
        }
        if ($icon_img) {
            $html = "<div class='  col-lg-12'>";
            $html .= "<div class='col-2 fl'>" . $icon_img . "</div>";
            $html .= "<div class='col-10 fl'><ol class='breadcrumb'>" . $bread_list . "</ol></div>";
            $html .= "</div>";

            echo $html;
        }
        ?>

    </div>
    <?php
}
?>
