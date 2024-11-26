<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckPlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $plan): Response
    {

        if (!Auth::check() || Auth::user()->plan_id != $plan) {
            return redirect('/home')->with('error', 'No tienes acceso a esta funcionalidad.');
        }

        return $next($request);
    }
}
