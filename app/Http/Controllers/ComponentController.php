<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ComponentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request) {
        // if you need the max date condition
        // $components = DB::select("select * from hpm_description_insight where date=(select max(date) from hpm_description_insight) ");

        $components = DB::table('hpm_description_insight')->get();
        // dd($components);
       
        return view("superadmin.component.index", compact('components'));
    }


    public function store(Request $request) {
        $this->validate($request, [
            'component_name'=>'required',
            'component_title'=>'required',
            'description'=>'required'
        ]);
        
        try{
            DB::begintransaction();

            $componentNames = getComponentName();
            $getComponenName =  $componentNames[$request->component_name];
            // $component_id = sprintf('%03d',$request->component_name);
            $component_id = $request->component_name;

            $isExist = DB::table('hpm_description_insight')->where('component_id', $component_id)->first();
            if($isExist){
                DB::table('hpm_description_insight')->where('component_id', $component_id)->update(
                    ['date' => Carbon::now(),'component_title' => $request->component_title, 'description_beng' => $request->description ]
                );
            }else{
                DB::table('hpm_description_insight')->insert(
                    ['date' => Carbon::now(),'component_id' => $component_id,'component_name_beng' => $getComponenName, 'component_title' => $request->component_title, 'description_beng' => $request->description ]
                );
            }
            
            DB::commit();
            return redirect()->back()->with('success','Component Successfully Created');
        } catch (\Exception $ex) {
            DB::rollback();
            Log::error('[Class => ' . __CLASS__ . ", function => " . __FUNCTION__ . " ]" . " @ " . $ex->getFile() . " " . $ex->getLine() . " " . $ex->getMessage());
            return redirect()->back()->withErrors('Something went wrong. Please try again')->withInput();
        }
    }

    public function update($component_id,Request $request)
    {
        
        $this->validate($request, [
            'component_name'=>'required',
            'component_title'=>'required',
            'description'=>'required'
        ]);
        
        try{
            DB::begintransaction();
            $isExist = DB::table('hpm_description_insight')->where('component_id', $component_id)->first();
            if($isExist){
                DB::table('hpm_description_insight')->where('component_id', $component_id)->update(
                    ['date' => Carbon::now(),'component_title' => $request->component_title, 'description_beng' => $request->description ]
                );
                DB::commit();
                return redirect()->back()->with('success','Component Successfully Updated');
            }else{
                return redirect()->back()->with('error','No component found');
            }
            
            
        } catch (\Exception $ex) {
            DB::rollback();
            Log::error('[Class => ' . __CLASS__ . ", function => " . __FUNCTION__ . " ]" . " @ " . $ex->getFile() . " " . $ex->getLine() . " " . $ex->getMessage());
            return redirect()->back()->withErrors('Something went wrong. Please try again')->withInput();
        }
    }

}
