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
        // relasi member ke user
        // $members = Member::with('user')->get();

        // relasi buku ke publisher
        // $books = Book::with('publisher')->get();

        // relasi publisher ke buku
        // $publisher = Publisher::with('books')->get();

        // relasi member ke transaksi
        // $member = Member::with('transactions')->get();

        // relasi transaksi ke member
        // $transactions = Transaction::with('member')->get();

        // relasi transaksi ke detail transaksi
        // $transaction = Transaction::with('transaction_details')->get();

        // relasi detail transaksi ke transaksi
        // $transaction_detail = TransactionDetail::with('transaction')->get();

        // relasi detail transaksi ke buku
        // $transaction_detail = TransactionDetail::with('book')->get();

        // relasi author ke buku
        // $author = Author::with('books')->get();

        // relasi buku ke author
        // $book = Book::with('author')->get();

        // relasi buku ke katalog
        // $book = Book::with('catalog')->get();

        // relasi katalog ke buku
        // $catalog = Catalog::with('books')->get();


        // no 1
        $data1 = Member::select('*')
            ->join('users', 'members.id', '=', 'users.member_id')
            ->get();

        // no 2
        $data2 = Member::select('*')
            ->leftJoin('users', 'members.id', '=', 'users.member_id')
            ->where('users.id', NULL)
            ->get();

        // no 3
        $data3 = Transaction::select('members.id', 'members.name')
            ->rightJoin('members', 'transactions.member_id', '=', 'members.id')
            ->where('transactions.member_id', NULL)
            ->get();

        // no 4
        $data4 = Member::select('members.id', 'members.name', 'members.phone_number')
            ->join('transactions', 'members.id', '=', 'transactions.member_id')
            ->orderBy('members.id', 'asc')
            ->get();

        // no 5
        $data5 = Transaction::select('members.id', 'members.name', 'members.phone_number')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->groupBy('transactions.member_id')
            ->having('transactions.member_id', '>', 1)
            ->get();

        // no 6
        $data6 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->get();

        // no 7 
        $data7 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->whereMonth('date_end', '6')
            ->get();

        // no 8
        $data8 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->whereMonth('date_start', '5')
            ->get();

        // no 9 
        $data9 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->whereMonth('date_start', '6')
            ->whereMonth('date_end', '6')
            ->get();

        // no 10
        $data10 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->where('address', 'like', '%Bandung%')
            ->get();

        // no 11
        $data11 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->where('gender', 'F')
            ->where('address', 'like', '%Bandung%')
            ->get();

        // no 12
        $data12 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn')
            ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->join('books', 'transaction_details.book_id', '=', 'books.id')
            ->where('transaction_details.qty', '>', 1)
            ->get();

        // no 13
        // $data13 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'books.price', 'books.price * transaction_details.qty')
        //     ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
        //     ->join('members', 'transactions.member_id', '=', 'members.id')
        //     ->join('books', 'transaction_details.book_id', '=', 'books.id')
        //     ->get();

        // no 14
        $data14 = TransactionDetail::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'publishers.name as publisher', 'authors.name as author', 'catalogs.name as catalog')
            ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
            ->join('members', 'transactions.member_id', '=', 'members.id')
            ->join('books', 'transaction_details.book_id', '=', 'books.id')
            ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
            ->join('authors', 'books.author_id', '=', 'authors.id')
            ->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
            ->get();

        // no 15
        $data15 = Catalog::select('catalogs.*', 'books.title')
            ->leftJoin('books', 'catalogs.id', '=', 'books.catalog_id')
            ->get();

        // no 16
        $data16 = Book::select('books.*', 'publishers.name')
            ->leftJoin('publishers', 'publishers.id', '=', 'books.publisher_id')
            ->get();

        // no 17
        $data17 = Book::where('author_id', 5)->count();

        // no 18
        $data18 = Book::select('*')->where('price', '>', '10000')->get();

        // no 19 
        $data19 = Book::select('*')
            ->where('author_id', '=', 1)
            ->where('qty', '>', '10')->get();

        // no 20
        $data20 = Member::select('*')
            ->whereMonth('created_at', '6')
            ->get();

        return $data13;

        // return view('home');
    }
}
