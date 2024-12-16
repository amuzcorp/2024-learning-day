<?php

namespace App\Http\Middleware;

use App\Services\Learn;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocalMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        Learn::setMessage(sprintf("%s + %s (%s)",
            Learn::getMessage(),
            "This is Local Middleware",
            $request->route()->getName()
        ));
        return $next($request);
    }
}
