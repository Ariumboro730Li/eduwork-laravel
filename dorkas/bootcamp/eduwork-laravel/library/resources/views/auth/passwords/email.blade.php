@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Forgot Password (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href=" {{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{ asset('assets/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
        <div class="card-header">{{ __('Reset Password') }}</div>
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
      <form method="POST" action="{{ route('password.email') }}">
        @csrf
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <div class="input-group mb-3">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row mb-0">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="card-footer py-3">
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <div class="d-flex justify-content-start">
                <a href="{{ url('/') }}" class="text-sm mx-2 text-gray-700 dark:text-gray-500 underline">Home</a>
                <a href="{{ route('login') }}" class="text-sm mx-2 text-gray-700 dark:text-gray-500 underline">Log in</a>
                <a href="{{ route('register') }}" class="ml-4 text-sm mx-2 text-gray-700 dark:text-gray-500 underline">Register</a>
            </div>
        </div>
    </div>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src=" {{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src=" {{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src=" {{ asset('assets/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
@endsection
