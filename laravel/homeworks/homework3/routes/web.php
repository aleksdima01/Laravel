<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test_database', function () {
    $employee = new Employee();
    $employee->id = 1;
    $employee->age = 36;
    $employee->first_name = "Александр";
    $employee->last_name = "Ефимов";
    $employee->save();
});
