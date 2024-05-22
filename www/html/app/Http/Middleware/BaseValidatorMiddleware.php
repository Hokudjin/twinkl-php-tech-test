<?php
namespace App\Http\Middleware;

use Closure;

class BaseValidatorMiddleware
{
    public function handle($request, Closure $next)
    {
        // IP address validation
        $blockedIPs = ['127.0.0.1'];
        if (in_array($request->ip(), $blockedIPs)) {
            return response()->json(['error' => 'Blocked IP address'], 403);
        }

        return $next($request);
    }
}
