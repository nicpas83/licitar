<?php
$subtitle = isset($subtitle) ? $subtitle : '';

if (is_array($subtitle)) {
    ?>
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-warning font-normal"><?php echo $title ?></div>
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
        <div class="ribbon ribbon-warning font-normal"><?php echo $title ?></div>
        <p class="ribbon-content"><?php echo $subtitle ?></p>
    </div>
    <?php
}
?>
