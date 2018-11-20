$(function () {


    
    $('#procesosIndex').DataTable({
        "pageLength": 50,
        "aaSorting": [],
        "dom": 'Bfrtip',
        "buttons": ['print', 'excel'],
        "ordering": false,
    });

});

