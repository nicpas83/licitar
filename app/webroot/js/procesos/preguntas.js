$(function () {
    var pk = $("#ModelPk").val();

    $("#preguntar").click(function () {
        var pregunta = $.trim($("#pregunta").val());
        var palabras = $.trim($("#pregunta").val()).split(' ');
        
        if (palabras.length < 3) {
            swal("Tu pregunta no parece una preguna válida...");
            return;
        }

        var params = {
            "pk": pk,
            "pregunta": pregunta
        };

        $.post("/preguntas/ajax_nueva_pregunta", params, function (data) {
            swal(data);
            var pregunta = $("#pregunta").val();
            $("#pregunta").val("");
            
        });

    });

});

