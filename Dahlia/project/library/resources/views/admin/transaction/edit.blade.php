@extends('layouts.admin')
@section('header','Transaction')
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
                        <h3 class="card-title">Edit New Transaction</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('transactions/'.$transaction->id)}}" method="post">
                        @csrf
                        {{method_field ('PUT') }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputtext1">ID Transaction</label>
                                <input type="text" name="id_transactions" class="form-control" placeholder="Enter id_transaction" required="" value="{{$transaction->id_transaction}}">
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