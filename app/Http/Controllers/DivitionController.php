<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divitions;

class DivitionController extends Controller {

    public function index() {
        $divitions = Divitions::all();
        return view('admin.divitions', compact('divitions'));
    }

    public function create() {
        return view('admin.formDivitions');
    }

    public function store(Request $request) {

        $request->validate([
            'description' => 'required',
        ]);

        $divition = new Divitions();
        $divition->description = $request->description;
        $divition->save();

        return redirect('/divitions');
    }

    public function showEditForm($id) {
        $divition = Divitions::find($id);
        return view('admin.formEditDivitions', compact('divition'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'description' => 'required',
        ]);

        $divition = Divitions::find($id);
        $divition->description = $request->description;
        $divition->save();

        return redirect('/divitions');
    }

    public function delete($id) {
        $divition = Divitions::find($id);
        $divition->delete();
        return redirect('/divitions');
    }

}
