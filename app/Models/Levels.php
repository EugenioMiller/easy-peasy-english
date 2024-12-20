<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    use HasFactory;

    public function courses(){
        return $this->hasOne(Course::class, 'level_id', 'id');
    }
}
