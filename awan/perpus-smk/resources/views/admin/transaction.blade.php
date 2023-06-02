@extends('layouts.admin')
@section('header', 'Transaction')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@section('css')
    
@endsection

@section('content')
<div id="controller">
    <div class="container-fluid px-4">
        <a href="#" @click="addData()" class="btn btn-sm btn-primary mb-2">Create New</a>
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
        {data: 'nama_peminjam', class: 'text-center', orderable: true},
        {data: 'email', class: 'text-center', orderable: true},
        {data: 'phone_number', class: 'text-center', orderable: true},
        {data: 'address', class: 'text-center', orderable: true},
        {data: 'status', class: 'text-center', orderable: true},
        {render: function (index, row, data, meta) {
            return `
            <a href="#" onclick="controller.editData(event, ${meta.row})" class="btn btn-sm btn-warning">Edit</a>
            <a href="#" onclick="controller.deleteData(event, ${data.id})" class="btn btn-sm btn-danger">Delete</a>`;
        }, orderable: false, width: '110px', class: 'text-center'},
    ];
</script>
<script src="{{ asset('js/data.js') }}"></script>
@endsection