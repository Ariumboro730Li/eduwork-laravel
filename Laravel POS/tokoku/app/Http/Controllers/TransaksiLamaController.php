<?php

namespace App\Http\Controllers;

use App\Models\TransaksiLama;
use Illuminate\Http\Request;

class TransaksiLamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaksilama.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransaksiLama  $transaksiLama
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiLama $transaksiLama)
    {
        return view('admin.transaksilama.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransaksiLama  $transaksiLama
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiLama $transaksiLama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransaksiLama  $transaksiLama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiLama $transaksiLama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransaksiLama  $transaksiLama
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransaksiLama $transaksiLama)
    {
        //
    }
}
