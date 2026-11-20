<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->get('admin_logged_in')) {
            return redirect('/login')->with('error', 'Silakan login admin terlebih dahulu.');
        }

        return $next($request);
    }
}