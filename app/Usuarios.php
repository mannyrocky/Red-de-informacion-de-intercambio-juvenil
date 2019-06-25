<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = "usuarios";

    public function scopeSearch($query, $nombres)
    {
        return $query->where('nombres','LIKE',"%$nombres%");
    }
}
