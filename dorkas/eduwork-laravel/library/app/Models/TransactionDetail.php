<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id', 'book_id','qty'];


    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

    public function books(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id');
    }


    // public function transaction()
    // {
    //     return $this->belongsTo('App\Models\Transaction','id');
    // }
}
