$(document).ready(function () {

// For select 2
    $(".select2").select2();
    
    $('#misProcesos').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

});

