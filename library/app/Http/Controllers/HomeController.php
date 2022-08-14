<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Book;
use App\Models\Author;
use App\Models\Catalog;
use App\Models\Publisher;
use App\Models\Transaction;


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
        // $authors = Author::with('books')->get();
        // $catalogs = Catalog::with('books')->get();
        // $publishers = Publisher::with('books')->get();

        // $data = Member::select('*')
        //             ->join('users', 'users.member_id', '=', 'members.id')
        //             ->get();

        // $data2 = Member::select('*')
        //             ->leftJoin('users', 'users.member_id', '=', 'members.id')
        //             ->where('users.id', '=', NULL)
        //             ->get();

        // $data3 = Transaction::select('members.id', 'members.name')
        //             ->rightJoin('members', 'members.id', '=', 'transactions.member_id')
        //             ->where('transactions.member_id', '=', NULL)
        //             ->get();

        // $data4 = Member::select('members.id', 'members.name', 'members.phone_number')
        //             ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //             ->orderBy('members.id', 'asc')
        //             ->get();

        // $data6 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.transactions_date_start', 'transactions.transactions_date_end')
        //             ->join('transactions')
        //             ->get();

        // $data7 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.transactions_date_start', 'transactions.transactions_date_end')
        //             ->join('transactions')
        //             ->where(month('transactions.transactions_date_end', '=', '6'))
        //             ->get();

        // $data8 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.transactions_date_start', 'transactions.transactions_date_end')
        //             ->join('transactions')
        //             ->where(month('transactions.transactions_date_end', '=', '6'))
        //             ->get();

        // return $data8;
        return view('home');
    }
}
