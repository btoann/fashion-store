<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartCheck
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
        if (Cart::count() < 1) {
            if ($request->url() == route('checkOut')) {
                return redirect(route('cart'));
            }
        }

        return $next($request);
    }
}
