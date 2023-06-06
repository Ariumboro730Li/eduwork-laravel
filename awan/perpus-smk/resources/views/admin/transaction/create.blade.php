@extends('layouts.admin')
@section('header', 'Transaction')

@section('content')
<div class="container-fluid px-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Create
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('transactions') }}">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Members</label>
                        <div class="col-md-9">
                            <select name="member_id" class="form-select" aria-label="Default select example">
                                <option selected>members..</option>
                                @foreach ($member as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Tanggal Pinjam</label>
                        <div class="col-md-9">
                            <input type="date" name="date_start" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Tanggal Kembali</label>
                        <div class="col-md-9">
                            <input type="date" name="date_end" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Books</label>
                        <div class="col-md-9">
                            <select name="book_id" class="form-select" aria-label="Default select example">
                                <option selected>books..</option>
                                @foreach ($book as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Status</label>
                        <div class="col-md-9">
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option value="Y">Dipinjam</option>
                            </select>
                        </div>
                    </div>
                </div>
            <div class="card-footer">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection