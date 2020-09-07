<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if(Auth()->user()->is_admin == 1){
            //return response()->json('working', 200);
            //return redirect('/admin');
            //return redirect()->route('admin.index');
            //return true;
           return $next($request);
          }
           
          return redirect('/home');
    }
}
