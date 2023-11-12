@extends('layouts.admin')
@section('header','Publisher')
@section('content')

ini adalah halaman Publisher

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-20">
                    <div class="card">
                        <div class="card-header">            
                        <h3 class="card-title">Table Publisher</h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul
                            </div>
                        </div>    
                    </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px">Number</th>
                                <th class="text-center">ID Publisher</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone Number</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Total Books</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Updated At</th>
                                <!-- <th style="width: 40px">Label</th> -->
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($publishers as $key =>  $publisher)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{ $publisher->id_publisher}}</td>
                                    <td>{{ $publisher->name}}</td>
                                    <td>{{ $publisher->email}}</td>
                                    <td>{{ $publisher->phone_number}}</td>
                                    <td>{{ $publisher->address}}</td>
                                    <td>{{count ($publisher->books)}}</td>
                                    <td>{{ date ('d/m/y',strtotime ($publisher->created_at))}}</td>
                                    <td>{{ date('d/m/y', strtotime ($publisher->updated_at))}}</td>
                                    <!-- <td><span class="badge bg-danger"></span></td> -->
                                </tr>
                                @endforeach
                        
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection