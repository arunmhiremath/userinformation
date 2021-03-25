<?php

namespace App\Http\Middleware;

use Closure;

class Premium
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
        if(auth()->user()->is_premium == 0)
        {
            return redirect('/payment')->with('error', 'Please subscribe service');
        }
        elseif(auth()->user()->is_premium == 1)
        {
                return $next($request);
        }
        else
        {
            return redirect('/payment')->with('error', 'Somthing is wrong');
        }
    }
}
