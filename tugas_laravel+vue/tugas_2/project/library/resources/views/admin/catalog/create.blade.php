@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Catalog</h3>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action=" {{url('catalogs')}} " method="post">
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
                    <input id="name" type="text" name="name_c" class="form-control"  placeholder="Enter Name" autofocus value="{{ old('name_c') }}">
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