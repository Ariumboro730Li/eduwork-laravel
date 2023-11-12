@extends('layouts.admin')
@section('header','Catalog')
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
                        <h3 class="card-title">Edit Catalog</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('catalog-update',$catalog->name) }}" method="post">
                        @csrf       
                        @method('PUT')
                    
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputtext1">Edit Catalog</label>
                                <input type="text" name="id_catalog" class="form-control" placeholder="Enter id_catalog" required="" value="{{$catalog->id_catalog}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" required="" value="{{$catalog->name}}">
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