<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DivitionController;
use App\Http\Controllers\LevelController;


#           endpoints                       controllers                         methods
#Public
Route::get('/',                             [PublicController::class,           'index']);
Route::get('/about-us',                     [PublicController::class,           'about']);

#Admin
#GET
Route::get('/admin',                        [AdminController::class,            'showAdmin'])->middleware('admin');

Route::get('/divitions',                    [DivitionController::class,         'index'])->middleware('admin');
Route::get('/admin-divitions',              [DivitionController::class,         'create'])->middleware('admin');
Route::get('/edit-divition/{id}',           [DivitionController::class,         'showEditForm'])->middleware('admin');

Route::get('/levels',                       [LevelController::class,            'index'])->middleware('admin');
Route::get('/admin-level',                  [LevelController::class,            'create'])->middleware('admin');
Route::get('/edit-level/{id}',              [LevelController::class,            'showEditForm'])->middleware('admin');

#PUT
Route::put('/edit-divition/{id}',           [DivitionController::class,         'update'])->middleware('admin');
Route::put('/edit-level/{id}',              [LevelController::class,            'update'])->middleware('admin');

#DELETE
Route::delete('/eliminate-divition/{id}',   [DivitionController::class,         'delete'])->middleware('admin');
Route::delete('/eliminate-level/{id}',      [LevelController::class,            'delete'])->middleware('admin');

#POST
Route::post('/divitions',                   [DivitionController::class,         'store'])->middleware('admin');
Route::post('/levels',                      [LevelController::class,            'store'])->middleware('admin');

require __DIR__.'/auth.php';
