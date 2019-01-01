<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Wadaboo - Comprando mejor</title>
<!-- Bootstrap Core CSS -->
<?php echo $this->Html->css('/assets/plugins/bootstrap/css/bootstrap.min') ?>
<?php echo $this->Html->css('/assets/plugins/icheck/skins/all') ?>
<!-- Date picker plugins css -->
<?php echo $this->Html->css('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min') ?>
<?php echo $this->Html->css('/assets/plugins/select2/dist/css/select2.min') ?>
<!-- You can change the theme colors from here -->
<?php echo $this->Html->css('/css/colors/blue') ?>
<!-- Custom CSS -->
<?php echo $this->Html->css('/css/style') ?>
<?php echo $this->Html->css('/css/modif') ?>
<?php echo $this->Html->css('/css/generic') ?>
<?php echo $this->Html->css('https://use.fontawesome.com/releases/v5.6.3/css/all.css') ?>
<?php echo $this->Html->css('https://fonts.googleapis.com/css?family=Audiowide|Encode+Sans+Expanded|Rammetto+One|Special+Elite') ?>

<?php echo $this->Html->meta('favicon.ico', '/assets/images/favicon.png', array('type' => 'icon')); ?>

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<?php echo $this->Html->script('/assets/plugins/jquery/jquery.min') ?>
<!-- Bootstrap tether Core JavaScript -->
<?php echo $this->Html->script('/assets/plugins/bootstrap/js/tether.min') ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap/js/bootstrap.min') ?>
<!-- slimscrollbar scrollbar JavaScript -->
<?php echo $this->Html->script('jquery.slimscroll') ?>
<!--Menu sidebar -->
<?php echo $this->Html->script('sidebarmenu') ?>
<!--Select 2 -->
<?php echo $this->Html->script('/assets/plugins/select2/dist/js/select2.full.min') ?>
<!--stickey kit -->
<?php echo $this->Html->script('/assets/plugins/sticky-kit-master/dist/sticky-kit.min') ?>
<!-- Date Picker Plugin JavaScript -->
<?php echo $this->Html->script('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min') ?>
<?php echo $this->Html->script('/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.es') ?>
<!-- Clock Picker Plugin JavaScript -->
<?php echo $this->Html->script('/assets/plugins/clockpicker/dist/bootstrap-clockpicker.min') ?>
<!-- Moment Parse, validate, manipulate, and display dates and times in JavaScript.  -->
<?php echo $this->Html->script('/assets/plugins/moment/min/moment-with-locales.min') ?>
<!-- Sweet-Alert  -->
<?php echo $this->Html->script('/assets/plugins/sweetalert/sweetalert.min') ?>
<?php echo $this->Html->css('/assets/plugins/sweetalert/sweetalert') ?>
<!-- This is data table -->
<?php echo $this->Html->script('/assets/plugins/datatables/jquery.dataTables.min') ?>
<!--DROPIFY upload files-->
<?php echo $this->Html->script('/assets/plugins/dropify/dist/js/dropify.min') ?>
<?php echo $this->Html->css('/assets/plugins/dropify/dist/css/dropify.min') ?>
<!-- Treeview Plugin JavaScript -->
<?php echo $this->Html->script('/assets/plugins/bootstrap-treeview-master/dist/bootstrap-treeview.min') ?>
<!-- iCheck -->
<?php echo $this->Html->script('/assets/plugins/icheck/icheck.min') ?>
<?php echo $this->Html->script('/assets/plugins/icheck/icheck.init') ?>
<!--Custom JavaScript -->
<?php echo $this->Html->script('custom') ?>
<!--Validation -->
<?php echo $this->Html->script('validation') ?>
<!--JS VARS cake -->
<?php
echo $this->element('js_vars'); //INFLECTOR
echo $this->Html->script('funciones');
echo $this->Html->script('acciones_btn');
?>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->