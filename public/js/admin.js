/**
 * Created by weford on 10/24/2015.
 */


function init(){
    $(document).ready( function () {
        tabInit();
        usersTable();
        rowListener();
        //selectRow();
        /*
        $( "#tabs" ).tabs({
            collapsible: true
        });*/

    } );
}



usersTable = function() {
    var table = $('#usersTable').DataTable({
        select: true
        ,ajax: {
            url: "/users",
            dataSrc:''
        }
        ,columns: [ {data: 'id'},
                    {data:'name'},
                    {data:'email'},
                    {data: 'is_admin'},
                    {data:'is_founder'},
                    {data:'is_investor'},
                    {data: 'created_at'},
                    {data:'updated_at'}
                ]
        ,"columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 3 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 4 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 5 ],
                "visible": false,
                "searchable": false
            }
        ]
       /* , buttons: [
            {
                extend: 'collection',
                text: 'Test',
                buttons: [
                    { text: 'High priority'}
                ],
                fade: true
            }
        ]*/

    });

    table.on( 'xhr', function () {
        var json = table.ajax.json();
        console.log( "JSON= " + JSON.stringify(json) );
    }).on( 'error.dt', function ( e, settings, techNote, message ) {
        console.log( 'An error has been reported by DataTables: ', message );
    } );
}

rowListener = function(){
    var dataTable =  $('#usersTable').DataTable();

    dataTable.on( 'select', function ( e, dt, type, indexes ) {
        if ( type === 'row' ) {
            var data = dataTable.rows( indexes ).data().pluck( 'id' );

            // do something with the ID of the selected items
        }
    } );

};
/*
selectRow = function(){
    $('#usersTable').DataTable( {
        select: true
    } );
}
*/
tabInit = function(){
    $(function() {
        $( "#tabs" ).tabs({
            collapsible: true
        });
    });
};



debugtest = function(){
    var table = $('#usersTable').DataTable();
    console.log( 'Data source JSON: '+table.ajax.json() );
}