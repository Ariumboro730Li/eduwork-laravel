@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<div class="container-fluid px-4">
    <div class="col-5">
        <form method="post" action="{{ url('publishers/'.$publisher->id) }}">
            @csrf
            {{ method_field('PUT') }}
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required value="{{ $publisher->name }}">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required value="{{ $publisher->email }}">
                <label class="form-label">Nomer HP</label>
                <input type="text" name="phone_number" class="form-control" value="{{ $publisher->phone_number }}" required>
                <label class="form-label">Alamat</label>
                <input type="text" name="address" class="form-control" value="{{ $publisher->address     }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection