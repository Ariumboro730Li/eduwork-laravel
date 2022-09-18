@extends('layouts.admin')
@section('header', 'Book')

@section('content')
<div id="controller">
    <div class="row">
        <div class="col-md-8 mx-auto my-3">
            <form role="search">
                <input class="form-control me-2" type="search" placeholder="Search from title" v-model="search">
            </form>
            <button class="btn btn-outline-primary mt-2" @click="addData()" >New</button>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12 mb-3" v-for="book in filteredList">
            <div class="card" style="min-height: 8rem" v-on:click="editData(book)">
                <div class="card-body">
                  <h4 class="card-title">@{{ book.title }} ( @{{ book.qty }} )</h4>
                  <p class="card-text">Rp. @{{ spaceNumber(book.price) }},-</p>
                </div>
              </div>
        </div>
    </div>

    {{-- modall --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" :action="actUrl">
                        @csrf
                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                        <div class="mb-3">
                            <div class="form-group">
                                <label class="form-label">ISBN</label>
                                <input type="number" name="isbn" class="form-control" required :value="book.isbn">
                            </div>
                            <div class="form-group">                                
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" required :value="book.title">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tahun</label>
                                <input type="number" name="year" class="form-control" required :value="book.year">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Penerbit</label>
                                <select name="publisher_id" class="form-control">
                                    @foreach ($publishers as $publisher)                                        
                                    <option :selected="book.publisher_id == {{ $publisher->id }}" value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Pengarang</label>
                                <select name="author_id" class="form-control">
                                    @foreach ($authors as $author)                                        
                                    <option :selected="book.author_id == {{ $author->id }}" value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Katalog</label>
                                <select name="catalog_id" class="form-control">
                                    @foreach ($catalogs as $catalog)                                        
                                    <option :selected="book.catalog_id == {{ $catalog->id }}" value="{{ $catalog->id }}">{{ $catalog->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">QTY</label>
                                <input type="number" name="qty" class="form-control" required :value="book.qty">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Harga Pinjam</label>
                                <input type="number" name="price" class="form-control" required :value="book.price">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary">Save</button>
                        <button type="button" class="btn btn-danger" v-if="editStatus" v-on:click="deleteData(book.id)">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    var apiUrl = '{{ url('api/books') }}';

    var app = new Vue({
        el: '#controller',
        data: {
            books : [],
            search: '',
            book: {},
            editStatus: false,
            actUrl: '{{ url('books') }}'
        },
        mounted: function() {
            this.get_books();
        },
        methods: {
            get_books(){
                const _this = this;
                $.ajax({
                    url:apiUrl,
                    methods:'GET',
                    success: function(data){
                        _this.books = JSON.parse(data);
                    },
                    error: function(error){
                        console.log(error);
                    }
                });
            },
            spaceNumber(x){
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."); 
            },
            addData() {
                this.book = {};
                this.editStatus = false;
                this.actUrl = '{{ url('books') }}';
                $('#modal-default').modal('show');    
            },
            editData(book) {
                this.book = book;
                this.actUrl = '{{ url('books') }}'+'/'+book.id;
                this.editStatus = true;
                $('#modal-default').modal('show');    
            },
            deleteData(id) {
                if (confirm("Are you sure?")) {
                    axios.post(this.actUrl, {_method: 'DELETE'}).then(response => {
                        alert('Data has been removed');
                        $('#modal-default').modal('hide');
                        window.location.reload();
                    });
                }
            },
        },
        computed: {
            filteredList() {
                return this.books.filter(book => {
                    return book.title.toLowerCase().includes(this.search.toLowerCase())
                })
            }
        }
    });
</script>
@endsection