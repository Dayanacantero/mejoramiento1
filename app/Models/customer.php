<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'adress',
        'telephone',
        'num_social',
    ];

    public function projects(){
        return $this->belongsTo('App\Models\Project');
    }
}
