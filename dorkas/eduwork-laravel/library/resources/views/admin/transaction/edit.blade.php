@extends('layouts.admin')

@section('title', 'Edit Transaction')
@section('page-heading', 'Edit Transaction')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .has-error .select2-selection {
        border-color: rgb(185, 74, 72) !important;
    }
</style>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-white bg-primary">
                <i class="fas fa-plus"></i> Edit Transaction
                <a href="{{ url('transactions') }}" class="btn btn-outline-secondary float-right"><i class="fas fa-backward"></i> Back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('transactions.update', $transaction->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group @error('member_id') has-error @enderror">
                                <label for="member_id">Member:</label>
                                <select name="member_id" id="member_id" class="form-control select2 @error('member_id') is-invalid @enderror">
                                    <option value="">Choose Member</option>
                                    @foreach ($members as $member)
                                        <option value="{{ old('member_id', $member->id) }}" {{ $transaction->member_id == $member->id ? 'selected' : '' }}>{{ $member->name }}</option>
                                    @endforeach
                                </select>

                                @error('member_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <div class="form-group">
                                    <label for="date_start">Date Start</label>
                                    <input type="date" name="date_start" id="date_start" class="form-control @error('date_start') is-invalid @enderror" value="{{ old('date_start', $transaction->date_start) }}">

                                    @error('date_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                -
                                <div class="form-group">
                                    <label for="date_end">Date End</label>
                                    <input type="date" name="date_end" id="date_end" class="form-control @error('date_end') is-invalid @enderror" value="{{ old('date_end',  $transaction->date_end) }}">

                                    @error('date_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group  @error('member_id') has-error @enderror">
                                <label for="book_id">Choose Book:</label>
                                <select name="book_id[]" id="book_id" class="form-control select2-multiple @error('book_id') is-invalid @enderror" multiple="multiple">
                                @foreach ($books as $book)
                                        <option value="{{ $book->id }}" {{ in_array($book->id, old('book_id', $transaction->transactionDetails->pluck('book_id')->toArray())) ? 'selected' : '' }}>{{ $book->title }}</option>
                                    @endforeach
                                </select>

                                @error('book_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <label>Status:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="borrowed" value="0" {{ $transaction->status === 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="borrowed">
                                    Belum Selesai
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" id="returned" value="1" {{ $transaction->status === 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="returned">
                                    Selesai
                                </label>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-3"><i class="fas fa-save"></i> Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
        $('.select2-multiple').select2();
    });
</script>
@endsection
