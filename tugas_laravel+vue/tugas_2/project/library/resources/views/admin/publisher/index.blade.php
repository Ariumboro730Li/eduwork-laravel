@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                 <a href=" {{url('publishers/create')}} " class="btn btn-sm btn-primary pull-left">Create New Publisher</a>
                <!-- <h3 class="card-title">Data Catalog</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               
                <table class="table table-bordered">
                    <tr>
                  <thead class="text-center">
                      <th style="width: 10px">No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th style="width:190px">Address</th>
                      <th >Action</th>
                     
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($publishers as $key => $publisher)
                    <tr >
                      <td> {{$key+1}} </td>
                      <td> {{$publisher->name_p}} </td>
                      <td> {{$publisher->email}} </td>
                      <td> {{$publisher->phone_number}} </td>
                      <td> {{$publisher->address}} </td>
                     
                      <td> <a href=" {{ url('publishers/'.$publisher->id.'/edit')}} " class="btn btn-warning btn-sm">Edit</a>

                       <form action=" {{url('publishers', ['id' => $publisher->id]) }} " method="post" class="d-inline">
                          <input type="submit" class="btn btn-danger btn-sm" value="delete" onclick="return confirm('Apakah ingin menghapus data ini ?')">
                        @method('delete')
                        @csrf
                        </form>


                      </td>
                      
                       
                     
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
      </div>
      </div>
    </section>
@endsection