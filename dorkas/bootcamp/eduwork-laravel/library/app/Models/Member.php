<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'email', 'phone_number', 'address'];

    public function users()

    {
       return $this->hasOne('App\Models\User', 'member_id');

    }
}

