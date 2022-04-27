<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    public function user()
    {
        return $this->hasOne('App\User', 'member_id');
    }
}
