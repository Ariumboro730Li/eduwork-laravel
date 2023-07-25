@extends('layouts.admin')
@section('header', 'Author')

@section('css')
 
@endsection

@section('content')
<div id="controller">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-left">Create New Author</a>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <table id="author" class="table table-bordered table-striped">
                  <thead class="text-center">
                  <tr>
                      <th style="width: 10px">No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th style="width:190px">Address</th>
                      <th >Action</th>
                  </tr>
                  </thead>
                  <tbody class="text-center">
                     @foreach($authors as $key => $author)
                    <tr >
                      <td> {{$key+1}} </td>
                      <td> {{$author->name_a}} </td>
                      <td> {{$author->email}} </td>
                      <td> {{$author->phone_number}} </td>
                      <td> {{$author->address}} </td>
                      <td>
                        <a href="#" @click="editData({{$author}})" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" @click="deleteData({{$author->id}})" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  
                  </tbody>
                </table>
              </div>
             
      </div>
      </div>

      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
               <!--  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif -->
            <form :action="actionUrl" method="post" >
            <div class="modal-header">
              <h4 class="modal-title">Create Author</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @csrf


                <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name_a" class="form-control"  placeholder="Enter Name" autofocus :value="data.name_a">
                     @error('name_a')
                          {{$message}}
                     @enderror 
                  </div>
                   <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control"  placeholder="Enter Email" autofocus :value="data.email">
                     @error('email')
                          {{$message}}
                     @enderror 
                  </div>
                   <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input id="number" type="text" name="phone_number" class="form-control"  placeholder="Enter Phone Number" value="0891" autofocus :value="data.phone_number">
                     @error('phone_number')
                          {{$message}}
                     @enderror 
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" type="text" name="address" class="form-control"  placeholder="Enter Address" autofocus :value="data.address">
                    </textarea>
                     @error('address')
                          {{$message}}
                     @enderror 
                  </div>

             
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
             </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    </section>
</div>
@endsection


@section('js')
<!-- //---------------------datatables------------ -->
<script>
  $(function () {
    $("#author").DataTable({
      // "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#author .col-md-6:eq(0)');
  });
</script>

<!-- //--------------------- akhir datatables------------ -->



<script>
    var controller = new Vue({
      el:'#controller',
      data:{
          data:{},
          actionUrl : '{{url('authors')}}',
          editStatus : false
      },
      mounted:function(){

      },
      methods:{
          addData(){
              this.data = {};
              this.actionUrl = '{{url('authors')}}';
              this.editStatus = false;
              $('#modal-default').modal();
          },
          editData(data){
              this.data = data;
              this.actionUrl = '{{url('authors')}}'+'/'+data.id;
              this.editStatus = true;
              $('#modal-default').modal();
          },
          deleteData(id){
              this.actionUrl = '{{url('authors')}}'+'/'+id;
              if (confirm("Yakin Ingin Menghapus Data ini !")){
                axios.post(this.actionUrl, {_method: 'DELETE'}).then(response =>{ location.reload();}
                  );
              }

          }
      }
    })


</script>
@endsection