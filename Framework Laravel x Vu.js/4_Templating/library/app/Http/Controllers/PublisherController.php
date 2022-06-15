<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PublisherController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publishers = publisher::with('books')->get();

        //return $publishers;
        return view ('admin.publisher.index', compact('publishers'));
    }

    public function api()
    {
        $publishers = publisher::all();

        //foreach ($publishers as $key => $publisher) {
        //    $publisher->date = convert_date($publisher->created_at);
        //}

        //$datatables = datatables()->of($publishers)->addIndexColumn();
        $datatables = DataTables::of($publishers)
                                ->addColumn('date', function($publishers) {
                                    return $publishers->created_at->format("H:i:s d F Y");                      
                                 })->addIndexColumn();

        return $datatables->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $this->validate($request,[
            'name'      => ['required'],
            'phone_number'      => ['required'],
            'email'      => ['required'],
            'address'      => ['required'],
        ]);

        //$publisher = new Publisher;
        //$publisher->name = $request->name;
        //$publisher->save();

        Publisher::create($request->all());

        return redirect('publishers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {
        return view('admin.publisher', compact('publisher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher)
    {
        $this->validate($request,[
            'name'      => ['required'],
            'phone_number'      => ['required'],
            'email'      => ['required'],
            'address'      => ['required'],
        ]);

        $publisher->update($request->all());

        return redirect('publishers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        return redirect('publishers');
    }
}
