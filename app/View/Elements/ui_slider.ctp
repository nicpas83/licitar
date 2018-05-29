<?php
echo $this->Html->css('/assets/plugins/ion-rangeslider/css/ion.rangeSlider', ['inline' => false]);
echo $this->Html->css('/assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinModern', ['inline' => false]);
echo $this->Html->script('/assets/plugins/ion-rangeslider/js/ion-rangeSlider/ion.rangeSlider.min', ['inline' => false]);
?>
<?php echo $this->Form->input($params['name'], ['type' => 'hidden', 'class' => 'range_01']) ?>
