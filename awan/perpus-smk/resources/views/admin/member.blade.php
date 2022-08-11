@extends('layouts.admin')
@section('header', 'Member')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div id="controller">
    <div class="container-fluid px-4">
        <a href="#" @click="addData()" class="btn btn-sm btn-primary mb-2">Create New</a>
        <table class="table table-striped" id="dataTable">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Kelamin</th>
                <th class="text-center">Nomer HP</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Email</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
        </table>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" :action="actUrl" @submit="submitForm($event, data.id)">
                        @csrf

                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" :value="data.name" required>
                            
                            <label class="form-label">Kelamin</label><br>
                            <input :checked="data.gender == `M`" type="radio" name="gender" id="M" value="M">
                            <label for="M">Laki-laki</label>
                            <input :checked="data.gender == `F`" type="radio" name="gender" id="F" value="F">
                            <label for="F">Perempuan</label><br>                            
                            
                            <label class="form-label">Nomer HP</label>
                            <input type="text" name="phone_number" class="form-control" :value="data.phone_number" required>
                            
                            <label class="form-label">Alamat</label>
                            <input type="text" name="address" class="form-control" :value="data.address" required>
                            
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" :value="data.email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
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
    var actUrl = '{{ url('members') }}';
    var apiUrl = '{{ url('api/members') }}';

    var columns = [
        {data: 'DT_RowIndex', class: 'text-center', orderable: true},   
        {data: 'name', class: 'text-center', orderable: true},
        {data: 'gender', class: 'text-center', orderable: true},
        {data: 'phone_number', class: 'text-center', orderable: true},
        {data: 'address', class: 'text-center', orderable: true},
        {data: 'email', class: 'text-center', orderable: true},
        {render: function (index, row, data, meta) {
            return `
            <a href="#" onclick="controller.editData(event, ${meta.row})" class="btn btn-sm btn-warning">Edit</a>
            <a href="#" onclick="controller.deleteData(event, ${data.id})" class="btn btn-sm btn-danger">Delete</a>`;
        }, orderable: false, width: '110px', class: 'text-center'},
    ];

</script>
<script src="{{ asset('js/data.js') }}"></script>


{{-- <script>
    var controller = new Vue({
        el: '#controller',
        data: {
            data: {},
            actUrl: '{{ url('authors') }}',
            editStatus: false
        },
        mounted() {

        },
        methods: {
            addData() {
                this.data = {};
                this.actUrl = '{{ url('authors') }}';
                $('#modal-default').modal('show');    
            },
            editData(data) {
                this.data = data;
                this.actUrl = '{{ url('authors') }}'+'/'+data.id;
                this.editStatus = true;
                $('#modal-default').modal('show');    
            },
            deleteData(id) {
                this.actUrl = '{{ url('authors') }}'+'/'+id;
                if (confirm("Are you sure?")) {
                    axios.post(this.actUrl, {_method: 'DELETE'}).then(response => {
                        location.reload();
                    });
                }
            },
        }
    });
</script> --}} 
@endsection