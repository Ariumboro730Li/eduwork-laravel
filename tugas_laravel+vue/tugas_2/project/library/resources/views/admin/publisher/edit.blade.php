@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Publisher</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action=" {{url('publishers/'.$publisher->id)}} " method="post">
              	@csrf
                {{ method_field('PUT') }}
                <div class="card-body">
                   
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name_p" class="form-control"  placeholder="Enter Name" autofocus  value="{{$publisher->name_p}}">
                  </div>
                   <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control"  placeholder="Enter Email" autofocus  value="{{$publisher->email}}">
                  </div>
                   <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input id="number" type="text" name="phone_number" class="form-control"  placeholder="Enter Phone Number"  autofocus value="{{$publisher->phone_number}}">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" type="text" name="address" class="form-control"  placeholder="Enter Address" autofocus > {{$publisher->address}} </textarea>
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