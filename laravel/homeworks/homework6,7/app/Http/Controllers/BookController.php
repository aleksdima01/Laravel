<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => ['required', 'unique:books,title', 'max:255'],
            'author' => ['required', 'max:100', 'alpha_dash'],
            'genre' => ['required']
        ]);
        $book = new Book($request->all());
        $book->save();
        return redirect('/index')->with('status', 'Book is sucessfully validated and saved!');
        //return response()->json('Book is sucessfully validated and saved');
    }
}
