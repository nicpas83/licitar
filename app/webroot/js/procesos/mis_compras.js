$(function () {

    //Responder preguntas
    $("ul button").click(function () {
        var params = {
            "pk": getNumeric($(this).attr('id')),
            "respuesta": $(this).closest('li').find('textarea').val()
        };
        $(this).closest('li').remove();
        $.post("/preguntas/ajax_set_respuesta", params);

    });

});

