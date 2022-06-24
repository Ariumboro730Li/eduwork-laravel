@extends('layouts.admin')
@section('css')
@endsection()
@section('content')
    <div id="controller">
        <div class="table-responsive-xl">
            <div class="header">
                <a href="#" @click="addData()" id="exampleModal" class="btn btn-sm btn-primary pull-right">Create
                    Publisher</a>
            </div>
            <table id="table_id" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            No Telepon
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($publishers as $key => $penerbit)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                {{ $penerbit->name }}
                            </td>
                            <td>
                                {{ $penerbit->email }}
                            </td>
                            <td>
                                {{ $penerbit->phone_number }}
                            </td>
                            <td>
                                {{ $penerbit->address }}
                            </td>
                            <td>
                                <a href="#" @click="editData({{$penerbit}})"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" @click="deleteData({{$penerbit->id}})"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>


        <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Penerbit</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" :action="actionUrl" autocomplete="off" id="form-publisher">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" name="name" :value="data.name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" name="email" :value="data.email">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nomor Telepon Penerbit:</label>
                                <input type="text" class="form-control" name="phonenumber" :value="data.phone_number">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Alamat Penerbit:</label>
                                <textarea class="form-control" name="address" id="message-text" :value="data.address"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" form="form-publisher" class="btn btn-primary">Simpan Data</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('js')
<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable({
    });
} );
</script>
@endsection
@section('js')
    <script type="text/javascript">
        new Vue({
            el: '#controller',
            data: {
                data: {},
                actionUrl: "{{url('publisher')}}",
                editStatus: false
            },
            mounted: function() {

            },
            methods: {
                addData() {
                    this.data = {};
                    this.actionUrl = '{{url('publisher')}}';
                    this.editStatus = false;
                    $('#modalForm').modal("show")
                },
                editData(data) {
                    console.log(data)
                    this.data = data;
                    this.actionUrl = '{{url('publisher')}}' + '/' + data.id;
                    this.editStatus = true;
                    $('#modalForm').modal("show")
                },
                deleteData(id){
                    this.actionUrl = '{{url('publisher')}}' + '/' +id;
                    if(confirm('Are you sure you want to delete this')){
                        axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                            location.reload();

                        });
                    }
                }
            }
        });
    </script>
@endsection
