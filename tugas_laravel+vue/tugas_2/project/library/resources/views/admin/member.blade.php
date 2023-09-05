@extends('layouts.admin')
@section('header', 'Member')

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
                  <div class="row">
                    <div class="col-md-10">
                       <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Create New Member</a>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control" name="gender">
                        <option value="0">Semua Jenis Kelamin</option>
                        <option value="F">Perempuan</option>
                        <option value="M">Laki-laki</option>
                      </select>
                    </div>
                  </div>
                  
                  <!-- <h3 class="card-title">Data Catalog</h3> -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <table id="datatable" class="table table-bordered table-striped">
                    <thead class="text-center">
                        <tr>
                        <th style="width: 10px">No</th>
                        <th style="width: 200px">Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th style="width:190px">Address</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th >Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
        </div>
        </div>
        </div>
        
      </section>
</div>
@endsection

@section('js')
<script type="text/javascript">
var actionUrl = '{{ url('members') }}';
var apiUrl = '{{ url('api/members') }}';

var columns = [
       {data: 'DT_RowIndex', class:'text-center', orderable: true},
       {data: 'name', class:'text-center', orderable: true},
       {data: 'gender', class:'text-center', orderable: true},
       {data: 'phone_number', class:'text-center', orderable: true},
       {data: 'address', class:'text-center', orderable: true},
       {data: 'email', class:'text-center', orderable: true},
       {data: 'date', class:'text-center', orderable: true},
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
<script>
  $('select[name=gender]').on('change', function(){
      gender= $('select[name=gender]').val();

      if (gender == 0){
        controller.table.ajax.url(actionUrl).load();
      } else {
        controller.table.ajax.url(actionUrl+'?gender='+gender).load();
      }
  });
</script>

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
