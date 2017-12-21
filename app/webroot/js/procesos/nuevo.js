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

var key = 0;
var nuevoItem = "";
var rubros = [];
var rubrosTxt = [];
var nombres = [];
var cantidades = [];
var unidades = [];
var especificaciones = [];

function agregarItemListado()
{
    rubros.push($('#ProcesoTmpRubro').val());
    rubrosTxt.push($('#ProcesoTmpRubro option:selected').text());
    nombres.push($('#ProcesoTmpNombre').val());
    cantidades.push($('#ProcesoTmpCantidad').val());
    unidades.push($('#ProcesoTmpUnidad option:selected').text());
    especificaciones.push($('#ProcesoTmpEspecificaciones').val());

    nuevoItem = "<tr id='item-" + key + "'>";
    nuevoItem += "<td class='index'>" + (key + 1) + "</td>";
    nuevoItem += "<td>" + rubrosTxt[key] + "</td>";
    nuevoItem += "<td>" + nombres[key] + "</td>";
    nuevoItem += "<td>" + cantidades[key] + "</td>";
    nuevoItem += "<td>" + unidades[key] + "</td>";
    nuevoItem += "<td>" + especificaciones[key] + "</td>";
    nuevoItem += "<td><button type='button' class='btn btn-danger removeItem'><i class='fa fa-times'></i> </button></td>";
    nuevoItem += "</tr>";

    $('#items_proceso tbody').append(nuevoItem);
}
function agregarItemHidden()
{
    console.log(JSON.stringify(nombres));
    $('#ItemRubros').val(JSON.stringify(rubros));
    $('#ItemNombres').val(JSON.stringify(nombres));
    $('#ItemCantidades').val(JSON.stringify(cantidades));
    $('#ItemUnidades').val(JSON.stringify(unidades));
    $('#ItemEspecificaciones').val(JSON.stringify(especificaciones));
}
function limpiarTmpForm()
{
    $('#ProcesoTmpNombre').val("");
    $('#ProcesoTmpCantidad').val(1);
    $('#ProcesoTmpEspecificaciones').val("");
}

function actualizarNumeracionTabla(tablaId)
{
    $("#" + tablaId + " > tbody > tr").each(function (index) {
        var x = $(this).find('.index').text(index+1);
    });
}

$(document).ready(function () {

    var hoy = moment().format('DD/MM/YYYY');
    var fin_subasta = moment().add(7, 'days').format('DD/MM/YYYY');

    $("#fechaFinSubasta").val(fin_subasta);
    $("#fechaFinSubasta").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd/mm/yyyy',
        daysOfWeekDisabled: [0, 6],
        weekStart: [1],
        language: 'es'

    });

    $('#addItem').click(function () {
        key = $('#items_proceso tr').length;
        if ($('#ProcesoTmpNombre').val()) {
            agregarItemListado();
            limpiarTmpForm();
        } else {
            console.log("error");
        }

    });

    $(document).on('click', 'button.removeItem', function () {
        var elem = $(this).closest('tr[id^="item"]');
        var num = getNumberId(elem);  // posicion del array
        // console.log(num);
        if (num > -1) {
            $(this).closest("tr[id^='item']").remove();
            rubros.splice(num, 1);
            nombres.splice(num, 1);
            cantidades.splice(num, 1);
            unidades.splice(num, 1);
            especificaciones.splice(num, 1);
            actualizarNumeracionTabla('items_proceso');
        } else {
            //$(this).closest("tr[id^='item']").find("input").val("");
        }
    });

    $(".select2").select2();

    $("#ProcesoNuevoForm").submit(function (event) {
        event.preventDefault();
        agregarItemHidden();
        $(this).unbind(event).submit();
    });

});

