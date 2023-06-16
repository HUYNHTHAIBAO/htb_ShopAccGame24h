<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Account
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
        // check nếu chưa đăng nhập thì sẽ trả về trang login trước
        if (!Auth()->guard('backend')->check()) {
            return redirect()->route('backend.account.login');
        }
        return $next($request);
    }
}
