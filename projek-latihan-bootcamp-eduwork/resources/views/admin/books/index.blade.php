@extends('layouts.admin')
@section('content')
    <div id="controller">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="fa fa-search fa-2x mr-3" aria-hidden="true">
                        </span>
                    </div>
                    <input type="text" class="form-control input-lg" autocomplete="off" placeholder="Search from title"
                        v-model="search">
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" @click="addData()">Create New Book</button>
            </div>
            <hr>
            <div class="row">
                <div class="col-5 grid-margin stretch-card" v-for="book in filteredList">
                    <div class="card card-rounded">
                        <div class="card-body card-rounded" v-on:click="editData(book)">
                            <div class="card-body card-rounded">
                                <div class="list align-items-center border-bottom py-2">
                                    <div class="wrapper w-100">
                                        <p class="mb-2 font-weight-medium">
                                            @{{ book.title }} (@{{ book.qty }})
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <i class="fa fa-money mr-3"></i>
                                                <p class="mb-0 text-small text-muted">Rp. @{{ numberWithCommas(book.price) }} ,-</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="modal-default" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Data Modal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" :action="actionUrl" autocomplete="off">
                                @csrf
                                <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">ISBN:</label>
                                    <input type="number" class="form-control" name="isbn" :value="book.isbn">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Judul:</label>
                                    <input type="text" class="form-control" name="title" :value="book.title">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tahun:</label>
                                    <input type="number" class="form-control" name="year" :value="book.year">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Publisher:</label>
                                    <select name="publisher_id" class="form-control">
                                        @foreach ($publisher_data as $publishers)
                                            <option :selected="book.publisher_id == {{ $publishers->id }}"
                                                value="{{ $publishers->id }}">
                                                {{ $publishers->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Author:</label>
                                    <select name="author_id" class="form-control">
                                        @foreach ($author_data as $authors)
                                            <option :selected="book.author_id == {{ $authors->id }}"
                                                value="{{ $authors->id }}">
                                                {{ $authors->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Catalog:</label>
                                    <select name="catalog_id" class="form-control">
                                        @foreach ($catalog_data as $catalogs)
                                            <option :selected="book.catalog_id" value="{{ $catalogs->id }}">
                                                {{ $catalogs->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Qty:</label>
                                    <input type="number" class="form-control" name="qty" :value="book.qty">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Harga Pinjam:</label>
                                    <input type="number" class="form-control" name="price" :value="book.price">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" v-if="editStatus"
                                        v-on:click="deleteData(book)">Delete</button>
                                    {{-- <button type="submit" class="btn btn-primary" v-if="editStatus"
                                        v-on:click="editData(book.id)">
                                        Edit Changes</button> --}}
                                    <button type="submit" class="btn btn-primary" v-if="addDataButton"
                                        v-on:click="editData(book)">
                                        Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('js')
    <script type="text/javascript">
        var actionUrl = '{{ url('books') }}';
        var apiUrl = '{{ url('api/books') }}';
        var app = new Vue({
            el: '#controller',
            data: {
                books: [],
                search: '',
                book: {},
                editStatus: false,
                addDataButton: true
            },
            mounted: function() {
                this.get_books();
            },
            methods: {
                get_books() {
                    const _this = this;
                    $.ajax({
                        url: apiUrl,
                        method: 'GET',
                        success: function(data) {
                            _this.books = JSON.parse(data);

                        },
                        error: function(error) {
                            console.log(error);
                        }

                    });

                },
                addData() {
                    this.book = {};
                    this.actionUrl = '{{ url('books') }}';
                    this.editStatus = false;
                    $('#modal-default').modal('show');



                },
                editData(book) {
                    // console.log(book);
                    this.book = book;
                    // this.addDataButton = true;
                    this.actionUrl = '{{ url('books') }}' + '/' + book.id;
                    // console.log(this.actionUrl);
                    this.editStatus = true;
                    $('#modal-default').modal('show');
                },
                deleteData(id) {
                    // console.log(id)
                    // this.book = book;
                    const self = this;
                    this.actionUrl = '{{ url('books') }}' + '/' + id;
                    if (confirm("Anda yakin?!")) {
                        axios.post(this.actionUrl, {
                            _method: 'DELETE'
                        }).then(response => {
                            // location.reload($('#modal-default').modal('hide'));
                            location.reload(true);
                            // console.log(response);
                            // axios.get(this.actionUrl);

                            // self.close();
                        });

                    }

                },
                numberWithCommas(x) {
                    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                }

            },
            computed: {
                filteredList() {
                    return this.books.filter(book => {
                        return book.title.toLowerCase().includes(this.search.toLowerCase())
                    })

                }
            }

        })
    </script>
@endsection
