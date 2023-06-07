@extends('layouts.admin')
@section('header', 'Transaction')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@section('css')
    
@endsection

@section('content')
<div id="controller">
    <div class="container-fluid px-4">
        <div class="row mb-2">
            <div class="col-md-2">
                <a href="{{ url('transactions/create') }}" class="btn btn-sm btn-primary mb-2">Create New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped" id="dataTable">
                    <thead>
                    <tr>
                        <th class="text-center">Tanggal Pinjam</th>
                        <th class="text-center">Tanggal Kembali</th>
                        <th class="text-center">Nama Peminjam</th>
                        <th class="text-center">Lama Pinjam(Hari)</th>
                        <th class="text-center">Total Buku</th>
                        <th class="text-center">Total Bayar</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
{{-- <script>
    $(document).ready(function () {
    $('#dataTable').DataTable();
});
</script> --}}
<script>
    var actUrl = '{{ url('transactions') }}';
    var apiUrl = '{{ url('api/transactions') }}';

    var columns = [
        {data: 'date_start', class: 'text-center', orderable: true},   
        {data: 'date_end', class: 'text-center', orderable: true},   
        {data: 'name', class: 'text-center', orderable: true},
        {data: 'lama_hari', class: 'text-center', orderable: true},
        {data: 'qty', class: 'text-center', orderable: true},
        {data: 'price', class: 'text-center', orderable: true},
        {data: 'status', class: 'text-center', orderable: false},
        {render: function (index, row, data, meta) {
            // console.log(data.status);
            return `
            <a href="{{ url('transactions')}}/${data.id}" class="btn btn-sm btn-info">Detail</a>
            <a href="{{ url('transactions')}}/${data.id}/edit" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ url('transactions') }}/${data.id}" method="post" class="d-inline-block">
                <input class="btn btn-sm btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                @method('delete')
                @csrf
            </form>`;
        }, orderable: false, width: '170px', class: 'text-center'},
    ];
</script>
<script src="{{ asset('js/data.js') }}"></script>
@endsection