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
        $request->validate([
            'name.required' => 'Isi ini',
            'email.required' => 'Harap isi'
        ]);
        $publisher = new Publisher();
        $publisher->name = $request['name'];
        $publisher->email = $request['email'];
        $publisher->phone_number = $request['phone_number'];
        $publisher->address = $request['address'];
        $publisher->save();
        // return $request;
        return redirect('publisher');
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
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);

        $penerbit = Publisher::find($id);
        $penerbit->name = $request->name;
        $penerbit->email = $request->email;
        $penerbit->phone_number = $request->phone_number;
        $penerbit->address = $request->address;
        $penerbit->save();
        // $penerbit->update($request->all());
        return redirect('publisher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
        //
        $publisher->delete();
    }
}
