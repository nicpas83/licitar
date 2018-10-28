var edit_id = false;

$(function () {
    
    $('#ProcesoCantidad').val(1);
    //ACCION AGREGAR ITEM.
    $("#addItem").click(function () {
        var item = {};
        if (!validarItem()) {
            topAlert("Para agregar un Item debe completar los campos marcados (*)", "danger");
            return;
        }
        item["proceso_id"] = proceso_id;
        item["nombre"] = $('#ProcesoNombre').val();
        item["categoria_id"] = $('#ProcesoCategoria').val();
        item["categoria"] = $('#ProcesoCategoria option:selected').text();
        item["subcategoria_id"] = $('#ProcesoSubcategoria').val();
        item["subcategoria"] = $('#ProcesoSubcategoria option:selected').text();
        item["especificaciones"] = $('#ProcesoEspecificaciones').val();
        item["cantidad"] = $('#ProcesoCantidad').val();
        item["unidad"] = $('#ProcesoUnidad option:selected').text();

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
                $("html, body").animate({scrollTop: $('#ProcesoNombre').offset().top - 150}, "slow");
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
            $("html, body").animate({scrollTop: $('#ProcesoNombre').offset().top - 150}, "slow");
        });

    });

    //Acción Editar.  
    $(document).on("click", "[id^='EditItem']", function () {
        edit_id = getNumeric($(this).attr('id'));
        $('#ProcesoCategoria').select2('destroy'); //para evitar que dispare el change.
        
        $.get("/items/ajax_get_item/" + edit_id, function (data) {
            var jdata = $.parseJSON(data);
            topAlert("Edita los campos y hacé click en Agregar Item");
            $('#ProcesoNombre').val(jdata.nombre);
            $('#ProcesoCategoria').val(jdata.categoria_id).select2();
            $('#ProcesoEspecificaciones').val(jdata.especificaciones);
            $('#ProcesoCantidad').val(jdata.cantidad);
            $('#ProcesoUnidad').val(jdata.unidad);
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