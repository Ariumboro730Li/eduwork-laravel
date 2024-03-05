<?php

namespace App\Http\Controllers;

// use App\Models\Author;
// use App\Models\Book;
// use App\Models\Catalog;
use App\Models\Member;
// use App\Models\Publisher;
// use App\Models\Transaction;
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
        // $members = Member::with('user')->get();

        /* Publisher
        // $books = Book::with('publisher')->get();
        // $publishers = Publisher::with('books')->get();

        // Author
        /* $books = Book::with('author')->get();
        // $authors = Author::all();
        // $authors = Author::with('books')->get();

        /* Catalog
        // $catalogs = Book::with('catalog')->get();
        // $catalogs = Catalog::all();
        // $catalogs = Catalog::with('books')->get(); */

        /* Nomor 1
        // $Query1 = Member::select('*')
        //         ->join('users', 'users.member_id','=','members.id')
        //         ->get(); */

        /* Nomor 2
        // $Query2 = Member::select('*')
        //         ->leftJoin('users', 'users.member_id','=','members.id')
        //         ->where('users.id', NULL)
        //         ->get(); */

        /* Nomor 3
        // $Query3 = Transaction::select('members.id', 'members.name')
        //         ->rightJoin('members', 'members.id','=','transactions.member_id')
        //         ->where('transactions.member_id', NULL)
        //         ->get(); */

        /* Nomor 4
        // $Query4 = Member::select('members.id', 'members.name', 'members.phone_number')
        //         ->Join('transactions', 'transactions.member_id', '=', 'members.id')
        //         ->where('transactions.member_id', NULL)
        //         ->orderBy('members.id', 'asc')
        //         ->get(); */

        /* Nomor 5
        // $Query5 = Member::select(
        //               'members.id',
        //               'members.name',
        //               'members.phone_number'
        //          )  ->Join('transactions', 'transactions.member_id', '=', 'members.id')
        //              ->where('transactions.id','>',1)->count()
        //              ->get(); */

        /* Nomor 6
        // $Query6 = Member::select(
        //                 'members.name',
        //                 'members.phone_number',
        //                 'members.address'
        //          )  ->join('users', 'users.member_id','=','members.id')
        //             ->get(); */

        /* Nomor 7
        // $Query7 = Member::select(
        //               'members.phone_number',
        //               'members.name',
        //               'transactions.date_start',
        //               'transactions.date_end'
        //          )  ->Join('transactions', 'transactions.member_id', '=', 'members.id')
        //              ->whereMonth('transactions.date_end', '=', '06')
        //              ->get(); */

        /* Nomor 8
        // $Query8 = Member::select(
        //               'members.phone_number',
        //               'members.name',
        //               'members.address',
        //               'transactions.date_start',
        //               'transactions.date_end'
        //          )  ->Join('transactions', 'transactions.member_id', '=', 'members.id')
        //              ->whereDay('transactions.date_start', '=', '05')
        //              ->get();

        // return $Query8; */
        // return view('home')->with(['title' => 'Halaman Dashboard']);
    }
}
