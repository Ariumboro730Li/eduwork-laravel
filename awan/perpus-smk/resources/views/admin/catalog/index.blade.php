@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<div class="container-fluid px-4">
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Total Buku</th>
                <th class="text-center">Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($catalogs as $key => $catalog)                
            <tr>
                <td class="text-center">{{ $key+1 }}</td>
                <td>{{ $catalog->name }}</td>
                <td class="text-center">{{ count($catalog->books) }}</td>
                <td>{{ $catalog->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection