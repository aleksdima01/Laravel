<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['users' => [['name' => 'Aleksandr', 'age' => 33, 'position' => 16, 'address' => 'Tula'], ['name' => 'Evgeniy', 'age' => 26, 'position' => 23, 'address' => 'SPB'], ['name' => 'Petr', 'age' => 17, 'position' => 16, 'address' => 'Tumen']]]);
});
Route::get('/contacts', function () {
    return view('contacts', ['contacts' => [['name' => 'Aleksandr', 'post_code' => 167283, 'email' => '', 'phone' => '+73648238476', 'address' => 'Tula'], ['name' => 'Evgeniy', 'post_code' => 167283, 'email' => 'evgeniy@gmail.com', 'phone' => '+78344578934', 'address' => 'SPB'], ['name' => 'Petr', 'post_code' => 167283, 'email' => 'petr@gmail.com', 'phone' => '+73757659064', 'address' => 'Tumen']]]);
});
Route::get('/employee', [EmployeeController::class, 'index']);
Route::post('/employee', [EmployeeController::class, 'store']);
Route::get('/employee/{id}', [EmployeeController::class, 'update']);
Route::get('/json', [EmployeeController::class, 'json']);
Route::post('/json', [EmployeeController::class, 'getJson']);
