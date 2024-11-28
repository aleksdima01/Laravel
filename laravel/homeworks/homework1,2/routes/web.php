<?php

use App\Http\Controllers\FormProcessorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/userform', [FormProcessorController::class, 'index']);
Route::post('/userform', [FormProcessorController::class, 'store']);
