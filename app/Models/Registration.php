<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model {
    use HasFactory;

    //Relation one to many with user
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relation one to many with levels
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
