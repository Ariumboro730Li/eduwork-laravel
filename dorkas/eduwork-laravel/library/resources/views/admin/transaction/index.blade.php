@extends('layouts.admin')
@section('header', 'Transaction')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<div id="controller">
    <div class="row">
        <div class="col-lg-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if ($message = Session::get('delete'))
            <div class="alert alert-primary alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                        <a href="{{url('transactions/create')}}"
                        class="btn btn-sm btn-primary pull-right">Create New Transaction</a>
                        </div>
                        <div class="col-2">
                            <select class="form-control" name="status">
                                <option value="">All </option>
                                <option value="1">Sudah kembali</option>
                                <option value="2">Belum kembali</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <input type="date" class="form-control" name="date">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <!-- <table class="table table-bordered"> -->
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">id</th>
                                <th class= "text-center">Tanggal Pinjam</th>
                                <th class= "text-center">Tanggal Kembali</th>
                                <th class= "text-center">Nama Peminjam</th>
                                <th class= "text-center">Lama Pinjam (hari)</th>
                                <th class= "text-center">Total Buku</th>
                                <th class= "text-center">Total Bayar</th>
                                <th class= "text-center">Status</th>
                                <th class= "text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endcan
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Page specific script -->
<script>
    // $(function () {
    //     $("#dataTable").DataTable();
    // });
</script>

<script>
    var actionUrl = `{{ url('transactions'); }}`
    var apiUrl = `{{ url('api/transactions'); }}`
    var columns = [
        {data: 'DT_RowIndex', orderable: true},
        {data: 'date_start', orderable: false},
        {data: 'date_end', orderable: false},
        {data: 'member.name', orderable: false},
        {data: 'duration', orderable: false},
        {data: 'transaction_details.length', orderable: false},
        {data: 'price', orderable: false},
        {data: 'statusTransaction', orderable: false},
        {render: function(index, row, data, meta) {
            return `
            <a href="${actionUrl}/${data.id}" class="badge bg-info py-2 px-3 mb-2">
                <i class="fas fa-eye"></i>
            </a>
            <a href="${actionUrl}/${data.id}/edit" class="badge bg-warning py-2 px-3 mb-2">
                <i class="fas fa-edit"></i>
            </a>
            <a href="#" class="badge bg-danger py-2 px-3 mb-2" onclick="controller.deleteData(event, ${data.id})">
                <i class="fas fa-trash-alt"></i>
            </a>`
        }, width: '150px', orderable: false}
    ]
</script>

<!-- CRUD VueJs -->
<script src="{{ asset('js/data.js') }}"></script>

<!-- Filter Script -->
<script>
    $('select[name=status]').on('change', function() {
        let status = $('select[name=status]').val();
        if (status == '') {
            controller.table.ajax.url(apiUrl).load()
        } else {
            controller.table.ajax.url(`${apiUrl}?status=${status}`).load()
        }
    })
    $('input[name=date]').on('change', function() {
        let date= $('input[name=date]').val();
        console.log(date)
        if (date == '') {
        controller.table.ajax.url(apiUrl).load()
        } else {
        controller.table.ajax.url(`${apiUrl}?date_start=${date}`).load()
        }
    })
</script>
@endsection
