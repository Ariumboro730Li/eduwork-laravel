<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function construct()
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
        $authors = Author::with('books')->get();

        //return $authors;
        return view('admin.author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $this->validate($request,[
            'id_author'  =>['required'],
            'name'  =>['required'],
            'email'  =>['required'],
            'phone_number'  =>['required'],
            'address'  =>['required'],
        ]);
        // $author = new author;
        // $author ->id_author =$request ->id_author;
        // $author ->name = $request ->name;
        // // $author->save();

        author::create('$request->all()');
        
        return redirect('author');
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
    public function edit($id)
    {
        $author= Author::where('id',$id)->first();

            // $author = Author::select('*')
            // ->where('id', $id)
            // ->first();
        return view('admin.author.edit',compact('author'));

        //return view('admin.author.edit',compact('author'));
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
        $this->validate($request,[
            'id_author'  =>['required'],
            'name'  =>['required'],
            'email'  =>['required'],
            'phone_number'  =>['required'],
            'address'  =>['required'],
            
        ]);

        $author->update( $request->all());
        
        return redirect('author');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect('author');
    }
}
