$(function () {

    $("#UserTmpCategoria").change(function () {

        var categoria_id = this.value > 0 ? this.value : false;
        $(".f_checkbox").html("");
        
        if (categoria_id) {
            $.get("/categorias/categorias/ajax_get_subcategorias/" + categoria_id, function (data) {
                var jdata = $.parseJSON(data);
                console.log(jdata);

                $.each(jdata, function (i) {
                    var html = "<div class='form-check'>";
                    html += "<label class='custom-control custom-checkbox'>";
                    html += "<input type='checkbox' name='data[User][subcategorias][" + i + "]' class='custom-control-input' value='" + i + "'>";
                    html += "<span class='custom-control-indicator'></span>";
                    html += "<span class='custom-control-description'>" + this + "</span>";
                    html += "</label>";
                    html += "</div>";
                    
                    $(".f_checkbox").append(html);
                });

            });
        }
    });

});

