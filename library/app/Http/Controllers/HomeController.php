<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Catalog;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
        // $books = Book::with('author')->get();
        // $author = Author::with('books')->get();      
        // $catalog = Catalog::with('books')->get();
        // $books = Book::with('catalog')->get();

        //no 1
        $data = Member::select('*')
                ->join('users','users.member_id','=','members.id')
                ->get();
        

        //no 2
        $data2 = Member::select('*')
                ->leftjoin('users','users.member_id','=','members.id')
                ->where('users.id', NULL)
                ->get();
        
        //no 3
        $data3 = Transaction::select('members.id','members.name')
                ->rightjoin('members','members.id','=','transactions.member_id')
                ->where('transactions.member_id', NULL)
                ->get();
        
        //no 4
        $data4 = Member::select('members.id','members.name','members.phone_number')
                ->join('transactions','transactions.member_id','=','members.id')
                ->orderBy('members.id', 'asc')
                ->get();
        
        //no 5
        $data5 = Member::select('members.id','members.name','members.phone_number',
                DB::raw('count(transactions.member_id)'))
                ->join('transactions','transactions.member_id','=','members.id')
                ->groupBy('transactions.member_id')
                ->havingRaw('count(transactions.member_id) > 1')
                ->get();

        #no 6
        $data6 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->get();

        #no 7
        $data7 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->whereMonth('transactions.date_end', '=', 6)
                ->get();
        
        #no 8
        $data8 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->whereMonth('transactions.date_start', '=', '5')
                ->get();

        #no 9
        $data9 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->whereMonth('transactions.date_start', '=', '6', 'AND', 'transactions.date_end', '=', '6')
                ->get();

        #no 10
        $data10 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->where('members.address','LIKE','%Bandung%')
                ->get();

        #no 11
        $data11 = Member::select('members.name','members.phone_number','members.address','members.gender','transactions.date_start','transactions.date_end')
                ->join('transactions','transactions.member_id','=','members.id')
                ->where('members.address','LIKE','%Bandung%', 'AND','members.gender','LIKE','%female%')
                ->get();

        #no 12
        $data12 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end','transaction_details.book_id','transaction_details.qty')
                ->join('transactions','transactions.member_id','=','members.id')
                ->join('transaction_details','transaction_details.transaction_id','=','transactions.id')
                ->where('transaction_details.qty','>', '1')
                ->get();

        #no 13
        $data13 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end',
                'transaction_details.book_id','transaction_details.qty','books.title','books.price',
                DB::raw('(transaction_details.qty * books.price) as total_harga'))
                ->join('transactions','members.id','=','transactions.member_id')
                ->join('transaction_details','transactions.id','=','transaction_details.transaction_id')
                ->join('books','books.id','=','transaction_details.book_id')
                ->get();


        #no 14
        $data14 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end',
                        'transaction_details.book_id','transaction_details.qty','books.title','publishers.name','authors.name','catalogs.name')
                      ->join('transactions','transactions.member_id','=','members.id')
                      ->join('transaction_details','transaction_details.transaction_id','=','transactions.id')
                      ->join('books','books.id','=','transaction_details.book_id')
                      ->join('publishers','publishers.id','=','books.publisher_id')
                      ->join('authors','authors.id','=','books.author_id')
                      ->join('catalogs','catalogs.id','=','books.catalog_id')
                      ->get();

        #no 15
        $data15 = Catalog::select('*','books.title')
                ->join('books','books.catalog_id','=','catalogs.id')
                ->get();

        #no 16
        $data16 = Book::select('*','publishers.name')
                ->leftjoin('publishers','books.publisher_id','=','publishers.id')
                ->get();

        #no 17
        $data17 = Author::select(DB::raw('count(books.author_id) as jumlah'))
                ->join('books','books.author_id','=','authors.id')
                ->where('books.author_id','=','PG05')
                ->get();

        #no 18
        $data18 = Book::select('*')
                ->where('books.price','>','10000')
                ->get();

        #no 19
        $data19 = Book::select('*')
                ->where('books.publisher_id','=','PN01', 'AND', 'books.qty', '>','10')
                ->get();

        #no 20
        $data20 = Member::select('*')
                ->whereMonth('members.created_at','=','6')
                ->get();

        //return $data20;
        // return $books;
        // return $catalog;
        // return $author;
        // return $books;
        // return $publisher;
        // return $books;
        //return $members;
        return view('home');
    }
}
