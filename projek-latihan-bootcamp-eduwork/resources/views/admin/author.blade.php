@extends('layouts.admin')
@section('css')
@endsection()
@section('content')
    <div id="controller">
        <div class="table-responsive pt-3">
            <div class="header">
                <a href="#" @click="addData()" id="exampleModal" class="btn btn-sm btn-primary pull-right">Create
                    Author</a>
            </div>
            <table class="table table-bordered">
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
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($author as $key => $penulis)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                {{ $penulis->name }}
                            </td>
                            <td>
                                {{ $penulis->email }}
                            </td>
                            <td>
                                {{ $penulis->phone_number }}
                            <td>
                                {{ $penulis->address }}
                            </td>
                            <td>
                                <a href="#" @click="editData({{$penulis}})"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="#" @click="deleteData({{ $penulis->id }})"
                                    class="btn btn-danger btn-sm">Delete</a>
                                @csrf
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Vue</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" :action="actionUrl" autocomplete="off" id="form-author">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" name="name" :value="data.name"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" class="form-control" name="email" :value="data.email"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">No Telepon:</label>
                                <input type="text" class="form-control" name="phone_number" :value="data.phone_number"
                                    required="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Alamat:</label>
                                <input type="text" class="form-control" name="address" :value="data.address"
                                    required="">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" form="form-author" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        new Vue({
            el: '#controller',
            data: {
                data: {},
                actionUrl: "{{ url('author') }}",
                editStatus: false

            },
            mounted: function() {

            },
            methods: {
                addData() {
                    this.data = {};
                    this.actionUrl = '{{ url('author') }}';
                    this.editStatus = false;
                    $('#modalForm').modal("show")
                    // console.log("modal show");
                    // $('#modalForm').modal("show")
                },
                editData(data) {
                    // console.log(data);

                    this.data = data;
                    this.actionUrl = '{{ url('author') }}' + '/' +
                        data.id;
                    this.editStatus = true;
                    $('#modalForm').modal("show")
                },
                deleteData(id) {
                    this.actionUrl = '{{ url('author') }}' + '/' + id;
                    if (confirm('Are you sure')) {
                        axios.post(this.actionUrl, {
                            _method: "DELETE"
                        }).then(response => {
                            location.reload();
                        });
                    }
                }

            }

        });
    </script>
@endsection
