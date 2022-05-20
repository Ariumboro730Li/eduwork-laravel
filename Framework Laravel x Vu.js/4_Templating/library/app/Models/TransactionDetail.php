<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
     
    // public function transaction()
     public function book()
    {
    //    return $this->belongsTo('App\Models\Transaction', 'transaction_id');
        return $this->belongsTo('App\Models\Book', 'book_id');
    }
   
}
