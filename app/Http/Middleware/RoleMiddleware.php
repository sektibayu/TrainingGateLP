<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
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
        if(!auth::user()->isAdmin()){
            if($request->ajax()){
                return response("maaf anda bukan admin",401);
            }else{
                return redirect('/courseuser');
            }
        }
        return $next($request);
    }
}
