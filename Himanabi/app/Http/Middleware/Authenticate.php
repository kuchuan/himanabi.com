<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        return route('login');
    }





    // public function logout(Request $request) //Dean追加
    // {
    //     $this->performLogout($request);
    //     return redirect()->route('himanabi.index'); // ここを好きな遷移先に変更する。
    // }

}
