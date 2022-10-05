<?php

namespace App\Models;
use App\Models\Peminjaman;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPerpus extends Model
{
    use HasFactory;
    protected $table = 'user';
    public function relasiUser(){
        return $this->hasMany('App\Models\Peminjaman','fk_id_user');
    }
}
