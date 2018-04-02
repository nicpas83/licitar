$(function () {
    
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


});

function alertEnd() {
    window.setTimeout(function () {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
            $(this).remove();
        });
    }, 4000);
}
