<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users()

    {
        return $this->hasOne(User::class, 'member_id');
    }

    // Get the transaction for the member
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'member_id');
    }
}

