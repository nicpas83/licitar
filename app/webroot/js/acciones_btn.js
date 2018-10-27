function edit_btn(modelPk) {
    var html = "<button title='Editar' class='btn btn-info fa fa-edit pull-right' type='button' id='Edit" + modelPk + "'></button>";
    return html;
}
function del_btn(modelPk) {
    var html = "<button title='Eliminar' class='btn btn-danger fa fa-trash-alt pull-right' type='button' id='Delete" + modelPk + "'></button>";
    return html;
}

function delete_model_id(model, id) {
    var controller = underscore(pluralize(model));
    var pk = {"id": id};
    swal({
        title: "Atención",
        text: "Está seguro que desea eliminar?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        showCancelButton: true,
        confirmButtonText: 'Ok!',
        cancelButtonText: "Cancelar",
    }, function () {
        $.post("/" + controller + "/ajax_delete", pk, function () {
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