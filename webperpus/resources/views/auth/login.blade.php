@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
        @endif
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Login Form</h2>
            <div class="text-center mb-5 text-dark">Bootstrap</div>
            <div class="card my-5">
                <form method="POST" action="{{url('login')}}">
                    @csrf
                    <div class=" text-center">
                        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="rounded-circle my-3 profile-image" alt="User Image" width="200%" alt="user">
                    </div>
                    <div class="mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" placeholder="Email" aufocus>
                    </div>
                    <div class="mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        <i class="far fa-eye" id="togglePassword" style="    margin-left: -30px; cursor: pointer; float: right; margin-top: -28px;margin-right: 10px;"></i>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-color px-5 mb-5 w-100">
                            {{__('Login')}}
                        </button>
                    </div>
            </div>
        </div>
    </div>

</div>
@endsection