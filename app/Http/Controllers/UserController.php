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
        //$this->middleware('auth:admin');
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
        return view("superadmin.user.index", compact('users'));
    }

    public function createForm() {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);
        $roles = Role::pluck('name', 'name');
        $divisions = DB::table('upazila')->distinct()->get('division');
        return view("superadmin.user.create",compact('roles','divisions'));
    }

    public function store(Request $request) {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);

        $this->validate($request, [
            'name' => 'required|string|min:3',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'role' => 'required|exists:roles,name'
        ]);

        try {
            DB::begintransaction();

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->user_type = $request->user_type;
            $user->account_level = $request->account_level ?? 'administrative';
            $user->division = $request->division;
            $user->district = $request->district;
            $user->upazilla = $request->upazilla;
            $user->password = Hash::make($request->password);
            $user->save();

            $user->assignRole($request->role);
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

        $roles = Role::pluck('name', 'name');
        $divisions = DB::table('upazila')->distinct()->get('division');
        if($user->district != null){
            $districts = DB::table('upazila')->where('division',$user->division)->distinct()->get('district');
        }else{
            $districts = [];
        }
        if($user->upazilla != null){
            $upazillas = DB::table('upazila')->where(['district' => $user->district])->distinct()->get('upazila_en');
        }else{
            $upazillas = [];
        }

        return view("superadmin.user.edit", compact('user','roles','divisions','districts','upazillas'));
    }

    public function update($id, Request $request) {
        // if (!auth()->user()->can('System User Management'))
        //     abort(403);

        $this->validate($request, [
            'name' => 'required|string|min:3',
            'email' => 'required',
            'role' => 'required|exists:roles,name'
        ]);

        try {
            DB::begintransaction();
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->user_type = $request->user_type;
            $user->account_level = $request->account_level ?? 'administrative';
            $user->division = $request->division;
            $user->district = $request->district;
            $user->upazilla = $request->upazilla;
            $user->save();

            $user->syncRoles([$request->role]);
            DB::commit();

            return redirect()->route('all-user')->with("success", "User Successfully Updated");
        } catch (\Exception $ex) {
            DB::rollback();
            Log::error('[Class => ' . __CLASS__ . ", function => " . __FUNCTION__ . " ]" . " @ " . $ex->getFile() . " " . $ex->getLine() . " " . $ex->getMessage());
            return redirect()->back()->withErrors('Something went wrong. Please try again')->withInput();
        }
    }

    public function getDistrictFromDivision(Request $request)
    {
        if(isset($request->division)) {
            $districts = DB::table('upazila')->where('division',$request->division)->distinct()->get('district');
            $response = array(
                'status' => 1,
                'data' => $districts,
                'message' => 'District data has successfully retrieved.',
            );
            return $response;
        }
    }

    public function getUpazillaFromDistrict(Request $request)
    {
        if(isset($request->district)) {
            $upazillas = DB::table('upazila')->where('district',$request->district)->distinct()->get('upazila_en');
            $response = array(
                'status' => 1,
                'data' => $upazillas,
                'message' => 'Upazilla data has successfully retrieved.',
            );
            return $response;
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
