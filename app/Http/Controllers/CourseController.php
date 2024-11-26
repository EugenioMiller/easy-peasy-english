<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Levels;
use App\Models\Divitions;

class CourseController extends Controller {

    public function index() {
        $courses = Course::join('levels', 'courses.level_id', '=', 'levels.id')
                    ->join('divitions', 'courses.divition_id', '=', 'divitions.id')
                    ->select('courses.*', 'levels.type as level_type', 'divitions.description as divition_description')
                    ->get();
        return view('admin.courses', compact('courses'));
    }

    public function create() {
        $levels = Levels::all();
        $divitions = Divitions::all();
        return view('admin.formCreateCourses', compact('levels', 'divitions'));
    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'start' => 'required',
            'end' => 'required',
            'limit' => 'required',
            'price' => 'required',
            'level_id' => 'required',
            'divition_id' => 'required',

        ]);

        $course = new Course();
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->content = $request->input('content');
        $course->start = $request->input('start');
        $course->end = $request->input('end');
        $course->limit = $request->input('limit');
        $course->price = $request->input('price');
        $course->level_id = $request->input('level_id');
        $course->divition_id = $request->input('divition_id');


        $course->save();

        return redirect('/courses');
    }

    public function showEditForm($id) {

        $course = Course::find($id);
        $levelSelect = Levels::find($course->level_id);
        $divitionSelect = Divitions::find($course->divition_id);
        $levels = Levels::all();
        $divitions = Divitions::all();
        return view('admin.formEditCourses', compact('course', 'levelSelect', 'divitionSelect', 'levels', 'divitions'));
    }

    public function delete($id) {

        $course = Course::find($id);
        $course->delete();

        return redirect('/courses');
    }

    public function update(Request $request, $id) {

        $course = Course::find($id);
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->content = $request->input('content');
        $course->start = $request->input('start');
        $course->end = $request->input('end');
        $course->limit = $request->input('limit');
        $course->price = $request->input('price');
        $course->level_id = $request->input('level_id');
        $course->divition_id = $request->input('divition_id');

        $course->save();

        return redirect('/courses');
    }
}
