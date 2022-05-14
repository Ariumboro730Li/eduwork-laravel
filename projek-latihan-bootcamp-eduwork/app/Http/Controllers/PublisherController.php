<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publishers = Publisher::all();
        // return $catalog;
        return view('publisher', compact('publishers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.publisher.create');
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
        $rules = [
            'name' => 'required',
        ];

        $customMessages = [
            'required' => 'Membutuhkan field is required.'
        ];

        $this->validate($request, $rules, $customMessages);
        // $request->validate([
        //     'name.required' => 'Isi ini'
        // ]);
        $publish = new Publisher;
        $publish->name = $request->name;
        $publish->email = $request->email;
        $publish->phone_number = $request->no_telepon;
        $publish->address = $request->alamat;
        $publish->save();
        // dd($catalog);
        // return $request;
        return redirect('publisher_page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $penerbit)
    {
        //
        $pbls = Publisher::all();
        // dd($pbls);
        // return $pbls;
        return view('admin.publisher.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $penerbit)
    {
        //
        $publisher = Publisher::find($penerbit);
        $publisher->name = $request->name;
        $publisher->email = $request->email;
        $publisher->phone_number = $request->phone_number;
        $publisher->address = $request->address;
        $publisher->update();
        return redirect('publisher_page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
