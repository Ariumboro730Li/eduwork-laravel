@extends('layouts.admin')
@section('header', 'Author')

@section('css')
<!-- datatables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<div id="controller">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" @click="addData()" class="btn btn-sm btn-primary ">Create New Author</a>
                </div>
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 30px">No.</th>
                                <th class= "text-center">Nama</th>
                                <th class= "text-center">Email</th>
                                <th class= "text-center">No.telp</th>
                                <th class= "text-center">Alamat</th>
                                <th class= "text-center">Aksi</th>
                            </tr>
                        </thead>
                        <!-- <tbody>
                            @foreach($authors as $key => $author)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $author->name }}</td>
                                    <td class= "text-center">{{ $author->email }}</td>
                                    <td class= "text-center">{{ $author->phone_number }}</td>
                                    <td class= "text-center">{{ $author->address }}</td>
                                    <td class= "text-center">
                                        <a href="#" @click="editData({{ $author }})" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" @click="deleteData({{ $author->id }})" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> -->
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" :action="actionUrl" autocomplete="off" @submit="submitform($event, data.id)">
                    <div class="modal-header">

                        <h4 class="modal-title">Author</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf

                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" :value="data.name" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" :value="data.email" required="">
                            </div>
                            <div class="form-group">
                                <label>Phone_number</label>
                                <input type="number" name="phone_number" class="form-control" :value="data.phone_number" required="">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" :value="data.address" required="">
                            </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- datatables & plugins -->
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
<script type="text/javascript">
    var actionUrl = '{{ url('authors') }}';
    var apiUrl = '{{ url('api/authors') }}';
    var columns = [
        {data:'DT_RowIndex', class: 'text-center', orderable: true},
        {data:'name', class: 'text-center', orderable: true},
        {data:'email', class: 'text-center', orderable: true},
        {data:'phone_number', class: 'text-center', orderable: true},
        {data:'address', class: 'text-center', orderable: true},
        {render: function (index, row, data, meta){
            return `
                <a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">
                    Edit
                </a>
                <a href="#" class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">
                    Delete
                </a>`;
        }, orderable: false, width: '200px', class: 'text-center'},
    ];
</script>
<script src="{{ asset('js/data.js') }}"></script>

<!-- <script type="text/javascript">
    $(function () {
    $("#datatable").DataTable()
    });
</script> -->
<!-- CRUD Vue js -->
    <!-- <script type="text/javascript">
        var controller = new Vue({
            el: '#controller',
            data: {
                data : {},
                actionUrl :'{{ url('authors') }}',
                editStatus : false
            },
            mounted: function () {
            },
            methods: {
                addData() {
                    this.data = {};
                    this.actionUrl = '{{ url('authors') }}'
                    this.editStatus = false;
                    $('#modal-default').modal();
                },
                editData(data) {
                    this.data = data;
                    this.actionUrl = '{{ url('authors') }}'+'/'+data.id;
                    this.editStatus = true;
                    $('#modal-default').modal();
                },
                deleteData(id) {
                    this.actionUrl = '{{ url('authors') }}'+'/'+id;
                    if(confirm("Are you sure ?")) {
                        axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                            location.reload();
                        })
                    }
                }
            }
        });
    </script> -->
@endsection