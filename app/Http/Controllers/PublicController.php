<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class PublicController extends Controller {

    public function index() {
        $courses = Course::all();
        return view('public.welcome', compact('courses'));
    }


}
