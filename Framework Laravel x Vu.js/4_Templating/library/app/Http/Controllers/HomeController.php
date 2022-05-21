<?php

namespace App\Http\Controllers;

//Script Equi

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
//Script Equip 
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
        //$data5 = Transaction::select('transactions.member_id') AS total  
        
        //return $data4;
        return view('home');
    }
}
