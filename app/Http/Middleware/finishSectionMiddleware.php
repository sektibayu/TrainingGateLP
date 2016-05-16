<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class finishSectionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($sid, $request, Closure $next)
    {
        $ada=0;
        foreach (auth::user()->section as $sect){
            if($sect->id == $sid){
                $ada=1;
            }
        }
        if($ada == 0){
            if($request->ajax()){
                return response("maaf belum cukup level",401);
            }else{
                return redirect('/courseuser');
            }
        }
        return $next($request);
    }
}
