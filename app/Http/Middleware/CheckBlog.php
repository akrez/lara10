<?php

namespace App\Http\Middleware;

use Closure;

class CheckBlog
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
        if ($request->blog) {
            return $next($request);
        }
        return redirect('/');
    }
}
