<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Levels;

class LevelController extends Controller {

    public function index() {

        $levels = Levels::all();
        return view('admin.levels', compact('levels'));
    }

    public function create() {
        return view('admin.formLevels');
    }

    public function store(Request $request) {

       $level = new Levels();
       $level->type = $request->type;
       $level->save();

       return redirect('/levels');
    }

    public function showEditForm($id) {

        $level = Levels::find($id);
        return view('admin.formEditLevels', compact('level'));
    }

    public function update(Request $request, $id) {

        $level = Levels::find($id);
        $level->type = $request->type;
        $level->save();

        return redirect('/levels');
    }

    public function delete($id) {

        $level = Levels::find($id);
        $level->delete();

        return redirect('/levels');
    }
}
