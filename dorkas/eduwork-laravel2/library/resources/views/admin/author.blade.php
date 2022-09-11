@extends('layouts.admin')
@section('header', 'Author')

@section('css')
<!--Datatables-->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
</style>
@endsection

@section('content')
<div id="controller">
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-15">
                <div class="card">
                    <div class="card-header">
                    <a href="#" @click="addData()" data-target="#modal-default" data-toggle="modal" class="btn btn-sm btn-primary pull-right">Create New Author</a>
                    </div>

<div class="card-body p-0">
    <table id="example2" class="table table-striped">
    <thead>
        <tr>
            <th style="width: 30px">No.</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Address</th>
            <th class="text-center">Created At</th>
            <th class="text-center">Updated At</th>
            <th class="text-center">Total Books</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    <tbody>
            @foreach($authors as $key => $author)
        <tr>
            <td>{{ $key+1 }}</td>
            <td class="text-center">{{ $author->name }}</td>
            <td class="text-center">{{ $author->email }}</td>
            <td class="text-center">{{ $author->phone_number }}</td>
            <td class="text-center">{{ $author->address }}</td>
            <td class="text-center">{{ date('H:i:s - d M Y', strtotime ($author->created_at)) }}</td>
            <td class="text-center">{{ date('H:i:s - d M Y', strtotime ($author->updated_at)) }}</td>
            <td class="text-center">{{ count ($author->books) }}</td>
            <td class="text-center">
        <a href="#"; @click="editData({{ $author }})" class="btn btn-warning btn-sm">Edit</a>
        <a href="#"; @click="deleteData({{ $author->id }})" class="btn btn-danger btn-sm">Delete</a>

        </form>
    </td>
</tr>
    @endforeach

</tbody>
</table>
</div>



    {{-- <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
    </div> --}}
</div>
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
          <form method="post" :action="actionUrl" autocomplete="off">
        <div class="modal-header">
            <h4 class="modal-title">Author</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                        <div class="modal-body">
                                @csrf

                            <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                            <div class="card-body">
                                <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" :value="data.name" required="">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter email":value="data.email"  required="">
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" placeholder="Enter phone number" :value="data.phone_number" required="">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter address" :value="data.address" required="">
                            </div>
                    </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
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
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //$('#example2').DataTable({
    //  "paging": true,
    //  "lengthChange": false,
    //  "searching": false,
    //  "ordering": true,
    //  "info": true,
    //  "autoWidth": false,
    //  "responsive": true,
    //});
  });
<!-- Crud Vue js -->
        <script type="text/javascript">
            var controller = new Vue({
                el: '#controller',
                data: {
                    data : {},
                    actionUrl : '{{ url('authors') }}'
                    editStatus : false

                },
                mounted: function () {

                },
                methods: {
                    addData() {
                        this.data = {};
                        this.actionUrl = '{{ url('authors') }}';
                        this.editStatus = false;
                        $('#modal-default').modal();
                    },
                    editData(data) {
                        this.data = data;
                        this.actionUrl = '{{ url('authors') }}'+'/'+data.id;
                        this.editStatus = true
                        $('#modal-edit').modal();
                    },
                    deleteData(id) {
                        this.actionUrl = '{{ url('authors') }}'+'/'+id;
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
