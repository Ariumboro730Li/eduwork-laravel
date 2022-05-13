@extends('layouts.admin')
@section('formcreate')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">New Publisher</h4>
                <p class="card-description">
                    Form input catalog
                </p>
                <form class="forms-sample" action={{ url('publisher/save') }} method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name"
                            class="w-100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" class="form-control"
                            placeholder="Enter Name" required="">
                        <label>Email</label>
                        <input type="text" name="email"
                            class="w-100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                            class="form-control" placeholder="Enter Email" required="">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_telepon"
                            class="w-100 form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}"
                            class="form-control" placeholder="Enter Nomor Telepon" required="">
                        <label>Alamat</label>
                        <textarea type="text" name="alamat" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} rows=" 5"
                            cols="50" placeholder="Enter Alamat" required=""></textarea>
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
