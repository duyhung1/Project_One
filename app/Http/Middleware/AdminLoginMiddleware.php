<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddleware
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
            $user = Auth::user();
            if($user ->rule ==1) {
                return $next($request);
            }else {
                return redirect()->route('admin.login')->with('notification','Tài khoản không đúng');
            }
           
        } else {
            return redirect()->route('admin.login');
        }
        
    }
}
