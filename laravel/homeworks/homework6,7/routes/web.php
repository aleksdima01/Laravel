<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    redirect('/index');
});
Route::get('/index', [BookController::class, "index"]);
Route::post('/index', [BookController::class, "store"]);
Route::get('/users', [UsersController::class, "index"]);
Route::get('/user/{id}', [UsersController::class, "getUserById"]);
Route::get('/add-user', [UsersController::class, "form"]);
Route::post('/add-user', [UsersController::class, "store"]);
Route::get('/resume/{id}', [PdfGeneratorController::class, "index"]);
