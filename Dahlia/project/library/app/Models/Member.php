<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $label = ['id_member','name','username','password','gender','phone_number','address','email'];

    public function transaction()
    {
        return $this->hasOne('App\Models\transaction','member_id');
    }
}
