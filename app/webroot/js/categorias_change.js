$(document).ready(function () {

    $(".select2").select2();

    //CATEGORIA - SUBCATEGORIAS
    $("#ProcesoTmpCategoria").change(function () {
        var categoria_id = this.value;
        change_subcategoria(categoria_id);

    });

});

function change_subcategoria(categoria_id, subcategoria_id = null) {
    $.get("/categorias/categorias/ajax_get_subcategorias/" + categoria_id, function (data) {
        var jdata = $.parseJSON(data);
        $('#ProcesoTmpSubcategoria').empty();
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
        $('#ProcesoTmpSubcategoria').append(options);
    });
}

