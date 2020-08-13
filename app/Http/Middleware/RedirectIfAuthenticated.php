<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $userType = auth()->user()->user_type;
        
            // Check user role
            switch ($userType) {
                case 'superadmin':
                    $redirectTo = RouteServiceProvider::SUPERADMIN_DASHBOARD; 
                    break;
                case 'cabinet':
                    $redirectTo = RouteServiceProvider::CABINET_DASHBOARD;
                    break; 
                case 'epidemiologist':
                    $redirectTo = RouteServiceProvider::IEDCR_DASHBOARD;
                    break; 
                default:
                    $redirectTo = RouteServiceProvider::IEDCR_DASHBOARD;
                    break;
            }
            return redirect($redirectTo);
        }

        return $next($request);
    }
}
