var edit_id = false;
var check = true;
$(function () {
    //agrego botones de acción.
    $("#TableAlertaVendedor tbody tr").each(function (i) {
        var modelPk = "AlertaVendedor-" + $(this).find(".acciones > input").val();
        $(this).find(".acciones").append(edit_btn(modelPk));
        $(this).find(".acciones").append(del_btn(modelPk));
    });

    //Select Categoria.
    $("[id*='TmpCategoria']").change(function () {
        $("#dinamic-subcat").html("");
        edit_id = false;
        check = findTextTableCol($("[id*='TmpCategoria'] option:selected").text(), 'TableAlertaVendedor', 1);
        if (!check) {
            $(this).val("");
            return;
        }
        mostrarSubcategorias(this.value);
    });

    //Agregar alerta
    $("#addCatAlert").click(function () {
        var ids = [];
        var nombres = [];
        var categoria_id = $("[id*='TmpCategoria']").val();
        var categoria = $("[id*='TmpCategoria'] :selected").text();

        //guardo ids y textos seleccionados.
        $("#dinamic-subcat :input").each(function () {
            if ($(this).is(":checked")) {
                ids.push($(this).val());
                nombres.push($(this).parent().text());
            }
        });
        //check seleccion
        if (ids.length == 0) {
            swal("Selecciona al menos una subcategoría y luego click en Agregar");
            return;
        }

        //UPDATE
        if (edit_id) {
            $("[id='EditAlertaVendedor-" + edit_id + "']").closest("tr").find("td:eq(1)").text(nombres.join(' - '));
            var params = {
                "alerta_id": edit_id,
                "categoria_id": categoria_id,
                "subcategorias": ids
            };
            $.post("/mail/alertas_vendedores/ajax_update_alerta", params, function () {
                topAlert("Alerta Actualizada");
                edit_id = false;
                $("#dinamic-subcat").html('');
                $("[id*='TmpCategoria']").val('');
            });
            return;
        }

        //NEW
        var params = {
            "categoria_id": categoria_id,
            "subcategorias": ids
        };
        $.post("/mail/alertas_vendedores/ajax_set_alerta", params, function (edit_id) {
            topAlert("Alerta Agregada");
            var modelPk = "AlertaVendedor-" + edit_id;
            var html = "<tr>";
            html += "<td>" + categoria + "</td>";
            html += "<td>" + nombres.join(' - ') + "</td>";
            html += "<td class='acciones'>" + edit_btn(modelPk) + del_btn(modelPk) + "</td>";
            html += "</tr>";

            $("#TableAlertaVendedor tbody").append(html);
            $("#dinamic-subcat").html('');
            $("[id*='TmpCategoria']").val('');
        });
    });

    //Acción Editar.  
    $(document).on("click", "[id^='EditAlertaVendedor']", function () {
        edit_id = getNumeric($(this).attr('id'));
        $.get("/mail/alertas_vendedores/ajax_get_alerta/" + edit_id, function (data) {
            var jdata = $.parseJSON(data);
            $("[id*='TmpCategoria']").val(jdata.categoria);
            editarAlerta(edit_id, jdata.categoria, jdata.subcategorias);
        });
    });
    //Acción Eliminar.
    $(document).on("click", "[id^='DeleteAlertaVendedor']", function () {
        edit_id = getNumeric($(this).attr('id'));
        delete_model_id('AlertaVendedor', edit_id, 'mail');
    });

});

function mostrarSubcategorias(categoria_id) {
    $.get("/categorias/categorias/ajax_get_subcategorias/" + categoria_id, function (data) {
        var jdata = $.parseJSON(data);
        $.each(jdata, function (i) {
            var html = "<div class='form-check'>";
            html += "<label class='custom-control custom-checkbox'>";
            html += "<input type='checkbox' name='data[User][subcategorias][" + i + "]' class='custom-control-input' value='" + i + "'>";
            html += "<span class='custom-control-indicator'></span>";
            html += "<span class='custom-control-description'>" + this + "</span>";
            html += "</label>";
            html += "</div>";
            $("#dinamic-subcat").append(html);
        });
    });
}
function editarAlerta(edit_id, categoria_id, subcategorias) {
    $("#dinamic-subcat").html("");
    $.get("/categorias/categorias/ajax_get_subcategorias/" + categoria_id, function (data) {
        var jdata = $.parseJSON(data);
        $.each(jdata, function (i) {
            var checked = "";
            if ($.inArray(i, subcategorias) !== -1) {
                checked = "checked";
            }
            var html = "<div class='form-check'>";
            html += "<label class='custom-control custom-checkbox'>";
            html += "<input type='checkbox' " + checked + " name='data[User][subcategorias][" + i + "]' class='custom-control-input' value='" + i + "'>";
            html += "<span class='custom-control-indicator'></span>";
            html += "<span class='custom-control-description'>" + this + "</span>";
            html += "</label>";
            html += "</div>";
            $("#dinamic-subcat").append(html);
        });
    });
}
