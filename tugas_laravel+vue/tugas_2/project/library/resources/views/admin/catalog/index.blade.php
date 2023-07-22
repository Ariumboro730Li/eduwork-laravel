@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                 <a href=" {{url('catalogs/create')}} " class="btn btn-sm btn-primary pull-left">Create New Catalog</a>
                <!-- <h3 class="card-title">Data Catalog</h3> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                

                <table class="table table-bordered">
                    <tr>
                  <thead class="text-center">
                      <th style="width: 10px">No</th>
                      <th>Name</th>
                      <th>Total Books</th>
                      <th>Created At</th>
                      <th >Action</th>
                     
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($catalogs as $key => $catalog)
                    <tr >
                      <td> {{$key+1}} </td>
                      <td> {{$catalog->name_c}} </td>
                      <td> {{count($catalog->books)}} </td>
                      <td> {{ date('H:i:s - d M Y', strtotime($catalog->created_at)) }} </td>
                      <td> <a href=" {{ url('catalogs/'.$catalog->id.'/edit')}} " class="btn btn-warning btn-sm">Edit</a>

                       <form action=" {{url('catalogs', ['id' => $catalog->id]) }} " method="post" class="d-inline">
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

      
@endsection