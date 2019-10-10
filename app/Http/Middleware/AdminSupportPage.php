<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Session;
use Closure;

class AdminSupportPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (count(Auth::user()->pages->where('id',14)) == 0 ) {
            Session::flash('info','الصفحة غير متوفرة');
           
            return redirect()->back();
        }
        return $next($request);
    }
}
