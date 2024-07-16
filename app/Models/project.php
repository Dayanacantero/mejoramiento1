<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    public function collaborators(){
        return $this->belongsToMany('App\Models\collaborator');
    }

    public function customers(){
        return $this->hasMany('App\Models\Customer');
    }
}
