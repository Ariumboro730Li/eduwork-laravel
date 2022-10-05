<?php

namespace App\Http\Controllers;

// use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;
use App\Models\Transaction;
use App\Models\Book;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\Validator;

class DashboardPeminjamanController extends Controller
{
    public function homeDashboard(){
        $member = Member::all();
        return $member;
        // return view('admin.peminjaman.index', compact('member'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $user = UserPerpus::with('relasiUser')->get();

        // return $user;
        // dd($user);
        $member = Member::all();
        dd($member);
        // $transaction = Transaction::all();
        // $buku = Book::all();
        // return $member;
        // return view('admin.peminjaman.index',compact('member', 'buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $members= Member::all();
        $books = Book::all();
        return view('admin.peminjaman.create', compact('books', 'members'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
        $request->validate([
            'member_id' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'book_id' => 'required'
        ]);
        Transaction::create($request->all());
        // dd($transaction);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
