<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AuthorController extends Controller
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
        //$authors =::all();
        //$authors = Author::with('books')->get();

        //return $authors;
        //return view('admin.author.index', compact('authors'));
        return view('admin.author.index');
    }

    public function api()
    {
        $authors = Author::all();

        //foreach ($authors as $key => $author) {
        //    $author->date = convert_date($author->created_at);
        //}

        //$datatables = datatables()->of($authors)->addIndexColumn();
          $datatables = datatables()->of($authors)
                                ->editColumn('created_at',function($members){
                                    return convert_date($members->created_at);
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
        //return view('admin.author');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
			'name' => ['required', 'min:3'],
			'phone_number' => ['required', 'min:10'],
			'email' => ['required', 'email', 'unique:publishers'],
			'address' => ['required']
		]);

        //$author = new Author;
        //$author->name = $request->name;
        //$author->save();

        Author::create($request->all());
        return redirect('authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('admin.author', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $this->validate($request, [
			'name' => ['required', 'min:3'],
			'phone_number' => ['required', 'min:10'],
			'email' => ['required', 'email', 'unique:publishers,email,'.$author->id],
			'address' => ['required']
		]);

        $author->update($request->all());
        return redirect('authors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete(); // Delete data with specific ID
        return redirect('authors')->with('success', 'Author has been Deleted');
    }
}
