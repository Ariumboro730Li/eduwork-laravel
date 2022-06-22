@extends('layouts.admin')
@section('header', 'Book')

@section('content')
<div id="controller">
    <div class="row">
        <div class="col-md-5 offset-md-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" autocomplete="off" placeholder="Search from title" v-model="search">
            </div>
        </div>
    
        <div class="col-md-2">
            <button class="btn btn-primary" @click="addData()">Create New Book</button>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12" v-for="book in filteredList">
            <div class="info-box">
                <div class="info-box-content">
                    <span class="info-box-text h3">@{{ book.title }} ( @{{ book.qty}} )</span>
                    <span class="info-box-number">Rp. @{{ numberWithSpaces(book.price) }},-<small></small></span>
                </div>
            </div>
        </div>
    </div>
  
    <!-- <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" :action="actiobUrl" autocomplete="off">
                    <div class="modal-header">
                        <h4 class="modal-title">Book</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf

                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="number" class="form-control" name="isbn" required="">
                        </div>     

                        <div class="form-group">
                            <label>Title</label>
                            <input type="number" class="form-control" name="title" required="">
                        </div>     

                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="number" class="form-control" name="year" required="">
                        </div>     

                        <div class="form-group">
                            <label>Publisher</label>
                    
                        </div>     

                        <div class="form-group">
                            <label>Pengarang</label>
                            
                        </div>     

                        <div class="form-group">
                            <label>Katalog</label>
                            
                        </div>     

                        <div class="form-group">
                            <label>Qty Stock</label>
                            <input type="number" class="form-control" name="qty" required="">
                        </div>     

                        <div class="form-group">
                            <label>Harga Pinjam</label>
                            <input type="number" class="form-control" name="price" required="">
                        </div>     
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default bg-danger">Delete</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>     
                    </div>     
                </form>
            </div>
        </div>
    </div> -->
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
            search:''
        },
        mounted: function () {
            this.get_books();
        },
        methods: {
            get_books() {
                const _this = this;
                $.ajax({
                    url: apiUrl,
                    method: 'GET',
                    success: function (data) {
                    _this.books = JSON.parse(data);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            },
            //  addData() {
            //      $('#modal-default').modal();
            //}
            numberWithSpaces(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
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