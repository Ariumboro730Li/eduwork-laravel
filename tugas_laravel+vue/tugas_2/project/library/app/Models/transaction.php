<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
       public function members(){
        return $this->hasMany('App\Models\member', 'member_id');
    }
}
