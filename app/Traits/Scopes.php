<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait Scopes
{
    public  function scopeLike($query, $field, $value){
        $value = strtolower($value);
        return $query->where(DB::raw("lower($field)"), 'LIKE', "%$value%");
    }
}