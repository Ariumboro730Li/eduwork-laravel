<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    //
    public function catalog()
    {
        return $this->hasOne('App\Book', 'catalog_id');
    }
}
