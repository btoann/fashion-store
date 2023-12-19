<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session()->has('loginId'))
        {
            $role = User::where('id', '=', Session()->get('loginId'))->first()->role;
            if ($role >= 2) {
                return redirect(route('index'))->with('access_fail', 'You don\'t have permission.');
            }
        }
        else {
            return redirect(route('signin'))->with('access_fail', 'You have to login as administrator first.');
        }

        return $next($request);
    }
}
