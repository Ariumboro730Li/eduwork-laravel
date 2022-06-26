function getIncome() {
    table = $('#datatable-income').DataTable({
        processing: true,
        serverSide: true,
        destroy: true,
        orderCellsTop: true,
        lengthMenu: [12],
        ajax: {
            "url": `${configView.url}/income/data-table`,
            'type': 'get',
            'headers': {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        },
        columns: [
            { data: "DT_RowIndex", orderable: true, searchable: false },
            { data: "category" },
            { data: "note" },
            { data: "total" },
            { data: "created_at" },
            { data: "action" },
        ],
        rowCallback: function(nRow, aData, iDisplayIndex) {},
    });
}