@extends('layouts.admin')
@section('content')
    <div id="controller" class="row">
        <div class="col-lg-12">
            <h2 class="card-title">Member Page </h2>
            <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Create Data Member</a>
            <div class="card-body p-0">
                <table id="data-table-example" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th width="30px">No.</th>
                            <th>Name</th>
                            <th>Jenis Kelamin</th>
                            <th>Phone Number</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th class="text-center"> Action</th>
                        </tr>
                    </thead>
                </table>
            </div>

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
                        <form autocomplete="off" @submit.prevent="submitForm($event, data.id)">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                            <div class="form-group">
                                <label for="name" class="col-form-label">Nama:</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama"
                                    :value="data.name">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Jenis Kelamin:</label>
                                <select class="form-control" name="gender">
                                    <option>-</option>
                                    <option :selected="data.gender == `M`" value="M">Laki-laki</option>
                                    <option :selected="data.gender == `F`" value="F">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                    :value="data.email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <input type="number" class="form-control" name="phone_number" placeholder="Phone Number"
                                    :value="data.phone_number">
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

    </div>
@endsection
@section('js')
    <script type="text/javascript">
        var actionUrl = "{{ url('member') }}";
        var apiUrl = "{{ url('api/member') }}";

        var columns = [{
                data: 'DT_RowIndex',
                class: 'text-center',
                orderable: true
            },
            {
                data: 'name',
                class: 'text-center',
                orderable: true
            },
            {
                data: 'gender',
                class: 'text-center',
                orderable: true
            },
            {
                data: 'phone_number',
                class: 'text-center',
                orderable: true
            },
            {
                data: 'address',
                class: 'text-center',
                orderable: true
            },
            {
                data: 'email',
                class: 'text-center',
                orderable: true
            },
            {
                data: 'created_at',
                class: 'text-center',
                orderable: true
            },
            {
                render: function(index, row, data, meta) {
                    return `
                    <a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">Edit</a>
                    <a class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">Delete</a>`;

                },
                orderable: false,
                width: '200px',
                class: 'text-center'
            },
        ];
        var controller = new Vue({
                el: "#controller",
                data: {
                    datas: [],
                    data: {},
                    actionUrl,
                    apiUrl,
                    editStatus: false,

                },
                mounted: function() {
                    this.datatable();
                },
                methods: {
                    datatable() {
                        const _this = this;
                        _this.table = $('#data-table-example').DataTable({
                            ajax: {
                                url: _this.apiUrl,
                                type: 'GET',
                            },
                            columns
                        }).on('xhr', function() {
                            _this.datas = _this.table.ajax.json().data;
                        });
                    },
                    addData() {
                        // this.data = {};
                        // this.actionUrl = '{{ url('author') }}';
                        // this.editStatus = false;
                        // console.log("Tes klik");
                        // this.actionUrl = '{{ url('publisher') }}';
                        this.editStatus = false;
                        $("#exampleModal").modal("show")
                    },
                    editData(event, row) {
                        this.data = this.datas[row];
                        this.editStatus = true;
                        $('#exampleModal').modal("show")
                    },
                    deleteData(event, id) {
                        if (confirm("Are you sure to delete this data?")) {
                            axios.post(this.actionUrl + '/' + id, {
                                _method: 'DELETE'
                            }).them(response => {
                                alert('Data berhasil dihapus');
                            });
                        }
                    },
                    submitForm(event, id) {
                        event.preventDefault();
                        const _this = this;
                        $('#exampleModal').modal("hide")
                        axios.post(this.actionUrl, new FormData($(event.target)[0])).then(response => {
                            console.log(response);
                            _this.table.ajax.reload();
                        });
                        console.log(actionUrl, this.actionUrl);
                    }
                }
            }

        );
    </script>
@endsection
