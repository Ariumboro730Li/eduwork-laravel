@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<div class="container-fluid px-4">
    <a href="{{ url('catalogs/create') }}" class="btn btn-sm btn-primary mb-2">Create New</a>
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Total Buku</th>
                <th class="text-center">Dibuat</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($catalogs as $key => $catalog)                
            <tr>
                <td class="text-center">{{ $key+1 }}</td>
                <td>{{ $catalog->name }}</td>
                <td class="text-center">{{ count($catalog->books) }}</td>
                <td>{{ format_tanggal($catalog->created_at) }}</td>
                <td class="text-center">
                    <a href="{{ url('catalogs/'.$catalog->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ url('catalogs', ['id' => $catalog->id]) }}" method="post">
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