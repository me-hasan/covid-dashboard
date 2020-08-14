<?php

namespace App\Http\Controllers\iedcr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class IedcrDashboardController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
       $hda_card = DB::table('hda_card')->orderBy('date','DESC')->first();
       $hda_nationwide_summary_data = DB::table('hda_nationwide_summary_data')->get();
       return view('iedcr.dashboard',compact('hda_card','hda_nationwide_summary_data'));
    }
    
}
