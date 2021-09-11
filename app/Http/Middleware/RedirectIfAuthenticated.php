<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * カスタム。
     * 'users'などはguardsで設定したproviderの文字列と完全一致。
     */
    private const GUARD_USER = 'users';
    private const GUARD_OWNER = 'owners';
    private const GUARD_ADMIN = 'admin';

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
//        $guards = empty($guards) ? [null] : $guards;

//        foreach ($guards as $guard) {
//            if (Auth::guard($guard)->check()) {   //guard()はguardで設定した認証対象。check()は認証状態をチェック。
//                return redirect(RouteServiceProvider::HOME);
//            }
//        }

        /**
         * カスタム。
         * やりたいこと：
         * userでログインしていたら、HOMEで設定したURLにリダイレクトさせたい。
         * owner, adminも同じ。
         */
        if (Auth::guard(self::GUARD_USER)->check() && $request->routeIs('user.*')) {
            return redirect(RouteServiceProvider::HOME);
        }

        if (Auth::guard(self::GUARD_OWNER)->check() && $request->routeIs('owner.*')) {
            return redirect(RouteServiceProvider::OWNER_HOME);
        }

        if (Auth::guard(self::GUARD_ADMIN)->check() && $request->routeIs('admin.*')) {
            return redirect(RouteServiceProvider::ADMIN_HOME);
        }

        return $next($request);
    }
}
