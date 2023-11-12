
@extends('layouts.admin')
@section('header','Book')
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
                        <h3 class="card-title">Create New Book</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                <form action="{{ url('edit-catalog/'.$book->id)}}" method="post">
                        @csrf       
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputtext1">ISBN</label>
                                <input type="text" name="isbn" class="form-control" placeholder="Enter isbn" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Year</label>
                                <input type="date" name="year" class="form-control" placeholder="Enter year" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">ID_Publisher</label>
                                <select class="form-control" name="" id="">
                                    @foreach ($publishers as $publisher)
                                    <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">ID_Author</label>
                                <select class="form-control" name="" id="">
                                    @foreach ($authors as $author)
                                    <option value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">ID_Catalog</label>
                                <select class="form-control" name="" id="">
                                    @foreach ($catalogs as $catalog)
                                    <option value="{{$catalog->id}}">{{$catalog->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">QTY</label>
                                <input type="text" name="qty" class="form-control" placeholder="Enter name" required="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Price</label>
                                <input type="text" name="price" class="form-control" placeholder="Enter name" required="">
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


