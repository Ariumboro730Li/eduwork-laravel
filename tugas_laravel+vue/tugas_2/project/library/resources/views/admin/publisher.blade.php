@extends('layouts.admin')
@section('header', 'Publisher')

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
                   <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-left">Create New Member</a>
                  <!-- <h3 class="card-title">Data Catalog</h3> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <table id="datatable" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                        <th style="width: 10px">No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th style="width:190px">Address</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
        </div>
        </div>
        </div>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form :action="actionUrl" method="POST" @submit="submitForm($event, data.id)">
                    <div class="modal-header">
                      <h4 class="modal-title">Publisher</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      @csrf
                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                          <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" name="name_p" class="form-control"  placeholder="Enter Name" autofocus :value="data.name_p">
                             @error('name_p')
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
<script type="text/javascript">
var actionUrl = '{{ url('publishers') }}';
var apiUrl = '{{ url('api/publishers') }}';

var columns = [
       {data: 'DT_RowIndex', class:'text-center', orderable: true},
       {data: 'name_p', class:'text-center', orderable: false},
       {data: 'email', class:'text-center', orderable: true},
       {data: 'phone_number', class:'text-center', orderable: true},
       {data: 'address', class:'text-center', orderable: true},
       {render:function (index, row, data, meta){
           return `
              <a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">
                Edit
              </a>
              <a href="#" class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">
                Delete
              </a>`;
          }, orderable: false, width: '200px', class: 'text-center'},
    ];

   
</script>
<script src="{{asset('js/data.js')}}"></script>


<!-- <script type="text/javascript">
$(function () {
   $("#datatable").DataTable({
     "responsive": true,
     "lengthChange": false,
     "autoWidth": false,
     // "buttons": [
     //         "copy", "csv", "excel", "pdf", "print", "colvis"
     //            ]
   });
 });
</script> -->



<!-- <script>
  var controller = new Vue({
    el:'#controller',
    data:{
        data:{},
        actionUrl : '{{ url('authors' )}}',
        editStatus : false
    },
    mounted:function(){

    },
    methods:{
        addData(){
            this.data = {};
            this.actionUrl = '{{ url('authors') }}';
            this.editStatus = false;
            $('#modal-default').modal();
        },
        editData(data){
            this.data = data;
            this.actionUrl = '{{ url('authors') }}'+'/'+data.id;
            this.editStatus = true;
            $('#modal-default').modal();
        },
        deleteData(id){
            this.actionUrl = '{{ url('authors') }}'+'/'+id;
            if (confirm("Yakin Ingin Menghapus Data ini !")){
              axios.post(this.actionUrl, {_method: 'DELETE'}).then(response =>{
              location.reload();
              });
            }
        }
    }
  });


</script> -->
@endsection
