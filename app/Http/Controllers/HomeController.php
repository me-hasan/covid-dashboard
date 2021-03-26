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

        $number_blocks = [
            [
                'title' => 'Users Logged In Today',
                'number' => User::whereDate('last_login_at', today())->count()
            ],
            [
                'title' => 'Users Logged In Last 7 Days',
                'number' => User::whereDate('last_login_at', '>', today()->subDays(7))->count()
            ],
            [
                'title' => 'Users Logged In Last 30 Days',
                'number' => User::whereDate('last_login_at', '>', today()->subDays(30))->count()
            ],
        ];

        $list_blocks = [
            [
                'title' => 'Last Logged In Users',
                'entries' => User::orderBy('last_login_at', 'desc')
                    ->take(5)
                    ->get(),
            ],
            [
                'title' => 'Users Not Logged In For 30 Days',
                'entries' => User::where('last_login_at', '<', today()->subDays(30))
                    ->orwhere('last_login_at', null)
                    ->orderBy('last_login_at', 'desc')
                    ->take(5)
                    ->get()
            ],
        ];


        $users = User::where('account_level','!=',null)->where('user_type','!=','superadmin')->get();

        $administrative_user = $users->where('account_level','administrative')->count();
        $divisional_user = $users->where('account_level','divisional')->count();
        $district_user = $users->where('account_level','district')->count();
        $upazilla_user = $users->where('account_level','upazilla')->count();

        return view('superadmin.dashboard',compact('administrative_user','divisional_user','district_user','upazilla_user', 'number_blocks', 'list_blocks'));
    }
}
