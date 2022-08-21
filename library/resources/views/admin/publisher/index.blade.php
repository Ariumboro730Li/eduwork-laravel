@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Publisher</h3><br><br>
            <a href="{{ url('publishers/create') }}" class="btn btn-sm btn-primary pull-right">Create New Publisher</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No.</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Updated At</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publishers as $key => $publisher)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $publisher->name }}</td>
                        <td>{{ $publisher->email }}</td>
                        <td>{{ $publisher->phone_number }}</td>
                        <td>{{ $publisher->address }}</td>
                        <td class="text-center">{{ date('d M Y', strtotime($publisher->created_at)) }}</td>
                        <td class="text-center">{{ date('d M Y', strtotime($publisher->updated_at)) }}</td>
                        <td class="text-center">
                            <a href="{{ url('publishers/'.$publisher->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ url('publishers', ['id' => $publisher->id]) }}" method="post">
                                <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                                @method('delete')
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div> -->
    </div>
@endsection