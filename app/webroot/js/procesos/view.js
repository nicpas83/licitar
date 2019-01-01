$(function () {

    $('#itemsDelProceso').DataTable({
        pageLength: 25,
        aaSorting: [],
        dom: 'Bfrtip',
        buttons: [{
                extend: 'excel',
                text: '',

            }],
        language: {
            search: "_INPUT_",
            searchPlaceholder: " Buscar...",
        },
        columns: [
            {"width": "30%"},
            {"width": "30%"},
            null,
            null,
            {"width": "15%"},
            {"width": "20%"},
        ]
    });
    
    $("a.buttons-excel span").html(btn_download);

//    $(".range_01").ionRangeSlider({
//        min: -50,
//        max: 0,
//        from: 0,
//        postfix: " %",
//    });

    $("#ofertar").click(function () {
//        event.preventDefault();
    });

});

