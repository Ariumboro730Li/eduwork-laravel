<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    //public function publisher()
    public function transactiondetail()
    {
    //    return $this->belongsTo('App\Models\Publisher', 'publisher_id');
        return $this->belongsTo('App\Models\TransactionDetail', 'transactiondetail_id');
    }
}
