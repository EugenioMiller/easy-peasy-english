<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;


#           endpoint            controllers                     method
Route::get('/',                 [PublicController::class,       'index']);
Route::get('/about-us',         [PublicController::class,       'about']);
Route::get('/login',            [PublicController::class,       'showLogin']);


Route::get('/check-login',      [UserController::class,         'checkLogin']);



/**
 *   Route::get('/{id}', function ($id) {

 *}
 *   });
 */
