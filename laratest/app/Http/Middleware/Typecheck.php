<?php

namespace App\Http\Middleware;

use Closure;

class Typecheck
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
        if($request->session()->get('uname') == 'admin'){
             return $next($request);
        }else{
            return redirect('/home');
        }
       
    }
}
