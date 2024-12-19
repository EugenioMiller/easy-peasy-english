<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Registration;

use Illuminate\Http\Request;

class RegistrationController extends Controller {

    public function create($id) {
        $user = User::find($id);
        $courses = Course::all();

        return view('admin.formRegister', compact('user', 'courses'));
    }

    public function store(Request $request) {

        $request->validate([
            'name'      => ['required', 'string', 'max:30'],
            'surname'   => ['required', 'string', 'max:50'],
            'birthday'  => ['required', 'date'],
        ]);

        $register = new Registration();
        $register->student_name = $request->name;
        $register->student_surname = $request->surname;
        $register->student_birthday = $request->birthday;
        $register->user_id = $request->user_id;
        $register->course_id = $request->course_id;

        $register->save();

        return redirect('/admin');
    }

    public function showRegisters($id) {

        $registers = Registration::join('courses', 'registrations.course_id', '=', 'courses.id')
                                ->where('course_id', $id)
                                ->select('courses.*', 'registrations.*')
                                ->get();

        $count = Registration::where('course_id', $id)->count();

        return view('admin.registers', compact('registers', 'count'));
    }
}
