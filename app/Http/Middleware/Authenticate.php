<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{

    /**
     * 追加。
     * user.　とかはapp/Providers/RouteServiceProvider.phpで
     * asで設定。
     *
     * @var string
     */
    protected $user_route = 'user.login';
    protected $owner_route = 'owner.login';
    protected $admin_route = 'admin.login';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     * もしも認証されていない場合のリダイレクト設定。
     *
     * @param \Illuminate\Http\Request $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        /**
         * 既存だと、jsonでなければすべてログイン画面にリダイレクトさせるようにしている。
         */
//        if (! $request->expectsJson()) {
//            return route('login');
//        }

        /**
         * カスタム。
         */
        if (!$request->expectsJson()) {
            if (Route::is('owner.*')) {     //Route::isでURLの文字列パターンを検査できる。
                return route($this->owner_route);
            } elseif (Route::is('admin.*')) {
                return route($this->admin_route);
            } else {
                return route($this->user_route);
            }
        }
    }
}
