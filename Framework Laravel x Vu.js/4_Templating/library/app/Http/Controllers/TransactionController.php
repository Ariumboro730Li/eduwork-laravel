<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
        $transactions = transaction::with('users')->get();        

        return view ('admin.transaction.index', compact('transactions'));
    }

    public function api(request $request)
    {
        if ($request->status) {
            $transactions = transaction::where("status", strtoupper ($request->status));
        } else {
            $transactions = transaction::all();
        }

        //foreach ($transactions as $key => $transaction) {
        //    $transaction->date = convert_date($transaction->created_at);
        //}

        //$datatables = datatables()->of($transactions)->addIndexColumn();
        $datatables = DataTables::of($transactions)
                                ->addColumn('date', function($transactions) {
                                    return $transactions->created_at->format("H:i:s d F Y");                      
                                 })->addIndexColumn();

        return $datatables->make(true);
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
            'date_start'      => ['required'],
            'date_end'      => ['required'],
            'member_name'      => ['required'],
            'day'      => ['required'],
            'total_book'      => ['required'],
            'total_payment'      => ['required'],            
        ]);

        //$transaction = new transaction;
        //$transaction->name = $request->name;
        //$transaction->save();

        transaction::create($request->all());

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
        return view('admin.transaction', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('admin.transaction', compact('transaction'));
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
            'date_start'      => ['required'],
            'date_end'      => ['required'],
            'member_name'      => ['required'],
            'day'      => ['required'],
            'total_book'      => ['required'],
            'total_payment'      => ['required'],    
        ]);

        $transaction->update($request->all());

        return redirect('transactions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return redirect('transactions');
    }
}
