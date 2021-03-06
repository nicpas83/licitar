function edit_btn(modelPk) {
    var html = "<button title='Editar' class='btn btn-info fa fa-edit pull-right' type='button' id='Edit" + modelPk + "'></button>";
    return html;
}
function del_btn(modelPk) {
    var html = "<button title='Eliminar' class='btn btn-danger fa fa-trash-alt pull-right' type='button' id='Delete" + modelPk + "'></button>";
    return html;
}

function finalizar_btn(event) {
    event.preventDefault();

    swal({
        title: "Atención",
        text: 'Desea finalizar la publicación?',
        type: "warning",
        buttons: true,
        dangerMode: true,
        showCancelButton: true,
        confirmButtonText: 'Ok!',
        cancelButtonText: "Cancelar",
    }, function () {
        $.post(event.target.href, function (data) {
            if (data == "OK") {
                swal("Publicación Finalizada!", "success");
                $(location).attr('href', WWW + "procesos/mis_compras");
                return;
            } else {

            }
        });
    });

}
function delete_model_id(model, id, plugin = "") {
    var controller = underscore(getPlural(model));
    var pk = {"id": id};
    swal({
        title: "Atención",
        text: "Está seguro que desea eliminar?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        showCancelButton: true,
        confirmButtonText: 'Ok!',
        cancelButtonText: "Cancelar"
    }, function () {
        $.post(WWW + plugin + "/" + controller + "/ajax_delete", pk, function () {
            topAlert('Registro eliminado.', 'danger');
            $("[id='Delete" + model + "-" + id + "']").closest('tr').remove();
            reindexTable(model);
        });
    });
}
function reindexTable(model) {

    $("[id^='Table" + model + "'] tbody tr").each(function (i) {
        $(this).find("td:eq(0)").text("" + (i + 1) + "");
    });

}