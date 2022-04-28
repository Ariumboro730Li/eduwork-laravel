<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Catalog;
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
