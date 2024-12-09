<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Log;

class DataLogger
{
    // private $start_time;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $this->start_time = microtime(true);
        return $next($request);
    }
    public function terminate(Request $request, Response $response)
    {
        if (env('API_DATALOGGER', true)) {
            $endTime = microtime(true);
            $log = new Log();
            $log->time = date('Y-m-d H:i:s');
            $log->duration = number_format($endTime - LARAVEL_START, 3);
            $log->ip = $request->ip();
            $log->url = $request->fullUrl();
            $log->method = $request->method();
            $log->input = $request->getContent();
            $log->save();
        }
    }
}
