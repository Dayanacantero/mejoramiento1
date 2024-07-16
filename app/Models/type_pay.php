<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_pay extends Model
{
    use HasFactory;

    public function pays(){
        return $this->belongsTo('App\Models\pay');
    }
}
