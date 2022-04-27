<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function publisher()
    {
        return $this->belongsTo('App\Publisher', 'publisher_id');
    }
}
