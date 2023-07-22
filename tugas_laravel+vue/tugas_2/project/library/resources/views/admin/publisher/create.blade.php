@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Publisher</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action=" {{url('publishers')}} " method="post">
              	@csrf
                <div class="card-body">
                    @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name_p" class="form-control"  placeholder="Enter Name" autofocus value="{{ old('name_p') }}">
                  </div>
                   <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" class="form-control"  placeholder="Enter Email" autofocus value="{{ old('email') }}">
                  </div>
                   <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input id="number" type="text" name="phone_number" class="form-control"  placeholder="Enter Phone Number" value="0891" autofocus value="{{ old('phone_number') }}">
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" type="text" name="address" class="form-control"  placeholder="Enter Address" autofocus value="{{ old('address') }}"></textarea>
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