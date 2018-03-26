$(document).ready(function () {
    $(window).keydown(function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            return false;
        }
    });
    $("#ProcesoNuevoForm").submit(function (event) {
        event.preventDefault();
        agregarItemHidden();
        $(this).unbind(event).submit();
    });
    
    $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    
    var hoy = moment().format('DD/MM/YYYY');
    var dateToday = new Date();
    var fin_subasta = new Date(dateToday.setDate(dateToday.getDate() + 3));

    $("#ProcesoFechaFin").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd/mm/yyyy',
        daysOfWeekDisabled: [0, 6],
        weekStart: [1],
        language: 'es',
        orientation: "bottom",
        startDate: fin_subasta
    });
    $("#ProcesoFechaFin").datepicker().on('changeDate', function (e) {
        var fechaEntrega = new Date(e.date.setDate(e.date.getDate() + 1));
        $("#ProcesoFechaEntrega").val('');
        $("#ProcesoFechaEntrega").datepicker('destroy');
        $("#ProcesoFechaEntrega").datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy',
            daysOfWeekDisabled: [0, 6],
            weekStart: [1],
            language: 'es',
            orientation: "bottom",
            startDate: fechaEntrega
        });
    });

    //ADD ITEM
    $('#addItem').click(function () {
         key = $('#items_proceso tr').length; 
         console.log(key);
        var itemOk = validarItem();

        if (itemOk) {
            agregarItemListado();
            agregarItemHidden();
            limpiarTmpForm();
            
        } else {
            $(this).before("<div class='alert alert-danger'>Para agregar un Item debe completar los campos (*)</div>");
            alertEnd();
        }
        
    });

    //REMOVE ITEM
    $(document).on('click', 'button.itemRemove', function () {
        var elem = $(this).closest('tr[id^="item"]');
        var num = getNumberId(elem);  // posicion del array
        // console.log(num);
        if (num > -1) {
            $(this).closest("tr[id^='item']").remove();
            categorias.splice(num, 1);
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



});

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
var categorias = [];
var categoriasTxt = [];
var subcategorias = [];
var subcategoriasTxt = [];
var nombres = [];
var cantidades = [];
var unidades = [];
var especificaciones = [];

function validarItem() {
    var itemOk = true;

    if($('#ProcesoTmpCategoria').val() == 0){
        itemOk = false;
    }
    if($('#ProcesoTmpSubcategoria').val() == 0){
        itemOk = false;
    }
    if($('#ProcesoTmpNombre').val() == ''){
        itemOk = false;
    }
    if($('#ProcesoTmpCantidad').val() == '' || $('#ProcesoTmpCantidad').val() <= 0){
        $('#ProcesoTmpCantidad').val('1');
    }
    return itemOk;
}

function agregarItemListado()
{
    categorias.push($('#ProcesoTmpCategoria').val());
    categoriasTxt.push($('#ProcesoTmpCategoria option:selected').text());
    subcategorias.push($('#ProcesoTmpSubCategoria').val());
    subcategoriasTxt.push($('#ProcesoTmpSubCategoria option:selected').text());
    nombres.push($('#ProcesoTmpNombre').val());
    cantidades.push($('#ProcesoTmpCantidad').val());
    unidades.push($('#ProcesoTmpUnidad option:selected').text());
    especificaciones.push($('#ProcesoTmpEspecificaciones').val());

    nuevoItem = "<tr id='item-" + key + "'>";
    nuevoItem += "<td class='index'>" + (key + 1) + "</td>";
    nuevoItem += "<td>" + categoriasTxt[key] + "</td>";
    nuevoItem += "<td>" + nombres[key] + "</td>";
    nuevoItem += "<td>" + cantidades[key] + "</td>";
    nuevoItem += "<td>" + unidades[key] + "</td>";
    nuevoItem += "<td>" + especificaciones[key] + "</td>";
    nuevoItem += "<td><button type='button' class='btn btn-danger itemRemove'><i class='fa fa-times'></i> </button></td>";
    nuevoItem += "</tr>";

    $('#items_proceso tbody').append(nuevoItem);
    $("button[type='submit']").attr('disabled', false);
}
function agregarItemHidden()
{
    $('#ItemCategorias').val(JSON.stringify(categorias));
    $('#ItemSubCategorias').val(JSON.stringify(subcategorias));
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
        var x = $(this).find('.index').text(index + 1);
    });
}
