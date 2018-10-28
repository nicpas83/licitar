$(document).ready(function () {

    $(".select2").select2();

    //CATEGORIA - SUBCATEGORIAS
    $("#ProcesoCategoria").change(function () {
        var categoria_id = this.value;
        change_subcategoria(categoria_id);
    });
    $(document).on('focus', '.select2', function (e) {
        $(this).siblings('select').select2('open');
    });

});

function change_subcategoria(categoria_id, subcategoria_id = null) {
    $.get("/categorias/categorias/ajax_get_subcategorias/" + categoria_id, function (data) {
        var jdata = $.parseJSON(data);
        $('#ProcesoSubcategoria').empty();
        var options = "";

        $.each(jdata, function (subcat_id, subcat_nombre) {
            if (subcategoria_id) {
                if (subcategoria_id == subcat_id) {
                    options += "<option value='" + subcat_id + "' selected='selected'>" + subcat_nombre + "</option>";
                } else {
                    options += "<option value='" + subcat_id + "'>" + subcat_nombre + "</option>";
                }
            } else {
                options += "<option value='" + subcat_id + "'>" + subcat_nombre + "</option>";
            }
        });
        $('#ProcesoSubcategoria').append(options);
        //auto-open solo cuando no es edit.
        if (subcategoria_id == null) {
            $('#ProcesoSubcategoria').focus();
        }
    });
}


