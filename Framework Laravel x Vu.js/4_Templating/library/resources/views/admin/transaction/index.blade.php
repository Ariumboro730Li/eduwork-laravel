@extends('layouts.admin')
@section('header', 'Transaction')


@section('css')
<!--Datatables-->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<section class="content">
    <div id="controller">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-15">
                    <div class="card">
                        <div class="card-header">
                            <a href="#"
                            @click="addData()"
                            {{-- data-target="#modal-default" data-toggle="modal"  --}}
                            class="btn btn-sm btn-primary pull-right">Create New transaction</a>
                        </div>

                        <div class="card-body p-100">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 30px">No.</th>
                                        <th class="text-center">Member ID</th>
                                        <th class="text-center">Date Start</th>
                                        <th class="text-center">Date End</th>
                                        <th class="text-center">Created At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>

{{-- ganti api                  <tbody>
                                    @foreach($transactions as $key => $transaction)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td class="text-center">{{ $transaction->member_id }}</td>
                                            <td class="text-center">{{ $transaction->date_start }}</td>
                                            <td class="text-center">{{ $transaction->date_end }}</td>
                                            <td class="text-center">{{ convert_date($transaction->created_at) }}</td>
                                            <td class="text-center">{{ date('H:i:s - d M Y', strtotime ($transaction->updated_at)) }}</td>
                                            <td class="text-center">{{ count ($transaction->books) }}</td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" @click='editData({{ $transaction }})' class="btn btn-warning btn-sm">Edit</a>
                                                <a href="javascript:void(0)" @click='deleteData({{ $transaction["id"] }})' class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>    --}}
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            {{-- <form method="post" action="{{ route('transactions.store') }}" autocomplete="off"> --}}
                                <form method="post" :action="actionUrl" autocomplete="off" @submit="submitForm($event, data.id)">
                                <div class="modal-header">
                                    <h4 class="modal-title">transaction</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                            </div>
                                                <div class="modal-body">
                                                        @csrf

                                                    <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                                                    <div class="card-body">
                                                        <div class="form-group">
                                                        <label>Member ID</label>
                                                        <input type="text" name="member_id" class="form-control" placeholder="Enter Member ID" :value="data.member_id" required="">
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="form-group">
                                                        <label>Date Start</label>
                                                        <input type="text" name="date_start" class="form-control" placeholder="Enter Date Start" :value="data.date_start" required="">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Date End</label>
                                                        <input type="text" name="date_end" class="form-control" placeholder="Enter Date End":value="data.date_end"  required="">
                                                    </div>

                                            </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<!-- Data Table & Plugin -->
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
<script type ="text/javascript">
    var actionUrl = '{{ url('transactions') }}';
    var apiUrl = '{{ url('api/transactions') }}';

    var columns = [
        {data: 'DT_RowIndex',  class: 'text-center', orderable: true},
        {data: 'member_id', width: '1000px', class: 'text-center', orderable: true},
        {data: 'date_start', width: '100px', class: 'text-center', orderable: true},
        {data: 'date_end', width: '1000px', class: 'text-center', orderable: true},
        {data: 'date', width: '1000px', class: 'text-center', orderable: true},
        {render: function (index, row, data, meta) {
            return `
                <a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">
                Edit
                </a>
                <a class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">
                Delete
                </a>`;
        }, orderable: false, width: '1000px', class: 'text-center'},
    ];
</script>
<script src="{{ asset('js/data.js') }}"></script>



<!-- ditahan 
<script type="text/javascript">
  $(function () {
    $("#datatable").DataTable({
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

//Crud Vue js
<script type="text/javascript">
    var controller = new Vue({
        el: '#controller',
        data: {
            data : {},
            actionUrl : '{{ url('transactions') }}',
            editStatus : false

        },
        mounted: function () {

        },
        methods: {
            addData() {
                this.data = {};
                this.actionUrl = '{{ url('transactions') }}';
                this.editStatus = false;
                $('#modal-default').modal();
            },
            editData(data) {
            // editData(id) {
                console.log(data);
                this.data = data;
                this.actionUrl = '{{ url('transactions') }}'+'/'+data.id;
                this.editStatus = true
                $('#modal-default').modal();
            },
            deleteData(id) {
                this.actionUrl = '{{ url('transactions') }}'+'/'+id;
                if (confirm("are you sure ?")) {
                    axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                        location.reload();
                    });
                }
            }

        }
    });
</script>
@endsection