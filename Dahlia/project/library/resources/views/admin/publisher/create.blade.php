@extends('layouts.admin')
@section('header','Publisher')
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
                        <h3 class="card-title">Create New Publiher</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('publishers')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputtext1">ID Publisher</label>
                                <input type="text" name="id_publisher" class="form-control" placeholder="Enter id_catalog" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter email" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Number Phone</label>
                                <input type="text" name="phone_number" class="form-control" placeholder="Enter phone_number" required="">
                            <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputtext1">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter address" required="">
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