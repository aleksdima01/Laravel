<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users', ['users' => $users]);
    }
    public function get()
    {
        return view("users");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'last_name' => ['required', 'max:50', 'alpha_dash'],
            'email' => ['required', 'email:rfc,dns']
        ]);
        $user = new Users($request->all());
        $user->save();
        return redirect('/add-user')->with('status', 'User is sucessfully validated and saved!');
        //return response()->json('Book is sucessfully validated and saved');
    }
    public function form()
    {
        return view("add-user");
    }
    public function getUserById($id)
    {
        if (Users::where('id', $id)->exists()) {
            $user =  [Users::where('id', $id)->first()];
            return view('users', ['users' => $user]);
        } else {
            return 'В БД нет пользователя c таким ID!';
        }
    }
}
