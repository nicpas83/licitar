$(document).ready(function () {

// For select 2
    $(".select2").select2();

    $('#itemsDelProceso').DataTable({
        "aaSorting": [],
        "dom": 'Bfrtip',
        "buttons": [
            'copy', 'excel', 'print'
        ],
        "ordering": false,
        "columns": [
            null,
            null,
            null,
            null,
            {"width": "17%"},
            {"width": "15%"},
        ]
    });

});

