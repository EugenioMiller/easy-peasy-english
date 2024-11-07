<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index']);



/**
 *   Route::get('/{id}', function ($id) {

 *}
 *   });
 */
