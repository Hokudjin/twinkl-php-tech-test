<?php

namespace App\Http\Middleware;

use Closure;

class SignUpValidatorMiddleware extends BaseValidatorMiddleware
{
    public function handle($request, Closure $next)
    {
        parent::handle($request, $next);

        // Additional validation rules can be implemented here
        // For example, check for special characters in request data

        return $next($request);
    }
}
