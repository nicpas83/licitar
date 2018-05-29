$(document).ready(function () {



    $("#UserTipoUsuario").change(function () {
        $("#datosParticular").hide();
        $("#datosEmpresa").hide();
        var tipo = this.value;

        $("#datos" + tipo + "").show();

    }).change();

});

