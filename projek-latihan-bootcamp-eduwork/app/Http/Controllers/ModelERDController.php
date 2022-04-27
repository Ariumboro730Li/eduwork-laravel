<?php

namespace App\Http\Controllers;

use App\Member;
use App\Book;
use App\Publisher;
use App\Author;
use App\Catalog;
use Illuminate\Http\Request;

class ModelERDController extends Controller
{
    //
    public function showAllMembers()
    {
        $member = Member::with('user')->get();
        return $member;
    }
    public function showBooks()
    {
        $books = Book::with('publisher')->get();
        return $books;
    }
    public function showPublishers()
    {
        $publishers = Publisher::with('books')->get();
        return $publishers;
    }
    public function author()
    {
        $author = Author::with('author')->get();
        return $author;
    }
    public function catalogAll()
    {
        $catalog = Catalog::with('catalog')->get();
        return $catalog;
    }
}
