<?php

namespace App\Models;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function tranDetails()
    {
        return $this->hasMany('App\Models\TransactionDetail', 'transaction_id');
    }
}
