<?php

namespace App\Http\Middleware;

use App\Services\Learn;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        Learn::setMessage('Through Global Middleware');
        return $next($request);
    }
}
