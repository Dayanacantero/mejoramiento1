<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pay extends Model
{
    use HasFactory;

    public function collaborators(){
        return $this->hasMany('App\Models\collaborator');
    }

    public function type_pays(){
        return $this->belongsTo('App\Models\type_pay');
    }
}
