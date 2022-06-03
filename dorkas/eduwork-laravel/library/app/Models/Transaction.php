<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;

    // public function member()
    public function transactiondetail()
    {
    //    return $this->belongsTo('App\Models\Member', 'member_id');
        return $this->belongsTo('App\Models\TransactionDetail', 'transaction_detail_id');
    }

}
