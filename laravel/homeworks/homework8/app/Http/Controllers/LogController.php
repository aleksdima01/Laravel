<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use PDOException;

class LogController extends Controller
{
    public function showLogs()
    {
        try {
            $data = Log::all();
        } catch (PDOException $e) {
            $data = ["error" => $e->getMessage()];
        }
        return view('logs', ['data' => $data]);
    }
}
