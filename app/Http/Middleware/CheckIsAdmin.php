<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIsAdmin
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
        $admin = Auth::User();
        if($admin==null){
            return redirect()->route('login');
        }
        if(!$admin->isAdmin()) {
            return redirect()->route('welcome')->with('message', 'mnaceq kapi mej');
        }

        return $next($request);
    }
}
