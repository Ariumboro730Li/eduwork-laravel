<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

     protected $fillable = ['name','gender','phone_number','address','email'];
// -----------------relasi ke user---------- 

    public function user(){
        return $this->hasOne('App\Models\User', 'member_id');
    }

// -----------------end relasi ke user----------

// -----------------relasi ke transaction---------- 

    // public function transaction(){
    //     return $this->hasMany('App\Models\transaction', 'member_id');
    // }

// -----------------end relasi ke transaction----------     
}
