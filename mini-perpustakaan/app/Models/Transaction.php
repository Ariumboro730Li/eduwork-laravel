<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'transactions';
    public $timestamps = false;
    public function member(){
        return $this->belongsTo(Member::class);
    }
    public function book(){
        return $this->hasMany(Book::class,'transaction_details')->withPivot('qty');
    }
}
