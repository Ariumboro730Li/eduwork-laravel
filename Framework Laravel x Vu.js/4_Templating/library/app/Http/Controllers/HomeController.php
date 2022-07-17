<?php

namespace App\Http\Controllers;

//Script Eloquent

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
        $books = Book::count();
        $members = Member::count();
        $publishers = Publisher::count();
        $transactions = Transaction::count();

        if (auth()->user()->level == 1) {
            return view('admin.home', compact('books', 'member', 'publisher', 'transaction'));
        }

//Script Eloquent 
        //$members = Member::with('user')->get();
        //$books = Book::with('publisher')->get();
        //$publishers = Publisher::with('books')->get();
        //$authors = Author::with('books')->get();
        //$catalogs = Catalog::with('books')->get();
        //$transactions = Transaction::with('member')->get();
        //$transactions = Transaction::with('transaction_details')->get();
        //$transactiondetails = TransactionDetail::with('transaction')->get();
        //$transactiondetails = TransactionDetail::with('books')->get();
        

//Script Query Builder

        // no.1
        $data = Member::select('*')
                    ->join('users','users.member_id','=','members.id')
                    ->get();
        
        // no.2            
        $data2 = Member::select('*')
                    ->leftJoin('users','users.member_id','=','members.id')
                    ->where('users.id', NULL)
                    ->get();
        
        // no.3
        $data3 = Member::select('*')
                    ->leftJoin('users','users.member_id','=','members.id')
                    ->where('users.id', NULL)
                    ->get();           

        // no.4
        $data4 = Member::select('members.id', 'members.name', 'members.phone_number')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->orderBy('members.id', 'asc')
                    ->get();
        
        // no.5
        // $data5 = Member::select('members.id', 'members.name', 'members.phone_number')
        //     ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //     ->groupBy('transactions.id', '=', 'members.id')
        //     ->get();
        
         // // no 5
        // $data5 = Transaction::select('members.id', 'members.name', 'members.phone_number')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->groupBy('transactions.member_id')
        //     ->having('transactions.member_id', '>', 1)
        //     ->get();

        // // no 6
        // $data6 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->get();

        // // no 7 
        // $data7 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->whereMonth('date_end', '6')
        //     ->get();

        // // no 8
        // $data8 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->whereMonth('date_start', '5')
        //     ->get();

        // // no 9 
        // $data9 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->whereMonth('date_start', '6')
        //     ->whereMonth('date_end', '6')
        //     ->get();

        // // no 10
        // $data10 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->where('address', 'like', '%Bandung%')
        //     ->get();

        // // no 11
        // $data11 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->where('gender', 'F')
        //     ->where('address', 'like', '%Bandung%')
        //     ->get();

        // // no 12
        // $data12 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn')
        //     ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->join('books', 'transaction_details.book_id', '=', 'books.id')
        //     ->where('transaction_details.qty', '>', 1)
        //     ->get();

        //  no 13
        //  $data13 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'books.price', 'books.price * transaction_details.qty')
        //      ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
        //      ->join('members', 'transactions.member_id', '=', 'members.id')
        //      ->join('books', 'transaction_details.book_id', '=', 'books.id')
        //      ->get();

        // // no 14
        // $data14 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'publishers.name as publisher', 'authors.name as author', 'catalogs.name as catalog')
        //     ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->join('books', 'transaction_details.book_id', '=', 'books.id')
        //     ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        //     ->join('authors', 'books.author_id', '=', 'authors.id')
        //     ->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
        //     ->get();

        // // no 15
        // $data15 = Catalog::select('catalogs.*', 'books.title')
        //     ->leftJoin('books', 'catalogs.id', '=', 'books.catalog_id')
        //     ->get();

        // // no 16
        // $data16 = Book::select('books.*', 'publishers.name')
        //     ->leftJoin('publishers', 'publishers.id', '=', 'books.publisher_id')
        //     ->get();

        // // no 17
        // $data17 = Book::where('author_id', 5)->count();

        // // no 18
        // $data18 = Book::select('*')->where('price', '>', '10000')->get();

        // // no 19 
        // $data19 = Book::select('*')
        //     ->where('author_id', '=', 1)
        //     ->where('qty', '>', '10')->get();

        // // no 20
        // $data20 = Member::select('*')
        //     ->whereMonth('created_at', '6')
        //     ->get();



        //return $data5;
        return view('home', compact('books', 'members', 'publishers', 'transactions'));

        
    }
}
