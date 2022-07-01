@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<div class="container-fluid px-4">
    <div class="col-5">
        <form method="post" action="{{ url('catalogs') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection