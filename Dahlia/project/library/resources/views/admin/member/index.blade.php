@extends('layouts.admin')
@section('header','Member')
@section('content')

ini adalah halaman Member

<br></br>


 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-18">
            <div class="card">
              <div class="card-header">
                
              <a href="{{url('members/create')}}" class="btn btn-sm btn-primary pull-right">Create New Member</a>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Num</th>
                    <th>ID Member</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($members as $key =>  $member)
                  <tr>
                      <td>{{$key +1}}</td>
                      <td>{{ $member->id_member}}</td>
                      <td>{{ $member->name}}</td>
                      <td>{{ $member->username}}</td>
                      <td>{{ $member->password}}</td>
                      <td>{{ $member->gender}}</td>
                      <td>{{ $member->phone_number}}</td>
                      <td>{{ $member->address}}</td>
                      <td>{{ $member->email}}</td>
                      <td>
                      <!-- <a href="{{url('members/'.$member->id.'/edit') }}" class="btn btn-sm btn-primary pull-right">Edit</a>
                          
                          <form action="{{ url('members', ['id' => $member->id]) }}" method="post">
                            <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                            @method('delete')
                            @csrf
                          </form> -->
                      </td>
                      <!-- <td>{{ date ('d/m/y',strtotime ($member->created_at))}}</td>
                      <td>{{ date('d/m/y', strtotime ($member->updated_at))}}</td> -->
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
    </div>        
</section>
<!-- /.card -->

@endsection