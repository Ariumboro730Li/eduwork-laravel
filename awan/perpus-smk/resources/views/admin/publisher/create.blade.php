@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<div class="container-fluid px-4">
    <div class="col-5">
        <form method="post" action="{{ url('publishers') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" required>
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
                <label class="form-label">Nomer HP</label>
                <input type="text" name="phone_number" class="form-control" required>
                <label class="form-label">Alamat</label>
                <input type="text" name="address" class="form-control" required>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection