$(document).ready(function () {

// For select 2
    $(".select2").select2();

    $('#itemsDelProceso').DataTable({
        "aaSorting": [],
        "dom": 'Bfrtip',
        "buttons": ['print'],
        "ordering": false,
        "columns": [
            null,
            null,
            null,
            {"width": "17%"},
            {"width": "15%"},
        ]
    });

    $(".range_01").ionRangeSlider({
        min: -50,
        max: 0,
        from: -5,
        postfix: " %",
    });
    
    $("#ofertar").click(function(){
//        event.preventDefault();
    });

});

