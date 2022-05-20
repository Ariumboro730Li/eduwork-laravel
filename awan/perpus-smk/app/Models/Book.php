<?php

namespace App\Models;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public function publisher()
    {
        return $this->belongsTo('App\Models\Publisher', 'publisher_id');
    }

    public function author()
    {
        return $this->belongsTo('App\Models\Author', 'author_id');
    }

    public function catalog()
    {
        return $this->belongsTo('App\Models\Catalog', 'catalog_id');
    }
}
