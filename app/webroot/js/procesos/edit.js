var edit_id = false;

$(function () {

    aplicarDatePicker();

    //Editar Item.  
    $(document).on("click", "[id^='EditItem']", function () {
        edit_id = getNumeric($(this).attr('id'));
        $('#ProcesoCategoria').select2('destroy'); //para evitar que dispare el change.
        var cat_id = $("#CatId-" + edit_id + "").val();
        var subcat_id = $("#SubcatId-" + edit_id + "").val();
        $('#ProcesoCategoria').val(cat_id).select2();
        change_subcategoria(cat_id, subcat_id);
    });

    //Guardar Edición.  
    $(document).on("click", "[id^='ModalGuardar']", function () {
        edit_id = getNumeric($(this).attr('id'));
        var item = {};
        if (!validarItem()) {
            swal("El nombre del producto o servicio es obligatorio.");
            return;
        }

        item["id"] = edit_id;
        item["nombre"] = $('#ProcesoNombre').val();
        item["cantidad"] = $('#ProcesoCantidad').val();
        item["unidad"] = $('#ProcesoUnidad option:selected').text();
        item["categoria_id"] = $('#ProcesoCategoria').val();
        item["subcategoria_id"] = $('#ProcesoSubcategoria').val();
        item["especificaciones"] = $('#ProcesoEspecificaciones').val();

        $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(1)").text(item.nombre);
        $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(2)").text(item.categoria);
        $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(3)").text(item.subcategoria);
        $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(4)").text(item.cantidad);
        $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(5)").text(item.unidad);
        $("[id='EditItem-" + edit_id + "']").closest("tr").find("td:eq(6)").text(item.especificaciones);

        $.post("/items/ajax_update_item", item, function (status) {
            if (status == "OK") {
                topAlert("Ítem actualizado correctamente");
            } else if (status == "ERROR") {
                topAlert("Error al intentar actualizar", "danger");
            }
            $("[id^='ModalItem']").modal('hide');
        });
    });


    //Acción Eliminar.
    $(document).on("click", "[id^='DeleteItem']", function () {
        var pk = getNumeric($(this).attr('id'));
        delete_model_id('Item', pk);
    });


});


