<?php

/**
 * Accept 决定了响应返回的格式，设置为 application/json, 遇到的所有报错 Laravel 会默认处理为 JSON 格式
 */

namespace App\Http\Middleware;

use Closure;

class AcceptHeader
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept','application/json');
        return $next($request);
    }
}
