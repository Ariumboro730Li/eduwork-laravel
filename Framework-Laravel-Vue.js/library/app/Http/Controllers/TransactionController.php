<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Book;
use App\Models\User;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

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
        $transactions = Transaction::select('transactions.date_start','transactions.date_end', 'members.name')
                            ->join('members', 'members.id', '=', 'transactions.member_id')
                            ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
                            ->join('books', 'books.id', '=', 'transaction_details.book_id')
                            ->get();

        return view('admin.transaction.index')->with('transactions', $transactions);
    }

    public function api(Request $request)
    {
        if ($request->status) {
            $transactions = Transaction::with(['transactionDetails.book', 'member'])
                ->where('status', '=', $request->status == 2 ? 0 : 1)
                ->get();
        } else if ($request->date_start) {
            $transactions = Transaction::with(['transactionDetails.book', 'member'])
                ->where('date_start', '>=', $request->date_start)
                ->get();
        } else {
            $transactions = Transaction::with(['transactionDetails.book', 'member'])->get();
        }

        $datatables = datatables()
            ->of($transactions)
            ->addColumn('duration', function ($transaction) {
                return dateDifference($transaction->date_start, $transaction->date_end) . " Days";
            })
            ->addColumn('price', function ($transaction) {
                $prices = $transaction->transactionDetails->sum('book.price');
                return "Rp. " . number_format($prices);
            })
            ->addColumn('statusTransaction', function ($transaction) {
                return $transaction->status ? "Has been returned" : "Not returned yet";
            })
            ->addIndexColumn();

        return $datatables->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::all();
        $books = Book::all();
         return view ('admin.transaction.create', compact('members', 'books'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request,[
            'member_id'      =>['required'],
            'date_start'      =>['required'],
            'date_end'      =>['required'],
            'book_id'      =>['required'],
        ]);
        
        try {
            // Insert Transactions data into database
            $transactions = Transaction::create([
                'member_id' => $request->member_id,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'status' => false,
            ]);
            // Insert Transaction Details data into database
            if ($transactions) {
                foreach ($request->book_id as $book) {
                    TransactionDetail::create([
                        'transaction_id' => Transaction::latest()->first()->id,
                        'book_id' => $book,
                        'quantity' => 1,
                    ]);

                    // update Books Stock
                    $books = Book::find($book);
                    $books->quantity -= 1;
                    $books->save();
                }
            }
            DB::commit();
        } catch (\Throwable $error) {
            DB::rollback();
            return $error;
        }

        return redirect('transactions')->with('success', 'New transaction data has been Added');
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
        {
        
            $deleteTransactionDetail = TransactionDetail::where('transaction_id', $transaction->id);
            $deleteTransaction = Transaction::find($transaction->id);
            // Delete data with specific ID
            if($deleteTransactionDetail->delete()){
                $deleteTransaction->delete();
            }
        }
    }
}
