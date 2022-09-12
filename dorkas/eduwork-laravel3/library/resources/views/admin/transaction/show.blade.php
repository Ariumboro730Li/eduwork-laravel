@extends('layouts.admin')

@section('title', 'Detail Transaction')


@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header text-white bg-primary">
            <a href="{{ url('transactions') }}" class="btn btn-outline-secondary shadow-sm float-right"><i class="fas fa-backward fa-sm text-white-50"></i> Back</a>
            <h4>Detail Transaction</h1>
        </div>

        <div class="card card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama Peminjam :</th>
                    <td>{{ $transaction->member->name }}</td>
                </tr>
                <tr>
                    <th>Tanggal Pinjam:</th>
                    <td>{{ $transaction->date_start }}</td>
                </tr>
                <tr>
                <th>Buku:</th>
                    <td>
                        @foreach ($transaction->TransactionDetails as $transactionDetail)
                        <ul>
                            <li>{{$transactionDetail->books->title}}</li>
                        </ul>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>Status:</th>
                    <td>{{ $transaction->status == 1 ? 'Selesai' : 'Belum Selesai' }}</td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
