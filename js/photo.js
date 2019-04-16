$ = jQuery;
jQuery(document).ready(function() {
    $('#example').DataTable({
        "searching": false,
        "lengthChange": false,
        "pagingType": "full_numbers",
        "info": false,
        "language": {
            "paginate": {
                "previous": "<",
                "first": "<<",
                "next": ">",
                "last": ">>"
            }
        },
        "columns": [
            { "width": "10%" },
            { "width": "10%" },
            { "width": "30%" , "style":"text-align:left" },
            { "width": "10%" },
            { "width": "10%" },
            { "width": "10%" },
            { "width": "10%" },
            { "width": "10%" },
        ],
    });
} );


