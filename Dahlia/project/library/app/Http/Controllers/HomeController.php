<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use App\Models\Catalog;
use App\Models\Author;
use App\Models\Member;
use App\Models\Transaction;
use App\Models\TransactionDetail;
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
        // $member = Transaction::with('transactiondetails')->get();
        // // return $member;

        // //Number 1
        // $tabel1 = Member ::select('*')
        //             ->join('users','users.member_id','=','members.id')
        //             ->get();

        // //number 2            
        // $tabel2 = Member ::select('*')
        //             ->leftjoin('users','users.member_id','=','members.id')
        //             ->where('users.id',NULL)
        //             ->get();

        // //number 3            
        // $tabel3 = Member ::select('members.id','members.name','users.id')
        //             ->rightJoin('users','users.member_id','=','members.id')
        //             ->where('members.id',NULL)
        //             ->get();

        //  //number 4            
        // $tabel4 = Member ::select('members.id','members.name','members.phone_number','transactions.id')
        //             ->join('transactions','transactions.member_id','=','members.id')
        //             ->orderBy('transactions.id','asc')
        //             ->get();

        // //number 5 
        // $tabel5 = Member::select('members.id','members.name','members.phone_number')
        //             ->leftjoin('transactions','members.id','=','transactions.member_id')
        //             ->whereNotNull('transactions.member_id')
        //             ->groupBy('members.id', 'members.name', 'members.phone_number')
        //             ->havingRaw('COUNT(transactions.member_id) > 1')
        //             ->get();


        // //number 6
        // $tabel6 = Member::select('members.id','members.name','members.phone_number','transactions.date_start','transactions.date_end')              
        //             ->join('transactions','transactions.member_id','=','members.id')
        //             // ->whereMonth('members.date_end', '=', '01')
        //             ->get();

    
        // //number 7
        // $tabel7 = Member::select('members.id','members.phone_number','members.name','transactions.date_start','transactions.date_end')  
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->whereMonth('transactions.date_end', '=', '06')
        //             ->get();
                    
        
        // //number 8
        // $tabel8 = Member::select('members.name','members.phone_number','transactions.date_start','transactions.date_end')  
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->whereMonth('transactions.date_start', '=', '05')
        //             ->get();

        // //number 9
        // $tabel9 = Member::select('members.name','members.phone_number','transactions.date_start','transactions.date_end')  
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->whereMonth('transactions.date_start','=','06')
        //             ->whereMonth('transactions.date_end','=','06')
        //             ->get();
        
        // //number 10
        // $tabel10 = Member::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')  
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->where('members.phone_number','=','082351578666')
        //             ->get();
        
        // //number 11
        // $tabel11 = Member::select('members.name','members.phone_number','members.address','members.gender','transactions.date_start','transactions.date_end')  
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->where('members.address','=','1061 Graham Island Lavonneton, CT 54177')
        //             ->where('members.gender','=','F')
        //             ->get();

        //  //number 12
        // $tabel12 = Member::select('members.id','members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end','transactiondetail.id','transactiondetail.book_id','transactiondetail.qty')  
        //             ->join('transactions', 'transactions.member_id','=','members.id')
        //             ->join('transactiondetail','transactiondetail.transaction_id','=','transactions.id')
        //             ->where('transactiondetail.qty','>=',10)
        //             ->get(); 


        // //number 13
        // $tabe13 = DB::table('members')
        //             ->select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transactiondetail.qty', 'books.title', 'books.price', DB::raw('SUM(transactiondetail.qty * books.price) as total'))
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->join('transactiondetail', 'transactiondetail.transaction_id', '=', 'transactions.id')
        //             ->join('books', 'books.id', '=', 'transactiondetail.book_id')
        //             ->groupBy('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transactiondetail.qty', 'books.title', 'books.price')
        //             ->get();

        // //number 14
        // $tabel14 = Transaction::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'books.qty', 'books.title', 'books.price')
        //             ->from('transactions')
        //             ->join('members', 'transactions.member_id', '=', 'members.id')
        //             ->join('transactiondetail', 'transactions.id', '=', 'transactiondetail.transaction_id')
        //             ->join('books', 'transactiondetail.book_id', '=', 'books.id')
        //             ->get();


        // return $tabel14;
        return view('home');



    }
}
