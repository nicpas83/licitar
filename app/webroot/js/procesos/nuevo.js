$(document).ready(function () {

    $('.textarea_editor').wysihtml5();

    $('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd/mm/yyyy'
    });


});

