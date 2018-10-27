var edit_id = false;

$(function () {
    
    $('#ProcesoTmpCantidad').val(1);
    //ACCION AGREGAR ITEM.
    $("#addItem").click(function () {
        var item = {};
        if (!validarItem()) {
            topAlert("Para agregar un Item debe completar los campos marcados (*)", "danger");
            return;
        }
        item["proceso_id"] = proceso_id;
        item["nombre"] = $('#ProcesoTmpNombre').val();
        item["categoria_id"] = $('#ProcesoTmpCategoria').val();
        item["categoria"] = $('#ProcesoTmpCategoria option:selected').text();
        item["subcategoria_id"] = $('#ProcesoTmpSubcategoria').val();
        item["subcategoria"] = $('#ProcesoTmpSubcategoria option:selected').text();
        item["especificaciones"] = $('#ProcesoTmpEspecificaciones').val();
        item["cantidad"] = $('#ProcesoTmpCantidad').val();
        item["unidad"] = $('#ProcesoTmpUnidad option:selected').text();

        //UPDATE 
        if (edit_id) {
            item["id"] = edit_id;
            $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(1)").text(item.nombre);
            $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(2)").text(item.categoria);
            $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(3)").text(item.subcategoria);
            $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(4)").text(item.cantidad);
            $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(5)").text(item.unidad);
            $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(6)").text(item.especificaciones);

            $.post("/items/ajax_update_item", item, function () {
                beforeAlert("Edición realizada con éxito!", "#TableItem-vista_previa");
                $("html, body").animate({scrollTop: $('#ProcesoTmpNombre').offset().top - 150}, "slow");
                edit_id = false;
                limpiarTmpForm();
            });
            return;
        }

        //NEW
        $.post("/items/ajax_add_item", item, function (item_id) {
            var nroItem = $("#items_proceso tbody tr").length;
            var modelPk = "Item-" + item_id;
            var html = "";
            html += "<tr>";
            html += "<td>" + (nroItem + 1) + "</td>";
            html += "<td>" + item.nombre + "</td>";
            html += "<td>" + item.categoria + "</td>";
            html += "<td>" + item.subcategoria + "</td>";
            html += "<td>" + item.cantidad + "</td>";
            html += "<td>" + item.unidad + "</td>";
            html += "<td>" + item.especificaciones + "</td>";
            html += "<td class='acciones'>" + edit_btn(modelPk) + del_btn(modelPk) + "</td>";
            html += "</tr>";

            $("#items_proceso tbody").append(html);
            limpiarTmpForm();
            beforeAlert("Bien hecho! podés seguir agregando items", "#TableItem-vista_previa");
            $("html, body").animate({scrollTop: $('#ProcesoTmpNombre').offset().top - 150}, "slow");
        });

    });

    //Acción Editar.  
    $(document).on("click", "[id^='EditItem']", function () {
        edit_id = getNumeric($(this).attr('id'));
        $.get("/items/ajax_get_item/" + edit_id, function (data) {
            var jdata = $.parseJSON(data);
            topAlert("Edita los campos y hacé click en Agregar Item");
            $('#ProcesoTmpNombre').val(jdata.nombre);
            $('#ProcesoTmpCategoria').val(jdata.categoria_id).trigger('change');
            $('#ProcesoTmpEspecificaciones').val(jdata.especificaciones);
            $('#ProcesoTmpCantidad').val(jdata.cantidad);
            $('#ProcesoTmpUnidad').val(jdata.unidad);
            change_subcategoria(jdata.categoria_id, jdata.subcategoria_id);
        });
    });
    //Acción Eliminar.
    $(document).on("click", "[id^='DeleteItem']", function () {
        var pk = getNumeric($(this).attr('id'));
        delete_model_id('Item', pk);
    });

});

function validarItem() {
    var validate = true;
    if ($('#ProcesoTmpNombre').val() == '') {
        validate = false;
    }
    if ($('#ProcesoTmpCategoria').val() == 0) {
        validate = false;
    }
    if ($('#ProcesoTmpSubcategoria').val() == 0) {
        validate = false;
    }
    if ($('#ProcesoTmpCantidad').val() == '' || $('#ProcesoTmpCantidad').val() <= 0) {
        $('#ProcesoTmpCantidad').val('1');
    }
    return validate;
}
function limpiarTmpForm() {
    $('#ProcesoTmpNombre').val("");
    $('#ProcesoTmpCantidad').val(1);
    $('#ProcesoTmpEspecificaciones').val("");
}