<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('account_level','!=',null)->where('user_type','!=','superadmin')->get();

        $administrative_user = $users->where('account_level','administrative')->count();
        $divisional_user = $users->where('account_level','divisional')->count();
        $district_user = $users->where('account_level','district')->count();
        $upazilla_user = $users->where('account_level','upazilla')->count();

        return view('superadmin.dashboard',compact('administrative_user','divisional_user','district_user','upazilla_user'));
    }
}
