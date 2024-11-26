<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DivitionController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\CourseController;


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

Route::get('/courses',                      [CourseController::class,           'index'])->middleware('admin');
Route::get('/admin-course',                 [CourseController::class,           'create'])->middleware('admin');
Route::get('/edit-course/{id}',             [CourseController::class,           'showEditForm'])->middleware('admin');

#PUT
Route::put('/divition/{id}',                [DivitionController::class,         'update'])->middleware('admin');
Route::put('/level/{id}',                   [LevelController::class,            'update'])->middleware('admin');
Route::put('/course/{id}',                  [CourseController::class,           'update'])->middleware('admin');

#DELETE
Route::delete('/divition/{id}',             [DivitionController::class,         'delete'])->middleware('admin');
Route::delete('/level/{id}',                [LevelController::class,            'delete'])->middleware('admin');
Route::delete('/course/{id}',               [CourseController::class,           'delete'])->middleware('admin');

#POST
Route::post('/divitions',                   [DivitionController::class,         'store'])->middleware('admin');
Route::post('/levels',                      [LevelController::class,            'store'])->middleware('admin');
Route::post('/courses',                     [CourseController::class,           'store'])->middleware('admin');

require __DIR__.'/auth.php';
