<?php

namespace App\Models;
use App\Models\Book;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';
    protected $guarded = [];
    //
    public function catalog()
    {
        return $this->hasMany(Book::class, 'id');
    }
}
