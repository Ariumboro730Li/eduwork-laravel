@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<div class="container-fluid px-4">
    <a href="{{ url('publishers/create') }}" class="btn btn-sm btn-primary mb-2">Create New</a>
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Email</th>
                <th class="text-center">Nomer HP</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($publishers as $key => $publishers)                
            <tr>
                <td class="text-center">{{ $key+1 }}</td>
                <td>{{ $publishers->name }}</td>
                <td>{{ $publishers->email }}</td>
                <td>{{ $publishers->phone_number }}</td>
                <td>{{ $publishers->address }}</td>
                <td>
                    <a href="{{ url('publishers/'.$publishers->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ url('publishers', ['id' => $publishers->id]) }}" method="post">
                        <input class="btn btn-sm btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection