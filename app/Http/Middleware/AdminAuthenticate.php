<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{

    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->guard('admin')->check()) {
            return $next($request);
        }

        return redirect('/admin/login');
    }
}
