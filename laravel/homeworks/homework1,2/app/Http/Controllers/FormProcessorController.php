<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessorController extends Controller
{

    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $userData = ["User_name" => $request->username, "User_last_name" => $request->last_name, "User_email" => $request->email];
        return view("hello", $userData);
    }
}
