@extends('layouts.admin')
@section('header', 'Transaction')

@section('content')
<div class="container-fluid px-4">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                Create
            </div>
            <div class="card-body">
                <form method="post" action="{{ url('transaction') }}">
                    @csrf
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Members</label>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>members..</option>
                                @foreach ($member as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Date</label>
                        <div class="col-md-9">
                            <input type="date" name="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Books</label>
                        <div class="col-md-9">
                            <select class="form-select" aria-label="Default select example">
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
                            <select class="form-select" aria-label="Default select example">
                                <option value="Y">Y</option>
                                <option value="N">N</option>
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