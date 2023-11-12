@extends('layouts.admin')
@section('header','Author')
@section('content')

ini adalah halaman Author

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">            
                        <h3 class="card-title">Table Author</h3>
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
                                <th class="text-center">ID_Author</th>
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
                                @foreach ($authors as $key =>  $author)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{ $author->id_author}}</td>
                                    <td>{{ $author->name}}</td>
                                    <td>{{ $author->email}}</td>
                                    <td>{{ $author->phone_number}}</td>
                                    <td>{{ $author->address}}</td>
                                    <td>{{count ($author->books)}}</td>
                                    <td>{{ date ('d/m/y',strtotime ($author->created_at))}}</td>
                                    <td>{{ date('d/m/y', strtotime ($author->updated_at))}}</td>
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