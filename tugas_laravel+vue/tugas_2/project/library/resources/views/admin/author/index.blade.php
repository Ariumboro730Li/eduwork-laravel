@extends('layouts.admin')
@section('header', 'Author')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               
                <h3 class="card-title">Data Author</h3>
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