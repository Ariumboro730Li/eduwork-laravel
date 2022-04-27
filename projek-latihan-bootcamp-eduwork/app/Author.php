<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    public function author()
    {
        return $this->hasMany('App\Book', 'author_id');
    }
}
