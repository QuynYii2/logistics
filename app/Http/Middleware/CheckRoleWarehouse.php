<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoleWarehouse
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(\Illuminate\Http\Request $request, Closure $next)
    {
//        dd(1);
        $user = Auth::user();
        if ($user->id_role != 1) {
            return redirect('/Dashboard');
        }
        return $next($request);
    }
}
