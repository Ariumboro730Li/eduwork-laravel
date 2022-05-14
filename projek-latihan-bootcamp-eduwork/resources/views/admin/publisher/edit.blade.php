@extends('layouts.admin')
@section('formedit')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Catalog</h4>
                <p class="card-description">
                    Form Mengedit catalog
                </p>
                <form class="forms-sample" action={{ url('publisher/' . $penerbit->id) }} method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required="Enter Name"
                            value="{{ $penerbit->name }}">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Name" required="Enter Name"
                            value="{{ $penerbit->email }}">
                        <label>Nomor Telepon</label>
                        <input type="text" name="phone_number" class="form-control" placeholder="Enter Name"
                            required="Enter Name" value="{{ $penerbit->phone_number }}">
                        <label>Alamat</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Name"
                            required="Enter Name" value="{{ $penerbit->address }}">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
