<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    use HasFactory;

    public function transaction_details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}