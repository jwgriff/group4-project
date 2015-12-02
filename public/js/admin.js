/**
 * Created by weford on 10/24/2015.
 */


function init(){
    $(document).ready( function () {
       usersTable();
        rowListener();
        tabInit();
        msgFadeOut();
        campaignTable();

    } );
}

    usersTable = function() {
        var usrTable = $('#usersTable').DataTable({
            select: true
            ,deferRender: true
            ,ajax: {
                url: "/users",
                dataSrc:''
                ,xhrFields: {
                    withCredentials: true
                }
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
                        var userType = getUserType(data);
                        //stop();
                        var id = data.id;
                        return '<a class="btn btn-default" id="edit" href ="/admin/details/'+userType+'/'+data.id+'"'+'>Detail</a>'
                    }
                }
                ,{
                    targets: -1   ,
                    data: ""
                    //,defaultContent: '<button id="delete">Delete</button>'
                ,"render": function ( full, type, data, meta ) {
                        var userType = getUserType(data);
                        //stop();
                        var id = data.id;
                        return '<a class="btn btn-default" id="delete" href ="/admin/delete/'+userType+'/'+id+'"'+'>Delete</a>'
                    }
                }

            ]

        });

        usrTable.on( 'xhr', function () {
            var json = usrTable.ajax.json();
            //console.log( "USR-JSON= " + JSON.stringify(json) );
        }).on( 'error.dt', function ( e, settings, techNote, message ) {
            console.log( 'An error has been reported by DataTables: ', message );
        } );

    };

    stop = function(){
        return null;
    };

    getUserType = function(data){
        var userType;
        if ( data.is_admin ==  1 ) {
            userType = 'admin';
        }else if (data.is_founder ==  1 ) {
            userType = 'founder';
        }else if (data.is_investor ==  1  ) {
            userType = 'investor';
        }
        return userType;
    };

    rowListener = function(){
        var usrTable =  $('#usersTable').DataTable();

        usrTable.on( 'select', function ( e, dt, type, indexes ) {
        if ( type === 'row' ) {
            //var data = usrTable.rows( indexes ).data().pluck( 'id' );
            var rowData =usrTable.row(indexes).data();
            var userType = getUserType(rowData);
            var url = 'admin/ajaxUser/'+ userType +'/'+ rowData.id+'';
            var obj = null;
            // admin/ajax/{userType}/{id}
            $.ajax({
                url: url,
                success: function(data) {
                    //console.log(data);
                   // console.log(loadTable(userType, data));
                    //$("#dialog-form").load(loadTable(userType, data)).dialog({modal:true}).dialog('open');
                }
            }).done(function( data) {
                obj = data;
                console.log(data);
                console.log(loadTable(userType, data));
                $("#dialog-form").append(loadTable(userType, data)).dialog({
                    autoOpen: false,
                    height: 500,
                    width: 650,
                    modal: true,
                    buttons: {
                        Cancel: function () {
                            $("#dialog-form").empty().dialog("close");
                        }
                    }
                }).dialog('open');

            });
        }
    } );


    usrTable.on( 'click', 'button', function (e, dt, type, indexes) {
        var data = usrTable.row( this ).id();
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
        var usrTable = $('#usersTable').DataTable();
        console.log( 'Data source JSON: '+usrTable.ajax.json() );
    };

    msgFadeOut = function(){
        $("#alert").fadeOut( 5000, function() {
            // Animation complete.
        });
    };

    loadTable = function(userType, data){
        var table = null;
        var table = '<table class="display" width="80%">';
        if(userType == 'admin'){
            table+=loadRow('UserType', userType);
            table+=loadRow('ID', data.id);
            table+=loadRow('First Name', data.fname);
            table+=loadRow('Last Name', data.lname);
            table+=loadRow('Home Address', data.home_street);
            table+=loadRow('City', data.home_city);
            table+=loadRow('State', data.home_state);
            table+=loadRow('Zip', data.home_zip);
            table+=loadRow('Phone', data.home_phone);
            table+=loadRow('Security Level', data.security_level);

        }else if (userType == 'founder'){
            table+=loadRow('UserType', userType);
            table+=loadRow('ID', data.id);
            table+=loadRow('First Name', data.fname);
            table+=loadRow('Last Name', data.lname);
            table+=loadRow('Last Name', data.company_name);
            table+=loadRow('Company Address', data.company_street);
            table+=loadRow('City', data.company_city);
            table+=loadRow('State', data.company_state);
            table+=loadRow('Zip', data.company_zip);
            table+=loadRow('Phone', data.company_phone);
            table+=loadRow('Industry', data.company_industry);
            table+=loadRow('Market Cap.', data.company_mktcap);

        }else if (userType == 'investor'){
            table+=loadRow('UserType', userType);
            table+=loadRow('ID', data.id);
            table+=loadRow('First Name', data.fname);
            table+=loadRow('Last Name', data.lname);
            table+=loadRow('Profile Name', data.profile_name);
            table+=loadRow('Address', data.street);
            table+=loadRow('City', data.city);
            table+=loadRow('State', data.state);
            table+=loadRow('Zip', data.zip);
            table+=loadRow('Phone', data.phone);
            table+=loadRow('Invst Objective', data.invst_objective);
            table+=loadRow('Invst Amount', data.invst_amount_total);
        }
        return table+='</table>';
    };


    loadRow = function(label, data){
        return '<tr class="dlogrow">'
            + getTH(label)
            + getTD(data)
            + '</tr>';
    };

    getTH = function(label){
        return '<th>' +label+ ':</th>';
    };
    getTD = function(data){
        return '<td>'+ data+ '</td>';
    };

//---------------------------------User Tab: END

//START---------------------------------
/*
 Campaign Tab
 */

campaignTable = function() {
    var cmpgnTable = $('#campaignTable').DataTable({
        select: true
        ,deferRender: true
        ,ajax: {
            url: "/campaign"
            ,dataSrc:''
            ,xhrFields: {
                withCredentials: true
            }
        }
        ,columns: [
            {data: 'id'},
            {data:'campaign_name'},
            {data:'description'},
            {data:'start_date'},
            {data:'end_date'},
            {data:'target_goal'},
            {data:'target_current'},
            {data:'acct_number'},
            {data:'is_active'},
            {data:'null'},
            {data:'null'}
        ]
        ,"columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }
            ,{
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
                    //stop();
                    var id = data.id;
                    return '<a class="btn btn-default" id="edit" href ="/admin/edit/campaign/'+data.id+'"'+'>Edit</a>'
                }
            }
            ,{
                targets: -1   ,
                data: ""
                //,defaultContent: '<button id="delete">Delete</button>'
                ,"render": function ( full, type, data, meta ) {
                    stop();
                    var id = data.id;
                    return '<a class="btn btn-default" id="delete" href ="/admin/delete/campaign/'+id+'"'+'>Delete</a>'
                }
            }

        ]

    });

    cmpgnTable.on( 'xhr', function () {
        var json = cmpgnTable.ajax.json();
        //console.log( "CMPGN-JSON= " + JSON.stringify(json) );
    }).on( 'error.dt', function ( e, settings, techNote, message ) {
        console.log( 'An error has been reported by DataTables: ', message );
    } );

};

//-------------------------------------------CAMPAIGN TABLE: END


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

