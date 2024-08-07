<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collaborator extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'

    ];
    
    public function projects(){
        return $this->belongsToMany('App\Models\project');
    }

    public function pays(){
        return $this->hasMany('App\Models\pay');
    }
}
