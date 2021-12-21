$("#btn_cancel").on("click", function() {
    location.href = '/people';
});

$("#create_person_form").on("submit", function (event) {
    event.preventDefault();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData = new FormData(this);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': token },
        type : 'POST',
        data: formData,
        url  : '/people/create',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            if (data.code === 200) {
                console.log(data);
                alert("Person created.");
                // location.href = '/people';
            } else {
                alert(data.message);
            }
        }
    });
});

$("#edit_person_form").on("submit", function (event) {
    event.preventDefault();
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData = new FormData(this);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': token },
        type : 'POST',
        data: formData,
        url  : '/people/edit',
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            console.log(data);
            if (data.code === 200) {
                alert("Person updated.");
                location.href = '/people';
            } else {
                alert(data.message);
            }
        }
    });
});

$('#btn_delete_person').on('click', function(event) {
    event.preventDefault();
    var token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        headers: { 'X-CSRF-TOKEN': token },
        type : 'DELETE',
        url  : '/people/delete/' + $('#personID').val(),
        dataType: 'JSON',
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(){
            return confirm("Are you sure?");
        },
        success: function(data){
            console.log(data);
            if (data.code === 200) {
                alert("Person deleted.");
                location.href = '/people';
            } else {
                alert(data.message);
            }
        }
    });
});

function to_date_time(date) {
    let tanggal = new Date(date);
    return tanggal.getFullYear()+"-"
        + (tanggal.getMonth()+ 1 > 9 ? (tanggal.getMonth()+ 1).toString() : "0" + (tanggal.getMonth()+ 1).toString())
        +"-"
        +(tanggal.getDate() > 9 ? tanggal.getDate().toString() : "0" + tanggal.getDate().toString())
        + " "
        +(tanggal.getUTCHours().toString() > 9 ? tanggal.getUTCHours().toString() : "0" + tanggal.getUTCHours().toString())
        + ":" + (tanggal.getUTCMinutes().toString() > 9 ? tanggal.getUTCMinutes().toString() : "0" + tanggal.getUTCMinutes().toString())
        + ":" + (tanggal.getUTCSeconds().toString() > 9 ? tanggal.getUTCSeconds().toString() : "0" + tanggal.getUTCSeconds().toString());
}

function init_data_table() {
    let table = $('#dt_people');
    if (table != null) {
        table.DataTable({
            order:[2,'asc'],
            responsive: {
                details: {
                    renderer: function ( api, rowIdx, columns ) {
                        var data = $.map( columns, function ( col, i ) {
                            return col.hidden ?
                                '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                '<td>'+col.title+''+'</td> '+
                                '<td>'+col.data+'</td>'+
                                '</tr>' :
                                '';
                        } ).join('');

                        return data ?
                            $('<table/>').append( data ) :
                            false;
                    },
                }
            },
            processing: true,
            className: 'details-control',
            responsivePriority: 1,
            serverSide: true,
            scrollX: true,
            ajax: {
                url: '/people/dt',
                type: "GET",
                data: function ( d ) {
                    d.myKey = "myValue";
                    d._token = $('meta[name="csrf-token"]').attr('content');
                }
            },
            columns: [
                { defaultContent: '<td></td>' },
                { data: 'DT_RowIndex', name: 'DT_RowIndex'},
                { data: 'email', name: 'email'},
                { data: 'phone', name: 'phone'},
                { data: 'avatar', name: 'avatar'},
                { data: 'organization.name', name: 'organization.name'},
                { data: 'created_by', name: 'created_by'},
                { data: 'created_at', name: 'created_at'},
            ],
            columnDefs: [
                {
                    targets: 0,
                    className: "text-right",
                },
                {
                    targets: 1,
                    className: "text-center",
                },
                {
                    targets: 5,
                    searchable: true,
                    render: function (data, type, full, meta) {
                        return '<a href="/organization/edit/'+full['organization'].id+'">'+data+'</a>'
                    }
                },
                {
                    targets: 2,
                    searchable: true,
                    render: function (data, type, full, meta) {
                        return '<a href="/people/edit/'+full.id+'">'+data+'</a>'
                    }
                },
                {
                    targets: 3,
                    searchable: true,
                },
                {
                    targets: 4,
                    className: "text-center",
                    render: function(data, type, full, meta) {
                        return '<img src="/storage/'+data+'" height="100" width="100">'
                    }
                },
                {
                    targets: 6,
                    className: "text-center",
                },
                {
                    targets: 7,
                    className: "text-center",
                    render: function(data, type, full, meta) {
                        return to_date_time(data);
                    }
                },
            ],
        });
    }
}

$(document).ready(function() {
    init_data_table();
    $('#kt_select2_1').select2();
});


