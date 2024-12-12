<?php

namespace App\Http\Controllers;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        Gate::authorize('view-any', User::class);
        return response()->json([User::all()]);
    }

    public function create($count)
    {
        return User::factory($count)->create();
    }
}
