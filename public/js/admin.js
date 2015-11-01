/**
 * Created by weford on 10/24/2015.
 */


function init(){
    $(document).ready( function () {
        usersTable();
        rowListener();
        tabInit();
        dialog();
        //modalInit();

    } );
}

    usersTable = function() {
        var table = $('#usersTable').DataTable({
            select: true
            ,deferRender: true
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
                        {data:'updated_at'},
                        {data:'null'},
                        {data:'null'},
                        {data:'null'},
                        {data:'null'}
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
                , {
                    "targets": -4,
                    "data": "",
                    "searchable": true
                    ,"render": function ( full, type, data, meta ) {
                        //stop();
                        if ( data.is_admin ==  1 ) {
                           return 'Admin';
                        }else if (data.is_founder ==  1 ) {
                           return 'Founder';
                        }else if (data.is_investor ==  1  ) {
                            return 'Investor';
                        }
                    }
                }
                , {
                    "targets": -3,
                    "data": "",
                    "searchable": true
                    ,"render": function ( full, type, data, meta ) {
                        //stop();
                        if ( data.is_active ==  1 ) {
                            return 'Active';
                        }else if (data.is_active ==  0 ) {
                            return 'InActive';
                        }
                    }
                }
                ,{
                    targets: -2   ,
                    data: ""
                    //,defaultContent: '<button id="edit">Edit</button>'
                    ,"render": function ( full, type, data, meta ) {
                        var userType;
                        if ( data.is_admin ==  1 ) {
                            userType = 'admin';
                        }else if (data.is_founder ==  1 ) {
                            userType = 'founder';
                        }else if (data.is_investor ==  1  ) {
                            userType = 'investor';
                        }
                        stop();
                        var id = data.id;
                        return '<a class="btn btn-default" id="edit" href ="/admin/'+userType+'/'+data.id+'/edit"'+'>Edit</a>' }
                }
                ,{
                    targets: -1   ,
                    data: ""
                    //,defaultContent: '<button id="delete">Delete</button>'
                ,"render": function ( full, type, data, meta ) {
                    stop();
                    var id = data.id;
                    return '<button id="delete" class="btn btn-default" itemId="'+data.id+'"'+'>Delete</button>'  }
                }

            ]

        });

        table.on( 'xhr', function () {
            var json = table.ajax.json();
            //console.log( "JSON= " + JSON.stringify(json) );
        }).on( 'error.dt', function ( e, settings, techNote, message ) {
            console.log( 'An error has been reported by DataTables: ', message );
        } );

    };

    stop = function(){
        return null;
    };

    rowListener = function(){
        var dataTable =  $('#usersTable').DataTable();

        dataTable.on( 'select', function ( e, dt, type, indexes ) {
        if ( type === 'row' ) {
            //var data = dataTable.rows( indexes ).data().pluck( 'id' );
            var data =dataTable.row(indexes).data();

            $("#dialog-form").dialog(/*{

                appendTo: function(data){{
                    $(this).parent().appendTo($("<tr></tr>").clone()
                        .text(data.id));
                }}

            },*/"open")

           // $("#dialog-form").dialog( "open");
        }
    } );


    dataTable.on( 'click', 'button', function (e, dt, type, indexes) {
        var data = dataTable.row( this ).id();
        var id = e.toElement.attributes[1].nodeValue;
         if(e.toElement.id == 'delete'){
            alert( "Are You Sure to DELETE ItemId= "+ id);
        }


    } );

    };

    tabInit = function(){
        $(function() {
            $( "#tabs" ).tabs({
                collapsible: true
            });
        });
    };

    modalInit = function(){
        $('#exampleModal').modal({
            show: false,
            keyboard: true
        });
    };

    debugtest = function(){
        var table = $('#usersTable').DataTable();
        console.log( 'Data source JSON: '+table.ajax.json() );
    };

    dialog =function() {
        $("#dialog-form").dialog({
            autoOpen: false,
            height: 500,
            width: 450,
            modal: true,
            buttons: {
                "Create an account": addUser,
                Cancel: function () {
                    $("#dialog-form").dialog("close");
                }
            }
            /*,close: function () {
                form[0].reset();
                allFields.removeClass("ui-state-error");
            }*/
        });
    };
//---------------------------------

 //$(
    function validateFields() {
     //var dialog, form,

     // From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
         emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
         name = $("#name"),
         email = $("#email"),
         password = $("#password"),
         allFields = $([]).add(name).add(email).add(password),
         tips = $(".validateTips");
    }

    function updateTips( t ) {
        tips
            .text( t )
            .addClass( "ui-state-highlight" );
        setTimeout(function() {
            tips.removeClass( "ui-state-highlight", 1500 );
        }, 500 );
    }

    function checkLength( o, n, min, max ) {
        if ( o.val().length > max || o.val().length < min ) {
            o.addClass( "ui-state-error" );
            updateTips( "Length of " + n + " must be between " +
                min + " and " + max + "." );
            return false;
        } else {
            return true;
        }
    }

    function checkRegexp( o, regexp, n ) {
        if ( !( regexp.test( o.val() ) ) ) {
            o.addClass( "ui-state-error" );
            updateTips( n );
            return false;
        } else {
            return true;
        }
    }

    function addUser() {
        var valid = true;
        allFields.removeClass( "ui-state-error" );

        valid = valid && checkLength( name, "username", 3, 16 );
        valid = valid && checkLength( email, "email", 6, 80 );
        valid = valid && checkLength( password, "password", 5, 16 );

        valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
        valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
        valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );

        if ( valid ) {
            $( "#users tbody" ).append( "<tr>" +
                "<td>" + name.val() + "</td>" +
                "<td>" + email.val() + "</td>" +
                "<td>" + password.val() + "</td>" +
                "</tr>" );
            dialog.dialog( "close" );
        }
        return valid;
    }