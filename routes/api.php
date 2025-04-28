<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsersController::class,"index"]);
Route::post('/store',[UsersController::class,"store"]);
Route::get('/delete/{id}', [UsersController::class,"destroy"]);
Route::post('/update', [UsersController::class,"update"]);