<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Barryvdh\DomPDF\Facade\PDF;

class PdfGeneratorController extends Controller
{
    public function index($id)
    {
        if (Users::where('id', $id)->exists()) {
            $user =  [Users::where('id', $id)->first()];
            $pdf = PDF::loadView('resume', ['users' => $user]);
            return $pdf->stream('user.pdf');
        } else {
            return 'В БД нет пользователя c таким ID!';
        }
    }
}
