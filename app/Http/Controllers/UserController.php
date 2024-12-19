<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;

class UserController extends Controller {

    public function showCourses(){

        $id = auth()->user()->id;
        $courses = Registration::join('courses', 'registrations.course_id', '=', 'courses.id')
                    ->join('levels', 'courses.level_id', '=', 'levels.id')
                    ->join('divitions', 'courses.divition_id', '=', 'divitions.id')
                    ->where('registrations.user_id', '=', $id)
                    ->select('registrations.*', 'levels.type as level', 'divitions.description as divition', 'courses.name as course')
                    ->get();

        return view('user.personalCourses', compact('courses'));
    }


}
