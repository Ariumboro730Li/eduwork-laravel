@extends('admin.layouts.app')
@section('content')
    <div id="idVue">
        <div class="row justify-content-center">

            <div class="col-sm-2">
                <a href="#" v-on:click="addData()" class="btn btn-primary btn-md">Tambah</a>
            </div> <!-- col-sm-2 end -->
        </div> <!-- row end -->
        <hr>
        <div class="card-body p-0">
            <table id="data-table-example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th width="30px">No.</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Nomor Telp</th>
                        <th>Alamat</th>
                        <th class="text-center">Email</th>
                        <th class="text-center"> Action</th>
                    </tr>
                </thead>

            </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div> <!-- modal end -->

    </div>
@endsection

@push('custom-scripts')
    {{-- vue and axios CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    {{-- sweetalert CDN --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        var apiUrl = '{{ url('api/publisher') }}';
        var actionUrl = '{{ url('publisher') }}';
        var columns = [{
                data: 'DT_RowIndex',
                class: 'text-center',
                orderable: true
            }, {
                data: 'name',
                class: 'text-center',
                orderable: true
            }, {
                data: 'gender',
                class: 'text-center',
                orderable: true

            }, {
                data: 'phone_number',
                class: 'text-center',
                orderable: true

            }, {
                data: 'address',
                class: 'text-center',
                orderable: true
            }, {
                data: 'email',
                class: 'text-center',
                orderable: true
            },
            {
                render: function(index, row, data, meta) {
                    return `
                                                                                                    <a href="#" class="btn btn-warning btn-sm"> Edit</a>
                                                                                                    <a class="btn btn-danger btn-sm">Delete</a>`;
                },
                orderable: false,
                width: '200px',
                class: 'text-center'
            },
        ];

        var idVue = new Vue({
            el: '#idVue',
            data: {
                datas: [],
                data: {},
                apiUrl

            },
            mounted: function() {
                this.datatable();
            },
            methods: {
                datatable() {
                    // console.log(datas);
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
                    $(".modal-title").text('Tambah Data');
                    $("#exampleModal").modal('show');
                }
            }

        });
    </script>
@endpush
