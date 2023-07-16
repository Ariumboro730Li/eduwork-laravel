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
        
      // -----------------relasi member ke user----------  
        
        $members= Member::with('user')->get();
        return $members;

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
        
    
        return view('home');
    }
}
