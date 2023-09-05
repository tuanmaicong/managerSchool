<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    //khi chưa đăng nhập sẽ gọi đến hàm redirectTo và trả về route('auth.login')
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('auth.login');
    }
}
