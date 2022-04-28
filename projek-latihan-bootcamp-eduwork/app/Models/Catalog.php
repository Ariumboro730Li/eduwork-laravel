<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    //
    public function catalog()
    {
        return $this->hasOne('App\model\Book', 'catalog_id');
    }
}
