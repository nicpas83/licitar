// set a variable
var hoy = moment().format('DD/MM/YYYY');
var inicio_subasta = moment().add(7,'days').format('DD/MM/YYYY');

/** get the last ELEMENT (ej. 'div' cuyo ID empiece con ^= "ID" */
function getLastElement(element, id)
{
    return $("" + element + "[id^='" + id + "']:last");
}

/**
 * Read the Number from that DIV's ID (i.e: 3 from "klon3")
 * And increment that number by 1
 * */
function getNumberId(element)
{
    return parseInt(element.prop("id").match(/\d+/g), 10);
}

// Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
function clonElementAfter(element, id)
{
    var elem = getLastElement(element, id);
    var num = getNumberId(elem) + 1;
    var clon = elem.clone()
            .find("input").val("").end()
            .prop('id', id + num);
    return elem.after(clon);
}

$(document).on('focus click', 'input.datepicker', function () {
    $(this).datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd/mm/yyyy'
    });
});
$(document).on('focus click', '.clockpicker', function () {
    $(this).clockpicker({
        donetext: 'Done',
    });
});