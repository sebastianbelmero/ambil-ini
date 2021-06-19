<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user()->role == $role) {
            return $next($request);
        }else{
            if ($request->user()->role == 'admin') {
                return redirect()->route('admin');
            }else{
                return redirect()->route('user');
            }
        }
    }
}
