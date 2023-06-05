<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaction');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api()
    {
        $transaction = Transaction::select(DB::raw('(transaction_details.qty * books.price) as price'), 'transactions.date_start', 'transactions.date_end', 'members.name', 'transactions.status', 'transaction_details.qty')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->Rightjoin('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id')
            ->Leftjoin('books', 'transaction_details.book_id', '=', 'books.id')
            ->get();
        $datatables = datatables()->of($transaction)
            ->addColumn('lama_hari', function ($transaction) {
                $fdate = $transaction->date_start;
                $tdate = $transaction->date_end;
                $datetime1 = new DateTime($fdate);
                $datetime2 = new DateTime($tdate);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
                return $days;
            })
            ->addIndexColumn();

        return $datatables->make(true);
    }

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Transaction $transaction)
    {
        //
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
        //
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
