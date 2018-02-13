$(document).ready(function () {

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
            {"width": "15%"},
            null,
        ]
    });

});

