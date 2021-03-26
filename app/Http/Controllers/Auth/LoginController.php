<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::DASHBOARD;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }

    public function redirectTo()
    {
        if (auth()->guard('admin')->check()) {
            return RouteServiceProvider::SUPERADMIN_DASHBOARD;
        } else {
            // User role
            $userType = auth()->user()->user_type;

            // Check user role
            switch ($userType) {
                case 'cabinet':
                    return RouteServiceProvider::CABINET_DASHBOARD;
                    break;
                case 'epidemiologist':
                    return RouteServiceProvider::IEDCR_DASHBOARD;
                    break;
                case 'hpm':
                    return RouteServiceProvider::XPM_DASHBOARD;
                    break;
                default:
                    return RouteServiceProvider::IEDCR_DASHBOARD;
                    break;
            }
        }


    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login2');
    }

    public function showAdminLoginForm()
    {
        return view('auth.admin_login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended(RouteServiceProvider::SUPERADMIN_DASHBOARD);
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    function authenticated(Request $request, $user)
    {
        $user->update([
            'last_login_at' => now(),
        ]);
    }
}
