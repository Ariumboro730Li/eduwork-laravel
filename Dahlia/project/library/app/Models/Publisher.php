<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $label = ['id','id_publisher','name','email','phone_number','address'];

    public function books()
    {
        return $this->hasMany('App\Models\Book','publisher_id');
    }
}
