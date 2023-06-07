@extends('layouts.admin')
@section('header', 'Transaction')

@section('content')
<div class="container-fluid px-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                @foreach ($data as $items)
                    
                <form method="post" action="{{ url('transactions/'.$items->transaction_id) }}">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Members</label>
                        <div class="col-md-9">
                            <select name="member_id" class="form-select" aria-label="Default select example">
                                @foreach ($member as $item)
                                    <option value="{{ $item->id }}" {{ ( $item->id == $items->member_id) ? 'selected' : '' }}> 
                                        {{ $item->name }} 
                                    </option>
                                    {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Tanggal Pinjam</label>
                        
                        <div class="col-md-9">
                            <input type="date" value="{{ $items->date_start }}" name="date_start" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Tanggal Kembali</label>
                        <div class="col-md-9">
                            <input type="date" value="{{ $items->date_end }}" name="date_end" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Books</label>
                        <div class="col-md-9">
                            <select name="book_id" class="form-select" aria-label="Default select example">
                                @foreach ($book as $item)
                                    <option value="{{ $item->id }}" {{ ( $item->id == $items->book_id) ? 'selected' : '' }}> 
                                        {{ $item->title }} 
                                    </option>
                                    {{-- <option value="{{ $item->id }}">{{ $item->title }}</option> --}}
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Status</label>
                        <div class="col-md-9">
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option value="Y">Dipinjam</option>
                                <option value="N">Dikembalikan</option>
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
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection