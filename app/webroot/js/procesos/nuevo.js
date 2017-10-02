$(document).ready(function () {

    $("#dia_subasta").val(inicio_subasta);
    
    $('#addItem').click(function () {
        clonElementAfter('div', 'rowItem-');
    });

    $(document).on('click', 'button.removeItem', function () {
        var elem = $(this).closest('div[id^="rowItem"]');
        var num = getNumberId(elem);
        console.log(num);
        if (num > 1) {
            $(this).closest("div[id^='rowItem']").remove();
        } else {
            $(this).closest("div[id^='rowItem']").find("input").val("");
        }
    });

    


});

