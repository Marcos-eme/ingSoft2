<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\ElasticSearchHandler;

class Admin {

    public function handle($request, Closure $next)
    {

        if ( Auth::check() && Auth::user()->rol->id == 1 )
        {
            return $next($request);
        }
        /**  else
          if(Auth::check() && Auth::user()->rol->id != 1){
                return redirect('/home')
            } **/

        return redirect('/');

    }

}