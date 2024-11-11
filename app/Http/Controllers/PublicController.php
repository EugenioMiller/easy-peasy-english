<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Levels;
use App\Models\Divitions;

class PublicController extends Controller {

    public function index() {

        $courses = Course::join('levels', 'courses.level_id', '=', 'levels.id')
                    ->join('divitions', 'courses.divition_id', '=', 'divitions.id')
                    ->select('courses.*', 'levels.type as level_type', 'divitions.description as divition_description')
                    ->get();

        return view('public.welcome', compact('courses'));
    }


}
