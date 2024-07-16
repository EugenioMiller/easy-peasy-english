<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    //Relation one to one with user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Relation one to many with courses
    public function registers(){
        return $this->hasMany('App\Models\Course');
    }
}
