<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Catalog;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
// Script Eloquent Relationship Model
       // $members = Member::with('user')->get();
       // $books = Book::with('publisher')->get();
       // $publishers = Publisher::with('books')->get();
       // $authors = Author::with('books')->get();
       // $catalogs = Catalog::with('books')->get();
       // $transactions = Transaction::with('member')->get();
       // $transactions = Transaction::with('transaction_details')->get();
       // $transactiondetails = TransactionDetail::with('transaction')->get();
       // $transactiondetails = TransactionDetail::with('books')->get();

        // return $transactiondetails;

// Script Query Builder

        // Nomor 1
        $data1 = Member::select('*')
                    ->join('users', 'users.member_id', '=', 'members.id')
                    ->get();

        // nomor 2
        $data2 = Member::select('*')
                    ->leftJoin('users','users.member_id','=','members.id')
                    ->where('users.id', NULL)
                    ->get();

        // nomor 3
        $data3 = Member::select('*')
                    ->leftJoin('users','users.member_id','=','members.id')
                    ->where('users.id', NULL)
                    ->get();

        // nomor 4
        $data4 = Member::select('members.id', 'members.name', 'members.phone_number')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->orderBy('members.id', 'asc')
                    ->get();

        // nomor 5
       //  $data5 = Member::select('members.id', 'members.name', 'members.phone_number')
               //     ->join('transactions', 'transactions.member_id', '=', 'members.id')
               //     ->groupBy('transactions.id', '=' 'members.id')
               //     ->get();



        // return $data4;
        return view('home');
    }
}
