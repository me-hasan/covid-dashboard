<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
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
    public function index(Request $request) {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);

        $users = User::get();
        // dd($users);
        // $roles = Role::pluck('name', 'name');
        return view("superadmin.user.index", compact('users'));
    }

    public function createForm() {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);

        return view("superadmin.user.create");
    }

    public function store(Request $request) {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);

        // dd($request->all());

        $this->validate($request, [
            'name' => 'required|string|min:3',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:8'
        ]);

        try {
            DB::begintransaction();

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->user_type = $request->user_type;
            $user->password = Hash::make($request->password);
            $user->save();

            // $user->assignRole($request->role);
            DB::commit();

            // return redirect()->back()->with("success", "User Create Successfully");
            return redirect()->route('all-user')->with("success", "User Create Successfully");
        } catch (\Exception $ex) {
            DB::rollback();
            Log::error('[Class => ' . __CLASS__ . ", function => " . __FUNCTION__ . " ]" . " @ " . $ex->getFile() . " " . $ex->getLine() . " " . $ex->getMessage());
            return redirect()->back()->withErrors('Something went wrong. Please try again')->withInput();
        }
    }

    public function editForm(User $user) {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);

        // dd($user);
        return view("superadmin.user.edit", compact('user'));
    }

    public function update($id, Request $request) {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);

        $this->validate($request, [
            'name' => 'required|string|min:3',
            'email' => 'required'
        ]);

        try {
            DB::begintransaction();
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->user_type = $request->user_type;
            $user->save();

            // $user->syncRoles([$request->role]);
            DB::commit();

            return redirect()->route('all-user')->with("success", "User Successfully Updated");
        } catch (\Exception $ex) {
            DB::rollback();
            Log::error('[Class => ' . __CLASS__ . ", function => " . __FUNCTION__ . " ]" . " @ " . $ex->getFile() . " " . $ex->getLine() . " " . $ex->getMessage());
            return redirect()->back()->withErrors('Something went wrong. Please try again')->withInput();
        }
    }

    public function destroy($id) {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);

        try {

            User::where('id', $id)->delete();

            return redirect()->back()->with("success", "User Successfully Deleted");
        } catch (\Exception $ex) {
            Log::error('[Class => ' . __CLASS__ . ", function => " . __FUNCTION__ . " ]" . " @ " . $ex->getFile() . " " . $ex->getLine() . " " . $ex->getMessage());
            return redirect()->back()->withErrors('Something went wrong. Please try again')->withInput();
        }
    }
}
