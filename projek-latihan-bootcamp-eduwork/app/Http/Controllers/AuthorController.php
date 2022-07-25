<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
// use DataTables;
// use \Yajra\Datatables\Datatables;
// use Yajra\Datatables\Facades\Datatables;
// use Yajra\Datatables\Datatables;
use Yajra\DataTables\CollectionDataTable;


class AuthorController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return $catalog;
        $author= Author::all();
        return view('admin.author', compact('author'));
    }

    public function api()
    {
        $author = Author::all();
        // dd($author);
        $datatables = datatables()->of($author)->addIndexColumn();
        return $datatables->make(true);
        // return (new CollectionDataTable($author))->toJson();
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);
        Author::create($request->all());
        return redirect('author');
        // return $request;
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
        ]);
        $author->update($request->all());
        return redirect('author');
    }
    public function tes(){
        return view('admin.publisher.tes');
        // return "Tes";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();
    }
}
