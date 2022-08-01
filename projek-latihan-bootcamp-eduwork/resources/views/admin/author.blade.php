@extends('layouts.admin')
@section('content')
    <div id class="row">
        <div class="col-lg-12">
            <a href="" @click="addData()" data-target="#exampleModal" data-toggle="modal"
                class="btn btn-sm btn-primary pull-right">Create
                Author</a>
            <div class="card-body p-0">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="30px">No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th class="text-right"> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($author as $key => $author)
                            <tr>
                                {{-- dd($author); --}}
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->email }}</td>
                                <td>{{ $author->phone_number }}</td>
                                <td>{{ $author->address }}</td>
                                <td class="text-right">
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Data</h5>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ url('author') }}" autocomplete="off">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nama:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number:</label>
                                    <input type="number" class="form-control" name="phone_number"
                                        placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <label>Alamat:</label>
                                    <textarea type="text" class="form-control" name="address" placeholder="Alamat"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        @section('js')
            <script type="text/javascript">
                var controller = new Vue({
                    el: '#controller',
                    methods: {
                        addData() {
                            this.data = {};
                            // this.actionUrl = '{{ url('author') }}';
                            // this.editStatus = false;
                            console.log("Tes klik");
                            // $('#modalForm').modal("show")
                        }
                    }


                });
            </script>
        @endsection
