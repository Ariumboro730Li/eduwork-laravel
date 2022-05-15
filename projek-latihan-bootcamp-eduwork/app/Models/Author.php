<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $fillable = ['name', 'email', 'phone_number', 'address'];
    public function author()
    {
        return $this->hasMany('App\Models\Book', 'author_id');
    }
}
