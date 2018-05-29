$(document).ready(function () {

    $(".select2").select2();

    $("#provinciaSelect").change(function () {
        var provincia_id = this.value;

        $.get("/ubicacion/provincias/ajax_get_localidades/" + provincia_id, function (data) {
            var jdata = $.parseJSON(data);

            $('#localidadSelect').empty();
            $.each(jdata, function (loca_id, loca_nombre) {
                $('#localidadSelect').append($('<option>', {
                    value: loca_id,
                    text: loca_nombre
                }));
            });
            
        });

    });

});

