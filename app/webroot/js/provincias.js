$(document).ready(function () {

    function darLocalidades(provincia_id)
    {
        $.get("/ubicacion/provincias/ajax_get_localidades/" + provincia_id, function (data) {
            var jdata = $.parseJSON(data);

            $('#localidadSelect').empty();
            $.each(jdata, function (loca_id, loca_nombre) {

                $('#localidadSelect').append($('<option>', {
                    value: loca_id,
                    text: loca_nombre
                }));

                if($("#aux_localidad").val() == loca_id)
                {
                    $('#localidadSelect').val(loca_id);
                    $('#localidadSelect').select2().trigger('change');
                }
            });

        });
    }

    $(".select2").select2();

    $("#provinciaSelect").change(function () {
        var provincia_id = this.value;
        darLocalidades(provincia_id)
    });

    if($("#provinciaSelect").val() != "")
        darLocalidades($("#provinciaSelect").val())


});

