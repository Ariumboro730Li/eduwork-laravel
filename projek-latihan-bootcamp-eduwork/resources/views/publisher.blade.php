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
                                <form action="{{ url('publisher', ['id' => $penerbit->id]) }}" method="post">
                                    <input class="btn btn-danger btn-sm" type="submit" value="Delete"
                                        onclick="return confirm('Are you sure?')">
                                    @method('delete')
                                    @csrf
                                </form>
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
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
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
                data: {}
            },
            mounted: function() {

            },
            methods: {
                addData() {
                    $('#modalForm').modal("show")
                },
                editData(data) {
                    console.log(data)
                    // $('#modalForm').modal("show")
                }
            }
        });
    </script>
@endsection
