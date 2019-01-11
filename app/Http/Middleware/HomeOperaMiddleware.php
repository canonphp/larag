<?php

namespace App\Http\Middleware;

use Closure;

class HomeOperaMiddleware
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
        if (!\Auth::check()){
            return response()->json(['status'=>-1,'msg'=>'请登录再操作！']);
        }
        return $next($request);
    }
}
