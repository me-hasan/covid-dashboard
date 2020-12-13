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
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::SUPERADMIN_DASHBOARD);
        }

        if (Auth::guard($guard)->check()) {
            $userType = auth()->user()->user_type;

            // Check user role
            switch ($userType) {
                case 'cabinet':
                    $redirectTo = RouteServiceProvider::CABINET_DASHBOARD;
                    break;
                case 'epidemiologist':
                    $redirectTo = RouteServiceProvider::IEDCR_DASHBOARD;
                    break;
                case 'hpm':
                    $redirectTo = RouteServiceProvider::XPM_DASHBOARD;
                    break;
                default:
                    $redirectTo = RouteServiceProvider::IEDCR_DASHBOARD;
                    break;
            }
            return redirect($redirectTo);
            //return redirect()->intended($redirectTo);
        }

        return $next($request);
    }
}
