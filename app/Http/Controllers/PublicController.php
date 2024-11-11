<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Levels;
use App\Models\Divitions;

class PublicController extends Controller {

    /**
     * Shows the welcome view with all courses available.
     *
     * The courses are obtained from the database using a join with the levels and divitions tables.
     * The view receives a compact variable named courses that contains the courses with their respective
     * level and divition description.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index() {

        $courses = Course::join('levels', 'courses.level_id', '=', 'levels.id')
                    ->join('divitions', 'courses.divition_id', '=', 'divitions.id')
                    ->select('courses.*', 'levels.type as level_type', 'divitions.description as divition_description')
                    ->get();

        return view('public.welcome', compact('courses'));
    }

    public function about(){
        return view('public.about');
    }

    public function showLogin(){
        return view('public.login');
    }

}
