$(document).ready(function () {

    //$('.textarea_editor').wysihtml5();

//    $('#datepicker-autoclose').datepicker({
//        autoclose: true,
//        todayHighlight: true,
//        format: 'dd/mm/yyyy'
//    });
    $('#datepicker-autoclose').datepicker({
        pickDate: false,
        pickTime: true,
        useSeconds: false,
        format: 'hh:mm',
    });


});

