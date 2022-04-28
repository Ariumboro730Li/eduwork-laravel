<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public function author()
    {
        return $this->hasMany('App\Models\Book', 'author_id');
    }
}
