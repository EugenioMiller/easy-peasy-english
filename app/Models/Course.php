<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //Relation one to many with levels
    public function levels(){
        return $this->belongsTo(Levels::class);
    }

    //Relation one to many with divition
    public function divitions(){
        return $this->belongsTo(Divitions::class);
    }

    public function registrations(){
        return $this->hasMany(Registration::class, 'fk_course', 'id');
    }
}
