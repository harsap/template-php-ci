$(document).ready(function () {
    grid();

});
function grid() {
    $("#daftarUser").show();
    if (typeof myTable == 'undefined') {
        myTable = $('#daftarUser').dataTable({
            "language": {
                "lengthMenu": "Menampilkan _MENU_ data per halaman",
                "info": "Halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Data tidak tersedia" 
            },
            "bPaginate": true,
            "pagingType": "full_numbers",
            "bJQueryUI": false,
            "bProcessing": true,
            "bServerSide": true,
            "bInfo": true,
            // "sScrollY": "250px",
            "sDom": '<"top"i>Birt<"bottom"flp><"clear">',
            "bFilter": false,
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [0, 1]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0, 1]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1]
                    }
                }
            ],
            "sAjaxSource": getbasepath() + "index.php/auth/listuserbynamejson",
            "aaSorting": [[1, "asc"]],
            "fnServerParams": function (aoData) {
                aoData.push(
                        {name: get_csrf_token_name(), value: get_csrf_hash()},
                        {name: "username", value: ""}
                );
            },
            "fnServerData": function (sSource, aoData, fnCallback) {
                $.ajax({
                    "dataType": 'json',
                    "type": "POST",
                    "url": sSource,
                    "data": aoData,
                    "success": fnCallback
                });
            },
            "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull, oSettings) {
                var info = this.api().page.info();
                var page = info.page;
                var length = info.length;
                var index = (page * length + (iDisplayIndex + 1));
                $('td:eq(0)', nRow).html(index);
                var edit = "<a  href='" + getbasepath() + "/apiadmin/edit/" + aData['id'] + "'    ><i class='fa fa-edit'></i></a>"
                $('td:eq(5)', nRow).html(edit);

                var hapus = "<i  onclick='deleteData(" + aData['id'] + ")'  class='fa fa-remove'></i>";
                $('td:eq(6)', nRow).html(hapus);
                return nRow;
            },
            "aoColumns": [
                {"mDataProp": "id", "bSortable": false, sClass: " text-center"},
                {"mDataProp": "username", "bSortable": true, sDefaultContent: "-"},
                {"mDataProp": "email", "bSortable": false},
                {"mDataProp": "first_name", "bSortable": false},
                {"mDataProp": "last_name", "bSortable": false},
                {"mDataProp": "id", "bSortable": false, sClass: " text-center"},
                {"mDataProp": "id", "bSortable": false, sClass: " text-center"}
            ]
        });

        var top = "<a  href='" + getbasepath() + "index.php/auth/create_user' class='btn btn-primary' style='float: right'>Tambah Data</a>"
        $("div.top").html(top);


    } else {
        myTable._fnClearTable(0);
        myTable._fnReDraw;
    }
}