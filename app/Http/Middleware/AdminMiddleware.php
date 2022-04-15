<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   // checks if user has been authenticated
        if (Auth::check()) {
            // role 0 is user and role 1 is lecturer and role 2 is admin
            if (Auth::user()->role_as == '2') {
                return $next($request);
            }elseif (Auth::user()->role_as == '1') {
                return redirect('lecturers/dashboard')->with('status', 'Access denied as you are not an admin');
            }else{
                 return redirect('students/dashboard')->with('status', 'Access denied as you are not an admin');
            }
        }else{
            return redirect('/login')->with('status', 'Please login first');
        }
        
    }
}
