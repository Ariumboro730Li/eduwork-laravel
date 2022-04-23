@extends('admin')
@section('header', 'Home Admin')
@section('konten')
    <div class="container">
        <div class="row justify-content-right">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are log in') }}
                    </div>
                </div>
            </div>
        </div>
    @endsection
