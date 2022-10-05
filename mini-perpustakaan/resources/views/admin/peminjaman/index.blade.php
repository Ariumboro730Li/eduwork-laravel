@extends('admin.layouts.template')
@section('content')
    <div id="controller" class=row>
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-header row">
                    <h1>Daftar Peminjaman</h1>
                    <div class="col-sm-12 col-lg-4 col-xl-2 mb-1">
                        <a type="button" href="{{ url('peminjaman/create') }}" type="button" class="btn btn-primary btn-block"
                            target="_blank">Tambah
                            Transaksi</a>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">

                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Pinjam</th>
                                                <th>Tanggal Kembali</th>
                                                <th>Nama Peminjam</th>
                                                <th>Lama Pinjam (hari)</th>
                                                <th>Total Buku</th>
                                                <th>Total Bayar</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Ini Modal Peminjaman --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah / Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Pilih Anggota:</label>
                                @foreach ($member as $anggota)
                                    <select class='form-control'>
                                        <option :selected="data.id == {{ $anggota->id }}" value="{{ $anggota->id }}">
                                            {{ $anggota->name }}</option>
                                    </select>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tanggal:</label>
                                <input type="date" class="form-control" name="date_start" :value="data.date_start">
                                <div class="input-group-addon">Sampai
                                </div>
                                <input type="date" class="form-control" name="date_end" :value="data.date_end">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Buku:</label>
                                <select name="book-option" class="form-control">
                                    @foreach ($buku as $book)
                                        <option :selected="data.id == {{ $book->id }}" value="{{ $book->id }}">
                                            {{ $book->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Status:</label>
                                <div class="form-check">
                                    <input class="form-check-control" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-control" for="flexRadioDefault1">
                                        Sudah Dikembalikan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-control" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-control" for="flexRadioDefault1">
                                        Default radio
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Ini Modal Edit Detail --}}
        <div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Peminajamn</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Anggota:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Tanggal Pinjam:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Buku:</label>
                                <select class="form-control" name="program_id" id="program">
                                    <option value="">Pilih Anggota</option>
                                    <option value="1">Buku Satu</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Status:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Send message</button>
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
        var actionUrl = "{{ url('peminjaman') }}";
        var controller = new Vue({
            el: '#controller',
            data: {
                data: {},

            },

            methods: {
                addData() {
                    $("#exampleModal").modal("show")
                    // console.log('Tes');


                },
                editData() {
                    $('#editDataModal').modal('show')
                    console.log('Tes edit');
                }

            }
        });
    </script>
@endsection
