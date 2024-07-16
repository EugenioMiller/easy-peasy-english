<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //Relation one to many with courses
    public function registers(){
        return $this->belongsTo('App\Models\Registration');
    }
}
