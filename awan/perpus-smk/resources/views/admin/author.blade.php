@extends('layouts.admin')
@section('header', 'Author')

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
                <th class="text-center">Email</th>
                <th class="text-center">Nomer HP</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($authors as $key => $authors)                
                <tr>
                    <td class="text-center">{{ $key+1 }}</td>
                    <td>{{ $authors->name }}</td>
                    <td>{{ $authors->email }}</td>
                    <td>{{ $authors->phone_number }}</td>
                    <td>{{ $authors->address }}</td>
                    <td style="width: 110px;">
                        <a href="#" @click="editData({{ $authors }})" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" @click="deleteData({{ $authors->id }})" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Author</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" :action="actUrl">
                        @csrf

                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" :value="data.name" required>
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" :value="data.email" required>
                            <label class="form-label">Nomer HP</label>
                            <input type="text" name="phone_number" class="form-control" :value="data.phone_number" required>
                            <label class="form-label">Alamat</label>
                            <input type="text" name="address" class="form-control" :value="data.address" required>
                            
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
<script>
    $(document).ready(function () {
    $('#dataTable').DataTable();
});
</script>
<script>
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
</script>
@endsection