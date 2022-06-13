@extends('layouts.admin')
@section('header', 'Author')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Author</h3>
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
                    </tr>
                </thead>

                <tbody>
                    @foreach($authors as $key => $author)
                        <tr>
                            <td>{{ $key+1}}</td>
                            <td>{{ $author->name }}</td>
                            <td class= "text-center">{{ count ($author -> books) }}</td>
                            <td class= "text-center">{{ $author->email }}</td>
                            <td class= "text-center">{{ $author->phone_number }}</td>
                            <td class= "text-center">{{ $author->address }}</td>
                            <td class= "text-center">{{ date("H:i:s - d M Y", strtotime($author->created_at)) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection