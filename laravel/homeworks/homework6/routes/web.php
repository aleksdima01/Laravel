<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [BookController::class, "index"]);
Route::post('/index', [BookController::class, "store"]);
