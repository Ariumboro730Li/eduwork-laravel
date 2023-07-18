<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use App\Models\Publisher;
use App\Models\Member;
use App\Models\transaction;
use App\Models\catalog;
use App\Models\author;
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

       
        // $books= Book::all();

      // -----------------tugas 9--------------------------------------
        
      // -----------------relasi member ke user----------  
        
        // $members= Member::with('user')->get();
        // return $members;

      // -----------------end relasi ke user---------- 
      // -----------------relasi member ke transaction---------- 
        
        // $members= Member::with('transaction')->get();
        // return $members;

      // -----------------end relasi ke transaction---------- 

      // -----------------relasi publisher ke book---------- 
        
        // $publishers= Publisher::with('books')->get();
        // return $publishers;
        
      // -----------------end relasi publisher ke book----------

      // -----------------relasi catalog ke book---------- 
        
        // $catalog= Catalog::with('books')->get();
        // return $catalog;
        
      // -----------------end relasi catalog ke book----------

       // -----------------relasi author ke book---------- 
        
        // $author= Author::with('books')->get();
        // return $author;
        
      // -----------------end relasi author ke book---------- 

      // -----------------relasi book ke publisher---------- 
        
        // $books= Book::with('publisher')->get();
        // return $books;
        
      // -----------------end relasi book ke publisher----------

      // -----------------relasi book ke catalog---------- 
        
        // $books= Book::with('catalog')->get();
        // return $books;
        
      // -----------------end relasi book ke catalog----------  

      // -----------------relasi book ke author---------- 
        
        // $books= Book::with('author')->get();
        // return $books;
        
      // -----------------end relasi book ke author----------     
        
    // -----------------akhir tugas 9------------------------------------







    // ------------------------Tugas 10-----------------------------------

      // no.1 
         // $data = Member::select('*')
         //         ->join('users', 'users.member_id','=','members.id')
         //         ->get();

         // $data = Member::select('*')
         //         ->where('gender','=','M')
         //         ->get(); 
      
      //no.2
         // $data = Member::select('*')
         //         ->leftjoin('users', 'users.member_id','=','members.id')
         //         ->where('users.id',null)
         //         ->get();

            // $data = Member::select('*')
            //      ->where('gender','!=','M')
            //      ->get(); 

      // no.3

            // $data = transaction::select('members.id','members.name')
            //    ->rightjoin('members', 'members.id','=','transactions.member_id')
            //    ->where('transactions.member_id', null)
            //    ->get();

      // no.4
            // $data = Member::select('members.id','members.name','members.phone_number')
            //      ->join('transactions', 'transactions.member_id','=','members.id')
            //      ->orderBy('members.id','asc')
            //      ->get();

            // $data=transaction::select('members.id','members.name')
            //    ->rightjoin('members', 'members.id','=','transactions.member_id')
            //    ->where('transactions.member_id','!=', null)
            //    ->orderBy('transactions.member_id','asc')
            //    ->get();


      // no.5
           // $data = transaction::select('members.id','members.name','members.phone_number')
           //     ->join('members', 'members.id','=','transactions.member_id')
           //     ->groupBy('members.id','members.name','members.phone_number')
           //     ->havingRaw('count(member_id) > ?', [1])
           //     ->get();
        
      // no.6
             // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
             //   ->join('members', 'members.id','=','transactions.member_id')
             //   ->orderBy('transactions.member_id','asc')
             //   ->get();

      // no.7
              // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
              //  ->join('members', 'members.id','=','transactions.member_id')
              //  ->whereMONTH('transactions.date_end','=', '06')
              //  ->orderBy('transactions.member_id','asc')
              //  ->get();
      // no.8
               // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
               // ->join('members', 'members.id','=','transactions.member_id')
               // ->whereMONTH('transactions.date_end','=', '05')
               // ->orderBy('transactions.member_id','asc')
               // ->get();

        // no.9
              // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
              //  ->join('members', 'members.id','=','transactions.member_id')
              //  ->whereMONTH('transactions.date_end','=', '06')
              //  ->whereMONTH('transactions.date_end','=', '06')
              //  ->orderBy('transactions.member_id','asc')
              //  ->get();

      // no.10
              // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
              //  ->join('members', 'members.id','=','transactions.member_id')
              //  ->where('members.address','LIKE', '%bandung%')
              //  ->orderBy('transactions.member_id','asc')
              //  ->get();
      
      // no.11
              // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
              //  ->join('members', 'members.id','=','transactions.member_id')
              //  ->where('members.address','LIKE', '%bandung%')
              //  ->where('members.gender','=', 'F')
              //  ->orderBy('transactions.member_id','asc')
              //  ->get();

      // no.12
              // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end','books.isbn','transaction_details.qty')
              //  ->join('members', 'members.id','=','transactions.member_id')
              //  ->join('transaction_details', 'transaction_details.transaction_id','=','transactions.id')
              //  ->join('books', 'books.id','=','transaction_details.book_id')
              //  ->where('transaction_details.qty','>', 1)
              //  ->orderBy('transactions.member_id','asc')
              //  ->get();
      
      // no.13
              // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end','books.isbn','transaction_details.qty','books.title','books.price', transaction::raw('sum(transaction_details.qty*books.price) as total_harga'))
              //  ->join('members', 'members.id','=','transactions.member_id')
              //  ->join('transaction_details', 'transaction_details.transaction_id','=','transactions.id')
              //  ->join('books', 'books.id','=','transaction_details.book_id')
              //  ->groupBy('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end','books.isbn','transaction_details.qty','books.title','books.price')
              //  ->orderBy('transactions.member_id','asc')
              //  ->get();
      
      //no.14
              // $data = transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end','books.isbn','transaction_details.qty','books.title','books.price','publishers.name_p as name_publisher', 'authors.name_a as name_author', 'catalogs.name_c as name_catalog')
              //  ->join('members', 'members.id','=','transactions.member_id')
              //  ->join('transaction_details', 'transaction_details.transaction_id','=','transactions.id')
              //  ->join('books', 'books.id','=','transaction_details.book_id')
              //  ->join('publishers', 'publishers.id','=','books.publisher_id')
              //  ->join('authors', 'authors.id','=','books.author_id')
              //  ->join('catalogs', 'catalogs.id','=','books.catalog_id')
              //  ->orderBy('transactions.member_id','asc')
              //  ->get();

      // no.15
              // $data = Book::select('catalogs.*','books.title')
              //    ->join('catalogs', 'catalogs.id','=','books.catalog_id')
              //    ->get(); 

      // no.16
              // $data = Book::select('books.*', 'publishers.name_p')
              //  ->join('publishers', 'publishers.id','=','books.publisher_id')
              //  ->get(); 

      // no.17
               // $data = Book::groupBy('author_id')
               //   ->select('author_id', \DB::raw('count(*) as jumlah_pengarang'))
               //   ->where('author_id','=','10')
               //   ->get();

      // no.18
              // $data = Book::select('books.*')
              //  ->where('price','>', 17000)
              //  ->get();

      // no.19
              // $data = Book::select('books.*')
              //  ->join('publishers', 'publishers.id','=','books.publisher_id')
              //  ->where('publishers.name_p','=','Isadore Effertz')
              //  ->where('qty','>', 15)
              //  ->get(); 

      // no.20
              $data = Member::select('members.*') 
              ->whereMONTH('created_at','=', '06')
               ->get(); 


              


          return $data;

    // ------------------------Akhir Tugas 10-----------------------------


        return view('home');
    }
}
