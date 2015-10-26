/**
 * Created by weford on 10/24/2015.
 */


function init(){
    $(document).ready( function () {
        tabInit();
        usersTable();

        //  $('#usersTable').DataTable();
        $( "#tabs" ).tabs({
            collapsible: true
        });

    } );
}



usersTable = function() {
    var table = $('#usersTable').DataTable({
        ajax: {
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
    });

    table.on( 'xhr', function () {
        var json = table.ajax.json();
        console.log( "JSON= " + JSON.stringify(json) );
    }).on( 'error.dt', function ( e, settings, techNote, message ) {
        console.log( 'An error has been reported by DataTables: ', message );
    } );
}



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