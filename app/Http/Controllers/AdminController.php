<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function showAdmin() {
        return view('admin.dashboard');
    }

    public function newRegister() {
        return view('admin.register');
    }

    public function searchUser(Request $request) {
        $name = $request->search;
        $name = str_replace(' ', '%', $name);
        $name = ucfirst($name);

        $users = User::where('name', 'like', "%$request->search%")->get();

        return view('admin.userList', compact('users'));
    }

    public function showRegister() {
        return view('admin.select-user');
    }

}
