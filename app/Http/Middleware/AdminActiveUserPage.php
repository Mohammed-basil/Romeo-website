<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Session;
use Closure;

class AdminActiveUserPage
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
        // Laravel eloquent - where field is equal to one of 2 values
        // https://stackoverflow.com/questions/44920977/laravel-eloquent-where-field-is-equal-to-one-of-2-values
        
        if (count(Auth::user()->pages->where('id',5)) == 0 ) {
            Session::flash('info','الصفحة غير متوفرة');
           
            return redirect()->back();
        }
        return $next($request);
    }
}
