@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
	<div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              	<div class="card-header">
                	<h3 class="card-title">Edit Publisher</h3>
              	</div>
              	<!-- /.card-header -->
              	<!-- form start -->
              	<form action="{{ url('publishers/'.$publisher->id) }}" method="post">
              		@csrf
              		{{ method_field('put') }}
	                <div class="card-body">
	                  	<div class="form-group">
	                    	<label for="exampleInputEmail1">Name</label>
	                    	<input type="text" name="name" class="form-control" placeholder="Enter name" required="" value="{{ $publisher->name }}">
	                  	</div>
	                  	<div class="form-group">
	                    	<label for="exampleInputEmail1">Email</label>
	                    	<input type="email" name="email" class="form-control" placeholder="Enter email" required="" value="{{ $publisher->email }}">
	                  	</div>
	                  	<div class="form-group">
	                    	<label for="exampleInputEmail1">Phone Number</label>
	                    	<input type="number" name="phone_number" class="form-control" placeholder="Enter phone number" required="" value="{{ $publisher->phone_number }}">
	                  	</div>
	                  	<div class="form-group">
	                    	<label for="exampleInputEmail1">Address</label>
	                    	<input type="text" name="address" class="form-control" placeholder="Enter address" required="" value="{{ $publisher->address }}">
	                  	</div>
	                </div>
	                <!-- /.card-body -->

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	                </div>
              	</form>
            </div>
        </div>
    </div>
    <!-- /.card -->
@endsection