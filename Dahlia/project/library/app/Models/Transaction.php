<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $label = ['id','id_transaction','member_id','date_start','date_end'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member','member_id');
    }
    public function transactiondetails()
    {
        return $this->hasMany('App\Models\Transactiondetail','transaction_id');
    }
}
