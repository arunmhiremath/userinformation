<?php

namespace App\Http\Middleware;

use Closure;

class ProfileComplete
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
        if (
            empty(auth()->user()->comp_name)
            ||  empty(auth()->user()->firstname)
            ||  empty(auth()->user()->lastname)
            ||  empty(auth()->user()->tel_number)
            ||  empty(auth()->user()->add_str)
            ||  empty(auth()->user()->add_hno)
            ||  empty(auth()->user()->add_pin)
            ||  empty(auth()->user()->add_city)
        
        )
        {
            return redirect('/profile')->with('error', 'Bitte füllen Sie die Informationen aus');
        }
        else
        {
                return $next($request);
        }
        
    }
}
