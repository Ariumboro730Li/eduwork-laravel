<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\transactiondetailDetail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactiondetails = TransactionDetail::with('transaction')->get();

        //return $transactiondetails;
        return view('admin.transactiondetail.index', compact('transactiondetails'));
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
     * @param  \App\Models\transactiondetailDetail  $transactiondetailDetail
     * @return \Illuminate\Http\Response
     */
    public function show(transactiondetailDetail $transactiondetailDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transactiondetailDetail  $transactiondetailDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(transactiondetailDetail $transactiondetailDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transactiondetailDetail  $transactiondetailDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transactiondetailDetail $transactiondetailDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transactiondetailDetail  $transactiondetailDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(transactiondetailDetail $transactiondetailDetail)
    {
        //
    }
}
