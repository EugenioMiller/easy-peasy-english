<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divitions extends Model
{
    use HasFactory;

    public function courses(){
        return $this->hasOne(Course::class, 'divition_id', 'id');
    }
}
