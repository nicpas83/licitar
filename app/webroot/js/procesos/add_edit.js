var categorias = [];
var categoriasTxt = [];
var subcategorias = [];
var subcategoriasTxt = [];
var nombres = [];
var cantidades = [];
var unidades = [];
var especificaciones = [];

$(document).ready(function () {

    //si es un edit asigno valores en arrays
    if ($('#op').val() === "E") {
        categorias = $.parseJSON($('#ItemCategorias').val());
        categoriasTxt = $.parseJSON($('#ItemTmpCategoriasTxt').val());
        subcategorias = $.parseJSON($('#ItemSubcategorias').val());
        subcategoriasTxt = $.parseJSON($('#ItemTmpSubcategoriasTxt').val());
        nombres = $.parseJSON($('#ItemNombres').val());
        cantidades = $.parseJSON($('#ItemCantidades').val());
        unidades = $.parseJSON($('#ItemUnidades').val());
        especificaciones = $.parseJSON($('#ItemEspecificaciones').val());
    }

    //validaciones cliente submit
    $("input,select,textarea").not("[type=submit], [id*=Tmp]").jqBootstrapValidation({
        submitError: function () {
            $('html,body').animate({scrollTop: 0}, 'slow');
        }
    });

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
        if (addItem()) {
            $(this).before("<div class='alert alert-success'>Bien hecho!</div>");
            alertEnd();
        } else {
            $(this).before("<div class='alert alert-danger'>Para agregar un Item debe completar los campos (*)</div>");
            alertEnd();
        }
    });

    //REMOVE ITEM
    $(document).on('click', 'button.remove', function () {
        if (removeItem($(this))) {
            $('#addItem').before("<div class='alert alert-info'>Item Eliminado</div>");
            alertEnd();
        }
    });

    //EDIT ITEM
    $(document).on('click', 'button.edit', function () {
        if (editItem($(this))) {
            $('html,body').animate({scrollTop: $('#rowItem-1').offset().top -250}, 'slow');
            $('#addItem').before("<div class='alert alert-info'>Edite los campos arriba y vuelva a agregar el Item</div>");
            alertEnd();
        }

    });

    $(".select2").select2();

});


function addItem() {

    if (validarItem()) {
        agregarItemEnArrays();
        agregarItemEnTabla();
        agregarItemEnHiddens();
        limpiarTmpForm();
        return true;
    } else {
        return false;
    }

}

function removeItem(item) {
    var elem = item.closest('tr[id^="item"]');
    var num = getNumberId(elem);  // posicion del array

    if (num > -1) {
        removerItemDeArrays(num);
        elem.remove();
        actualizarNumeracionTabla(elem);
        return true;
    }
}

function editItem(item) {
    var elem = item.closest('tr[id^="item"]');
    var num = getNumberId(elem);  // posicion del array

    if (num > -1) {
        editarItemSeleccionado(num);
        removerItemDeArrays(num);
        elem.remove();
        actualizarNumeracionTabla();
        return true;
    }

}




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

function validarItem() {
    if ($('#ProcesoTmpCategoria').val() == 0) {
        return false;
    } else if ($('#ProcesoTmpSubcategoria').val() == 0) {
        return false;
    } else if ($('#ProcesoTmpNombre').val() == '') {
        return false;
    } else if ($('#ProcesoTmpCantidad').val() == '' || $('#ProcesoTmpCantidad').val() <= 0) {
        $('#ProcesoTmpCantidad').val('1');
        return true;
    } else {
        return true;
    }
}

function agregarItemEnArrays() {
    categorias.push($('#ProcesoTmpCategoria').val());
    categoriasTxt.push($('#ProcesoTmpCategoria option:selected').text());
    subcategorias.push($('#ProcesoTmpSubcategoria').val());
    subcategoriasTxt.push($('#ProcesoTmpSubcategoria option:selected').text());
    nombres.push($('#ProcesoTmpNombre').val());
    cantidades.push($('#ProcesoTmpCantidad').val());
    unidades.push($('#ProcesoTmpUnidad option:selected').text());
    especificaciones.push($('#ProcesoTmpEspecificaciones').val());
}

function agregarItemEnHiddens() {
    $('#ItemCategorias').val(JSON.stringify(categorias));
    $('#ItemSubcategorias').val(JSON.stringify(subcategorias));
    $('#ItemNombres').val(JSON.stringify(nombres));
    $('#ItemCantidades').val(JSON.stringify(cantidades));
    $('#ItemUnidades').val(JSON.stringify(unidades));
    $('#ItemEspecificaciones').val(JSON.stringify(especificaciones));
}

function agregarItemEnTabla() {
    var key = $('#items_proceso tbody tr').length;
    var nuevoItem = "<tr id='item-" + key + "'>";
    nuevoItem += "<td class='index'>" + (key + 1) + "</td>";
    nuevoItem += "<td>" + categoriasTxt[key] + "</td>";
    nuevoItem += "<td>" + subcategoriasTxt[key] + "</td>";
    nuevoItem += "<td>" + nombres[key] + "</td>";
    nuevoItem += "<td>" + cantidades[key] + "</td>";
    nuevoItem += "<td>" + unidades[key] + "</td>";
    nuevoItem += "<td class='text-limit'>" + especificaciones[key] + "</td>";
    nuevoItem += "<td class='actions'><button type='button' class='btn btn-warning edit'><i class='fa fa-edit'></i> </button><button type='button' class='btn btn-danger m-l-5 remove'><i class='fa fa-times'></i> </button></td>";
    nuevoItem += "</tr>";

    $('#items_proceso tbody').append(nuevoItem);
    $("button[type='submit']").attr('disabled', false);
}

function limpiarTmpForm() {
    $('#ProcesoTmpNombre').val("");
    $('#ProcesoTmpCantidad').val(1);
    $('#ProcesoTmpEspecificaciones').val("");
}


function editarItemSeleccionado(num) {
    var txtUnidad = $("#ProcesoTmpUnidad option:contains('" + unidades[num] + "')").val();
    $('#ProcesoTmpCategoria').val("" + categorias[num] + "").trigger('change');
    $('#ProcesoTmpSubcategoria').val("" + subcategorias[num] + "").trigger('change');
    $('#ProcesoTmpNombre').val("" + nombres[num] + "");
    $('#ProcesoTmpCantidad').val("" + cantidades[num] + "");
    $("#ProcesoTmpUnidad").val(txtUnidad).change();
    $('#ProcesoTmpEspecificaciones').val("" + especificaciones[num] + "");
}

function actualizarNumeracionTabla() {
    $('#items_proceso tbody tr').each(function (index) {
        $(this).attr("id", "item-" + index + "");
        $(this).find('td.index').html("" + (index + 1) + "");
    });
}

function removerItemDeArrays(num) {
    categorias.splice(num, 1);
    categoriasTxt.splice(num, 1);
    subcategorias.splice(num, 1);
    subcategoriasTxt.splice(num, 1);
    nombres.splice(num, 1);
    cantidades.splice(num, 1);
    unidades.splice(num, 1);
    especificaciones.splice(num, 1);
}
