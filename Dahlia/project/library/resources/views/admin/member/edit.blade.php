@extends('layouts.admin')
@section('header','member')
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
                        <h3 class="card-title">Edit Member</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('members/'.$member->id)}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputtext1">ID Member</label>
                                <input type="text" name="id_member" class="form-control" placeholder="Enter id_member" required="" value="{{$member->id_member}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name" required="" value="{{$member->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter username" required="" value="{{$member->username}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Enter password" required="" value="{{$member->password}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Gender</label>
                                <input type="text" name="gender" class="form-control" placeholder="Enter gender" required="" value="{{$member->gender}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control" placeholder="Enter phone_number" required="" value="{{$member->phone_number}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter address" required="" value="{{$member->address}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter email" required="" value="{{$member->email}}">
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