<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLoggedInClients
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
        // Kiểm tra nếu user chưa đăng nhập và không phải là admin
        if (!$request->session()->has('username') && !$request->session()->has('admin')) {
            toastr()->error('Vui lòng đăng nhập để tiếp tục.', "Thông báo");
            return redirect()->route('login');
        }

        return $next($request);
    }
}
