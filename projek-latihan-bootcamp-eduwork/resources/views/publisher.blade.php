@extends('layouts.admin')
@section('content')
    <div id="controller" class="row">
        <div class="col-lg-12">
            <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Create
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
                        @foreach ($publishers as $key => $penerbit)
                            <tr>
                                {{-- dd($author); --}}
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $penerbit->name }}</td>
                                <td>{{ $penerbit->email }}</td>
                                <td>{{ $penerbit->phone_number }}</td>
                                <td>{{ $penerbit->address }}</td>
                                <td class="text-right">
                                    <a href="#" @click="editData({{ $penerbit }})"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" @click="deleteData({{ $penerbit->id }})"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            {{-- Line ini gak bisa print console.log() --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Data</h5>
                        </div>
                        <div class="modal-body">
                            <form method="post" :action="actionUrl" autocomplete="off">
                                @csrf
                                <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Nama:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama"
                                        :value="data.name">
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email"
                                        :value="data.email">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number:</label>
                                    <input type="number" class="form-control" name="phone_number"
                                        placeholder="Phone Number" :value="data.phone_number">
                                </div>
                                <div class="form-group">
                                    <label>Alamat:</label>
                                    <textarea type="text" class="form-control" name="address" placeholder="Alamat" :value="data.address"></textarea>
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
                    data: {
                        //Membuat variabel data bentuk array
                        data: {}, //Untuk Menampung Data
                        actionUrl: '{{ url('publisher') }}',
                        editStatus: false

                    },
                    methods: {
                        addData() {
                            this.data = {};
                            // this.actionUrl = '{{ url('author') }}';
                            // this.editStatus = false;
                            // console.log("Tes klik");
                            this.actionUrl = '{{ url('publisher') }}';
                            this.editStatus = false;
                            $("#exampleModal").modal("show")
                        },
                        editData(data_penerbit) {
                            this.data = data_penerbit;
                            this.actionUrl = '{{ url('publisher') }}' + '/' +
                                data_penerbit.id;
                            this.editStatus = true;
                            $('#exampleModal').modal("show")

                        },
                        //Aksi Delete Tidak Bekerja
                        deleteData(id) {
                            this.actionUrl = '{{ url('publisher') }}' + '/' + data.id;
                            if (confirm("Are you sure to delete this data?")) {
                                axios.post(this.actionUrl, {
                                    _method: 'DELETE'
                                }).then(response => {
                                    location.reload();
                                });

                            }

                            // console.log(id);


                            // console.log(delete_data_penerbit_id);

                        }
                    }


                });
            </script>
        @endsection
