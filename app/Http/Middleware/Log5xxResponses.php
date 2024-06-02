<?php

namespace App\Http\Middleware;

use App\Models\ErrorLog;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class Log5xxResponses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Verifica daca raspunsul este de tip 500 (Server Error)
        if ($response->isServerError()) {
            // Logheaza eroarea in BD
            $this->logError($request->fullUrl(), $response->status());
        }

        return $response;
    }

    protected function logError($url, $statusCode): void
    {
        ErrorLog::query()->insert([
            'url' => $url,
            'status_code' => $statusCode,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
