@extends('layouts.admin')
@section('header', 'Book')

@section('css')
<style>
  .info-box:hover{
     transform: scale(1.2);
     transition: all 1.2s;
  }
</style>  
@endsection


@section('content')
<div id="controller">
  <div class="row">
    <div class="col-md-5 offset-md-3">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <input type="text" class="form-control" autocomplete="off" placeholder="Cari Data" v-model="search">
      </div>
    </div>

    <div class="col-md-2">
      <button class="btn btn-primary" @click="addData()">Create New Book</button>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12" v-for="book in filteredList">
      <div class="info-box" v-on:click="editData(book)" style="cursor:pointer;">
        <div class="info-box-content" >
          <span class="info-box-text h3">@{{ book.title }} ( @{{ book.qty}} ) </span>
          <span class="info-box-number">Rp. @{{ numberWithSpaces(book.price) }} ,-<small></small></span>
          <span>@{{ book.created_at }}</span>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form :action="actionUrl" method="POST" @submit="submitForm($event, data.id)">
                    <div class="modal-header">
                      <h4 class="modal-title">Book</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      @csrf

                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                          <div class="form-group">
                            <label for="isbn">ISBN</label>
                            <input id="isbn" type="number" name="isbn" class="form-control"  placeholder="Enter Name" autofocus :value="book.isbn" >
                             
                          </div>
                           <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" type="text" name="title" class="form-control"  placeholder="Enter Title" autofocus :value="book.title" >
                             
                          </div>
                           <div class="form-group">
                            <label for="year">Tahun</label>
                            <input id="year" type="number" name="year" class="form-control"  placeholder="Enter Year" autofocus :value="book.year">
        
                          </div>
                           <div class="form-group">
                            <label for="publisher">Publisher</label>
              <select name="publisher_id" id="publisher" class="form-control">
                @foreach($publishers as $publisher)
                <option :selected="book.publisher_id == {{ $publisher->id }}" value="{{ $publisher->id }} "> {{ $publisher->name_p}} </option>
                @endforeach
              </select>                            
        
                          </div>
                          <div class="form-group">
                            <label for="author">Author</label>
                            <select name="author_id" id="author" class="form-control">
                @foreach($authors as $author)
                <option  :selected="book.author_id == {{ $author->id }}" value="{{ $author->id }} "> {{ $author->name_a}} </option>
                @endforeach
              </select>                            
        
        
                          </div>

                          <div class="form-group">
                            <label for="catalog">Catalog</label>
                            <select name="catalog_id" id="catalog" class="form-control">
                @foreach($catalogs as $catalog)
                <option :selected="book.catalog_id == {{ $catalog->id }}" value="{{ $catalog->id }} "> {{ $catalog->name_c}} </option>
                @endforeach
              </select> 
        
                          </div>
                          <div class="form-group">
                            <label for="qty">Qty Stock</label>
                            <input id="qty" type="number" name="qty" class="form-control"  placeholder="Enter Qty Stock" autofocus :value="book.qty">
                             
                          </div>
                          <div class="form-group">
                            <label for="price">Harga Pinjam</label>
                            <input id="price" type="number" name="price" class="form-control"  placeholder="Enter Price" autofocus :value="book.price">
                             
                          </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default bg-danger" data-dismiss="modal" v-if="editStatus" v-on:click="deleteData(book.id)">Delete</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                     </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
</div>
@endsection


@section('js')


<script>
var actionUrl = '{{ url('books') }}';
var apiUrl = '{{ url('api/books') }}';
var app = new Vue({
  el:'#controller',
    data:{
          books: [],
          book:{},
          search: '',
          actionUrl,
          apiUrl,
          editStatus : false
      }, 
      mounted: function(){
       this.get_books();
      },
        methods: {
        get_books() {
            const _this = this;
        $.ajax({
          url:apiUrl,
          method:'GET',
          success: function(data){
            _this.books = JSON.parse(data);
          },
          error: function(error){
            console.log(error);
          }

        });           
               
          },
          addData(){
              this.book = {};
              this.editStatus = false;
              $('#modal-default').modal();
          },
          editData(book){
              this.book = book;
              this.actionUrl = ' {{ url('books') }}'+'/'+book.id; 
              this.editStatus = true;
              $('#modal-default').modal();

          },
          deleteData(id){
              this.actionUrl = ' {{ url('books') }}'+'/'+id; 
            if (confirm("Yakin Ingin Menghapus Data ini !")){
                axios.post(this.actionUrl, {_method: 'DELETE'}).then(response =>{
                   alert('Data Telah Dihapus');
                });
                setTimeout(() => {
               location.reload();       
            }, 2000)
              
              }
          },
          numberWithSpaces(x) {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
          },
      submitForm(event, id){
              event.preventDefault();
              const _this = this;
              var actionUrl = ! this.editStatus ? this.actionUrl : this.actionUrl+'/'+id;
              axios.post(actionUrl, new FormData($(event.target)[0])).then(response => {
              $('#modal-default').modal('hide');
             
              location.reload();
              });
           }, 
        },

        computed: {
          filteredList(){
            return this.books.filter(book => {
              return book.title.toLowerCase().includes(this.search.toLowerCase())
            })
          }
        }
})
</script>
@endsection