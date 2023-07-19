@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Catalog</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead class="text-center">
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Name</th>
                      <th>Total Books</th>
                      <th>Created At</th>
                     
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($catalogs as $key => $catalog)
                    <tr >
                      <td> {{$key+1}} </td>
                      <td> {{$catalog->name_c}} </td>
                      <td> {{count($catalog->books)}} </td>
                      <td> {{ date('H:i:s - d M Y', strtotime($catalog->created_at)) }} </td>
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