@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('publishers/create') }}" class="bbtn btn-primary btn-sm ">Create New Publisher</a>
                </div>
 
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th class= "text-center">Nama</th>
                                <th class= "text-center">Total Books</th>
                                <th class= "text-center">Email</th>
                                <th class= "text-center">No.telp</th>
                                <th class= "text-center">Alamat</th>
                                <th class= "text-center">Create at</th>
                                <th class= "text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($publishers as $key => $publisher)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $publisher->name }}</td>
                                <td class= "text-center">{{ count ($publisher -> books) }}</td>
                                <td class= "text-center">{{ $publisher->email }}</td>
                                <td class= "text-center">{{ $publisher->phone_number }}</td>
                                <td class= "text-center">{{ $publisher->address }}</td>
                                <td class= "text-center">{{ date("H:i:s - d M Y", strtotime($publisher->created_at)) }}</td>
                                <td class= "text-center">
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
            </div>
        </div>
    </div>
@endsection