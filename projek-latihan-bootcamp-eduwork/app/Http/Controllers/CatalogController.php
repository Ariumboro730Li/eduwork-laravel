<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;
use Validator;
use Illuminate\Validation;

class CatalogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $catalogs = Catalog::all();
        // return $catalog;
        return view('catalog', compact('catalogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.catalogs.create');
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
        $catalog = new Catalog;
        $catalog->name = $request->name;
        $catalog->save();
        // dd($catalog);
        // return $request;
        return redirect('catalogs_page');
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
    public function edit(Catalog $katalog)
    {
        //
        // dd($catalog);
        // dd(['Request' => $id]);
        // return $katalog;
        // dd($id);
        return view('admin.catalogs.edit', compact('katalog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $katalog)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);
        $catalog = Catalog::find($katalog);
        $catalog->name = $request->name;
        $catalog->update();
        // dd($katalog);
        return redirect('catalogs_page');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalog $katalog)
    {
        //
        $katalog->delete();
        return redirect('catalogs_page');
    }
}
