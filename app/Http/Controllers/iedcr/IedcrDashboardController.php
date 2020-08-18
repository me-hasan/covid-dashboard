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
       $hda_population_wise_infected = DB::table('hda_population_wise_infected')->get();
       $hda_age_wise_infected_distribution = DB::table('hda_age_wise_infected_distribution')->get();
       $hda_gender_wise_infect_distribution = DB::table('hda_gender_wise_infect_distribution')->orderBy('date','DESC')->first();
       $hda_age_wise_death_distribution = DB::table('hda_age_wise_death_distribution')->get();
       $hda_gender_wise_death_distribution = DB::table('hda_gender_wise_death_distribution')->orderBy('date','DESC')->first();
       $hda_average_delay_time = DB::table('hda_average_delay_time')->orderBy('id','DESC')->first();
       $hda_time_series = DB::table('hda_time_series')->get();
       $data_source_description = DB::table('data_source_description')->where('page_name','iedcr-dashboard')->get();

       return view('iedcr.dashboard_new',compact('hda_card','hda_nationwide_summary_data',
        'hda_population_wise_infected','hda_age_wise_infected_distribution',
        'hda_gender_wise_infect_distribution','hda_age_wise_death_distribution',
        'hda_gender_wise_death_distribution','hda_average_delay_time','hda_time_series','data_source_description'));
    }
    
}
