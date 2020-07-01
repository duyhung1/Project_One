<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class UserLoginMiddleware
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
        if(Auth::check()) {
            // return $next($request);
            $user = Auth::user();
            if($user ->rule ==1 || $user ->rule ==0 ) {
                return $next($request);
            }else {
                return redirect()->route('login')->with('notification','Tài khoản không đúng');
            }
           
        } else {
            return redirect()->route('login');
        }
    }
}
