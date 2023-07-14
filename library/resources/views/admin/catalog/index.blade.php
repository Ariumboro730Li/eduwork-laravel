@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
    Ini adalah halaman Catalog
    @component("component.table-catalog", [
        "title"=> "HOME"
    ])
        
    @endcomponent
@endsection