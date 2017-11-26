
$(document).on('focus click', 'input.datepicker', function () {
    $(this).datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd/mm/yyyy',
      
    });
});
$(document).on('focus click', '.clockpicker', function () {
    $(this).clockpicker({
        donetext: 'Done',
    });
});