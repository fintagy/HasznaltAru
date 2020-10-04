<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasznalt_kapcsolat extends Model
{
    public function hasznalt_termek()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
