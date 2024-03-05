<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::with('member')->get();

        //return $transactions;
        return view('admin.transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_transaction'  =>['required'],
            'name'  =>['required'],
            'email'  =>['required'],
            'phone_number'  =>['required'],
            'address'  =>['required'],
        ]);
        // $transaction = new transaction;
        // $transaction ->id_transaction =$request ->id_transaction;
        // $transaction ->name = $request ->name;
        // $transaction->save();

        Transaction::create('$request->all()');
        
        return redirect('transactions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $transaction = Transaction::select('*')
        ->where('id', $id)
        ->first();

        return view('admin.transaction.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $this->validate($request,[
            'id_transaction'  =>['required'],
            'name'  =>['required'],
            'email'  =>['required'],
            'phone_number'  =>['required'],
            'address'  =>['required'],
        ]);
        // $transaction = new transaction;
        // $transaction ->id_transaction =$request ->id_transaction;
        // $transaction ->name = $request ->name;
        // $transaction->save();

        $transaction->update($request->all());
        
        return redirect('transaction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
