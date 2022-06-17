@extends('layouts.admin')
@section('formcreate')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Catalog</h4>
                <p class="card-description">
                    Form input catalog
                </p>
                <form class="forms-sample" action="{{ url('catalogs') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"
                            class="w-100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" class="form-control"
                            placeholder="Enter Name" required="">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
