var proceso_id;
var info_general = {};

function getRequisitos() {
    var requisitos = [];
    $("[id^=ProcesoRequisitosExcluyentes]").each(function () {
        if ($(this).prop("checked")) {
            requisitos.push($(this).val());
        }
    });
    if (requisitos.length > 0) {
        return requisitos.toString();
    }
    return "";
}

function validarInfoGeneral() {
    var validate = true;
    if ($('#ProcesoReferencia').val() == '') {
        validate = false;
    }
    if ($('#ProcesoFechaFin').val() == 0) {
        validate = false;
    }
    if ($('#ProcesoFechaEntrega').val() == 0) {
        validate = false;
    }
    return validate;
}

function continueWithCheckItems() {
    //check si existen items antes de continuar
    $.get("/items/ajax_check_items_before", function (status) {
        if (status == "true") {
            finalizarPublicacion();
            continuarPaso2();
        } else {
            swal("Para continuar, al menos debes agregar 1 ítem a tu compra.");
            return;
        }
    });
}

function continuarPaso2() {
    if ($("[id^='paso1']").is(":visible")) {
        $("[id^='paso1']").hide();
        $("[id^='paso2']").show();
        goTop();
    }
}
function finalizarPublicacion() {
    if ($("[id^='paso2']").is(":visible")) {
        info_general["id"] = proceso_id;
        info_general["referencia"] = $("#ProcesoReferencia").val();
        info_general["fecha_fin"] = $("#ProcesoFechaFin").val();
        info_general["detalles"] = $("#ProcesoDetalles").val();
        info_general["fecha_entrega"] = $("#ProcesoFechaEntrega").val();
        info_general["preferencia_pago"] = $("#ProcesoCondicionPago").val();
        info_general["requisitos_excluyentes"] = getRequisitos();

        $.post("/procesos/ajax_set_info_general", info_general, function () {
            swal("Felicitaciones!");
            $(location).attr('href', WWW);
            return;
        });
    }
}

function checkBorrador() {
    //check si es borrador
    if ($("#borradorPk").val()) {
        $("[id^='paso1']").hide();

        $("#continuar_publicacion").click(function () {
            proceso_id = $("#borradorPk").val();
            $("[id='check_borrador']").closest(".row").remove();
            $("[id^='paso1']").show();
            $("#items_proceso tbody tr").each(function () {
                var item_id = $(this).find("[id^='itemPk']").val();
                var modelPk = "Item-" + item_id;
                $(this).find(".acciones").append(edit_btn(modelPk));
                $(this).find(".acciones").append(del_btn(modelPk));
            });
        });

        $("#nueva_publicacion").click(function () {
            var params = {"id": $("#borradorPk").val()};
            $.post("/procesos/ajax_eliminar_borrador", params, function () {
                location.reload();
            });
        });

    } else {
        proceso_id = $("#nuevoPk").val();
    }
}
function aplicarDatePicker() {
    var hoy = moment().format('DD/MM/YYYY');
    var dateToday = new Date();
    var fin_subasta = new Date(dateToday.setDate(dateToday.getDate() + 3));
    var fecha_fin;

    if ($("#ProcesoFechaFin").val()) {
        fecha_fin = $("#ProcesoFechaFin").val();
    }

    $("#ProcesoFechaFin").datepicker({
        autoclose: true,
        todayHighlight: true,
        format: 'dd/mm/yyyy',
        daysOfWeekDisabled: [0, 6],
        weekStart: [1],
        language: 'es',
        orientation: "bottom",
        startDate: fin_subasta,
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
}

function validarItem() {
    var validate = true;
    if ($('#ProcesoNombre').val() == '') {
        validate = false;
    }
    if ($('#ProcesoCategoria').val() == 0) {
        validate = false;
    }
    if ($('#ProcesoSubcategoria').val() == 0) {
        validate = false;
    }
    if ($('#ProcesoCantidad').val() == '' || $('#ProcesoCantidad').val() <= 0) {
        $('#ProcesoCantidad').val('1');
    }
    return validate;
}
function limpiarTmpForm() {
    $('#ProcesoNombre').val("");
    $('#ProcesoCantidad').val(1);
    $('#ProcesoEspecificaciones').val("");
}