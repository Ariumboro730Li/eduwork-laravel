<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBaru;
use Illuminate\Http\Request;

class TransaksiBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaksibaru.index');
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
     * @param  \App\Models\TransaksiBaru  $transaksiBaru
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiBaru $transaksiBaru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransaksiBaru  $transaksiBaru
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiBaru $transaksiBaru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransaksiBaru  $transaksiBaru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiBaru $transaksiBaru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransaksiBaru  $transaksiBaru
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransaksiBaru $transaksiBaru)
    {
        //
    }
}
