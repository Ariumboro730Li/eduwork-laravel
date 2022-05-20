<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Member;
use App\Models\Catalog;
use App\Models\Publisher;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;

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
        // $members = Member::with('user')->get();
        // $books = Book::with('publisher')->get();
        // $publisher = Publisher::with('books')->get();
        // $member = Member::with('transactions')->get();
        // $transactions = Transaction::with('member')->get();
        // $transaction = Transaction::with('transaction_details')->get();
        // $transaction_detail = TransactionDetail::with('transaction')->get();
        // $transaction_detail = TransactionDetail::with('book')->get();
        // $author = Author::with('books')->get();
        // $book = Book::with('author')->get();
        // $book = Book::with('catalog')->get();
        $catalog = Catalog::with('books')->get();

        return $catalog;

        return view('home');
    }
}
