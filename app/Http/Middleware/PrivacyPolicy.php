<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class PrivacyPolicy
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
        
        

        
        if(auth()->user()->is_privacy_accepted == 0)
        {
            return redirect('/privacypolicy')->with('error', 'Please accept the Privacy Policy');
        }
        elseif(auth()->user()->is_privacy_accepted == 1)
        {
                return $next($request);
        }
        else
        {
            return redirect('/privacypolicy')->with('error', 'Somthing is wrong');
        }

    }
}
