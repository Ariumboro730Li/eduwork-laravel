<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public function user()
    {
        return $this->hasOne('App\Models\User', 'member_id');
    }
}
