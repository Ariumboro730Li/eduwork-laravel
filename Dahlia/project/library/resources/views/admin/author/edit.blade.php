@extends('layouts.admin')
@section('header','Author')
@section('content')


    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Author</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('authors/'.$author->id)}}" method="put">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputtext1">ID author</label>
                                <input type="text" name="id_author" class="form-control" placeholder="Enter id_author" required="" value="{{$author->id_author}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" required="" value="{{$author->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter email" required="" value="{{$author->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" placeholder="Enter phone_number" required="" value="{{$author->phone_number}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter address" required="" value="{{$author->address}}">
                            </div>
                            <div class="form-group">
                                <!-- <label for="exampleInputFile">File input</label> -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</section>
            

@endsection