<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Contracts\Auth\Guard;


class ForbidBannedUserCustom
{


    /**
     * The Guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;


    /**
     * @param \Illuminate\Contracts\Auth\Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //https://itsolutionstuff.com/post/how-to-create-ban-revoke-user-functionality-in-laravel-5-example-example.html
        //https://github.com/cybercog/laravel-ban
        $user = $this->auth->user();


        if ($user && $user->isBanned()) {
            \Session::flush();
            return redirect('login')->withInput()->withErrors([
                'email' => 'تم حظر الحساب.',
            ]);
        }elseif ($user && $user->active == 0) {
            \Session::flush();
            return redirect('login')->withInput()->withErrors([
                'email' => 'سيتم تنشيط حسابك خلال 24 ساعة.',
            ]);
        }elseif($user && $user->verified == 0) {
            \Session::flush();
            return redirect('login')->withInput()->withErrors([
                'email' => 'لم يتم التحقق من البريد الالكتروني ، الرجاء مراجعة بريدك الالكتروني.',
            ]);
        }



        return $next($request);
    }
}