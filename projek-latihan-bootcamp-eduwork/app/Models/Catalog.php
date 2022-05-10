<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';
    //
    public function catalog()
    {
        return $this->hasOne('App\model\Book', 'id');
    }
}
