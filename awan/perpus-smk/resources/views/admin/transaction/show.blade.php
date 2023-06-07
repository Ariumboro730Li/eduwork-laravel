@extends('layouts.admin')
@section('header', 'Transaction')

@section('content')
<div class="container-fluid px-4">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                Detail Peminjaman
            </div>
            <div class="card-body">
                <form>
                    @foreach ($data as $item)
                        
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Member</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $item->name }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Tanggal Peminjaman</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $item->date_start }} / {{ $item->date_end }}" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Books</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $item->title }}" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Status</label>
                            <div class="col-md-9">
                                <input type="text" value="{{ $item->status }}" class="form-control">
                            </div>
                        </div>
                    </div>
                    @endforeach

            <div class="card-footer">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <a href="{{ url('transactions') }}"><button type="button" class="btn btn-primary">back</button></a>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection