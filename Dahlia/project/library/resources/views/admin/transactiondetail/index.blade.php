@extends('layouts.admin')
@section('header','Transaction Detail')
@section('content')

ini adalah halaman Transaction Detail
<br><br>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-20">
                    <div class="card">
                        <div class="card-header">            
                        <h3 class="card-title">Table Transaction Detail</h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul
                            </div>
                        </div>    
                    </div>
                
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 20px">Number</th>
                                <th class="text-center">ID Dtransaction</th>
                                <th class="text-center">ID Transaction</th>
                                <th class="text-center">ID Book</th>
                                <th class="text-center">QTY</th>
                                <th class="text-center">Created At</th>
                                <th class="text-center">Updated At</th>
                                <!-- <th style="width: 40px">Label</th> -->
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($transactiondetails as $key =>  $transactiondetail)
                                <tr>
                                    <td>{{$key +1}}</td>
                                    <td>{{ $transactiondetail->id_DTransaction}}</td>
                                    <td>{{ $transactiondetail->transaction_id}}</td>
                                    <td>{{ $transactiondetail->book_id}}</td>
                                    <td>{{ $transactiondetail->qty}}</td>
                                    <td>{{ date ('d/m/y',strtotime ($transactiondetail->created_at))}}</td>
                                    <td>{{ date('d/m/y', strtotime ($transactiondetail->updated_at))}}</td>
                                    <!-- <td><span class="badge bg-danger"></span></td> -->
                                </tr>
                                @endforeach
                        
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection