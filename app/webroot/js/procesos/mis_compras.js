var btn_download = "<i class='fas fa-download'></i>";

$(function () {

    $('table').DataTable({
        pageLength: 5,
        aaSorting: [],
        dom: 'Bfrtip',
        buttons: [{extend: 'excel', text: ''}],
        ordering: false,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Buscar...",
        }
    });

    $("a.buttons-excel span").html(btn_download);


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

