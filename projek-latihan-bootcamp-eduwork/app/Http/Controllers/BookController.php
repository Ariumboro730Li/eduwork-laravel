<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class BookController extends Controller
{
    function api(){
        $books = Book::all();
        return json_encode($books);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publisher_data = Publisher::all();
        $author_data = Author::all();
        $catalog_data = Catalog::all();
        return view('admin.books.index', compact('publisher_data','author_data','catalog_data'));
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
        // $validator = Validator::make(\request()->all(),
        //   [
        //     'isbn' => 'required',
        //     'title' => 'required',
        //     'year' => 'required',
        //     'qty' => 'required',
        //     'price' => 'required'
        // ]);
        // Book::create($request->all());
        // return redirect('/books');
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
        // $book = Book::findOrFail($request->$id);
        // $book->title = $request->get('title');
        // $book->year = $request->get('year');
        // $book->qty = $request->get('qty');
        // $book->price = $request->get('price');
        // $validator = Validator::make(request()->all(),
        //   [
        //     'isbn' => 'required',
        //     'title' => 'required',
        //     'year' => 'required',
        //     'qty' => 'required',
        //     'price' => 'required'
        // ]);
        // return $validator->fails();
        $book->update($request->all());
        // $book->save();
        // $book->update($request->all());

        // $input = $request->all();
        // $book->update($request->all());

        // dd($request->all());
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
        $book->delete();
    }
}
