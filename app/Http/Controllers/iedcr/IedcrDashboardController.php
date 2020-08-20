<?php

namespace App\Http\Controllers\iedcr;

use DB;
use App\Http\Controllers\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;

class IedcrDashboardController extends Controller
{

	public function __construct()
  {
      $this->middleware('auth');
  }

	public function index(Request $request)
  {
     $hda_card = DB::table('hda_card')->orderBy('date','DESC')->first();

     // $hda_nationwide_summary_data = DB::table('hda_nationwide_summary_data')->get();
     // $hda_population_wise_infected = DB::table('hda_population_wise_infected')->get();
     // $hda_age_wise_infected_distribution = DB::table('hda_age_wise_infected_distribution')->get();
     // $hda_gender_wise_infect_distribution = DB::table('hda_gender_wise_infect_distribution')->orderBy('date','DESC')->first();
     // $hda_age_wise_death_distribution = DB::table('hda_age_wise_death_distribution')->get();
     // $hda_gender_wise_death_distribution = DB::table('hda_gender_wise_death_distribution')->orderBy('date','DESC')->first();
     // $hda_average_delay_time = DB::table('hda_average_delay_time')->orderBy('id','DESC')->first();
     // $hda_time_series = DB::table('hda_time_series')->get();

     $data_source_description = DB::table('data_source_description')->where('page_name','iedcr-dashboard')->get();
     

     
    if($request->division){
      // Div Dis Upazila Level Infected Gender Distribution
      $infectedGender = $this->upazillaLevelInfectedGender($request);

      // Div Dis Upazila Level Infected Age Group Distribution
      $infectedAge = $this->upazillaLevelInfectedAge($request);

      // Div Dis Upazila wise Infectd Person Trend Line
      $ininfectedTrend = $this->divDislInfectedTrend($request) ?? '';
    }else{
     // Nationwide Infected Gender Distribution
      $infectedGender = $this->nationalInfectedGender();

     // National level Infected Age Group Distribution
      $infectedAge = $this->nationalInfectedAge();

      // Nantionwide Infectd Person Trend Line
      $ininfectedTrend = $this->nationalInfectedTrend();
    }
    //dd($infectedGender);
     


     // dd($upazillaLevelInfectedTrend);

     return view('iedcr.dashboard_new',compact('hda_card','data_source_description','infectedGender','infectedAge','ininfectedTrend'));
  }

  private function nationalInfectedGender()
  {
    $getNationalInfectedGender = DB::select("select (Female/(Female+Male))*100 as 'F',(Male/(Female+Male))*100 as 'M', updt_date
                              from
                              (select T1.F as 'Female',T2.M as 'Male',T1.last_date as 'updt_date'
                              from
                              (select max(date_of_test) as 'last_date', count(id) as 'F'
                              from infected_person
                              where sex='Female' or sex='F') as T1
                              inner join
                              (select max(date_of_test) as 'last_date', count(id) as 'M'
                              from infected_person
                              where sex='Male' or sex='M') as T2) as A");
    return $getNationalInfectedGender[0];
  }

  private function upazillaLevelInfectedGender($request)
  {
    if($request->division && $request->district && $request->upazila){
      $getUpazillaLevelInfectedGender = DB::select("select Upazila, F, M from Div_Dist_Upz_Infected_Gender where Upazila='".$request->upazila."' group by Upazila;");
    }elseif($request->division && $request->district){
      $getUpazillaLevelInfectedGender = DB::select("select District, F, M from Div_Dist_Upz_Infected_Gender where District='".$request->district."' group by District;");
    }elseif($request->division){
      $getUpazillaLevelInfectedGender = DB::select("select Division, F, M from Div_Dist_Upz_Infected_Gender where Division='".$request->division."' group by Division;");
    }
    
    return $getUpazillaLevelInfectedGender[0] ?? '';
  }

  private function nationalInfectedAge()
  {
    $getNationalInfectedAge = DB::select("select (A.zero_to_ten/A.Total)*100 as '_0_10', 
        (A.elv_to_twenty/A.Total)*100 AS '_11_20',
        (A.twentyone_to_thirty/A.Total)*100 as '_21_30',
        (A.thirtyone_to_forty/A.Total)*100 as '_31_40',
        (A.fortyone_to_fifty/A.Total)*100 as '_41_50', 
        (A.fiftyone_to_sixty/A.Total)*100 as '_51_60', (A.sixtyone_to_hundred/A.Total)*100 as '_60_Plus', updt_date
    from
    (SELECT
        max(date_of_test) as 'updt_date',
        SUM(IF(age < 10,1,0)) as 'zero_to_ten',
        SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
        SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
        SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
        SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
        SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
        SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
        SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
        FROM infected_person)
    as A");
    return $getNationalInfectedAge[0];
  }

  private function upazillaLevelInfectedAge($request)
  {
    if($request->division && $request->district && $request->upazila){
      $getUpazillaLevelInfectedAge = DB::select("select Upazila, _0_10, _11_20, _21_30, _31_40, _41_50, _51_60, _60_Plus from Div_Dist_Upz_Infected_age where Upazila='".$request->upazila."' group by Upazila;");
    }elseif($request->division && $request->district){
      $getUpazillaLevelInfectedAge = DB::select("select District, _0_10, _11_20, _21_30, _31_40, _41_50, _51_60, _60_Plus from Div_Dist_Upz_Infected_age where District='".$request->district."' group by District;");
    }elseif($request->division){
      $getUpazillaLevelInfectedAge = DB::select("select Division, _0_10, _11_20, _21_30, _31_40, _41_50, _51_60, _60_Plus from Div_Dist_Upz_Infected_age where Division='".$request->division."' group by Division;");
    }
    
    return $getUpazillaLevelInfectedAge[0] ?? '';
  }

  private function nationalInfectedTrend()
  {
    $getNationalInfectedTrend = DB::select("select date_of_test as 'Date', count(id) as infected_count from infected_person group by date_of_test");
    return $getNationalInfectedTrend[0] ?? '';
  }

  private function divDislInfectedTrend($request)
  {
    if($request->division && $request->district){
      $getDivDisLevelInfectedTrend = DB::select("select District, Date, sum(infected_person) as infected_count from div_dist_upz_infected_trend where District='".$request->district."' group by District, Date;");
    }elseif($request->division){
      $getDivDisLevelInfectedTrend = DB::select("select Division, Date, sum(infected_person) as infected_count from div_dist_upz_infected_trend where Division='".$request->division."' group by Division, Date;");
    }
    
    return $getDivDisLevelInfectedTrend ?? '';
  }



  private function upazillaLevelInfectedGender_old($request)
  {
    $getUpazillaLevelInfectedGender = DB::table('Div_Dist_Upz_Infected_Gender')
                                      ->when($request->division, function ($query) use ($request) {
                                          return $query->where('Division', $request->division);
                                      })
                                      ->when($request->district, function ($query) use ($request) {
                                          return $query->where('District', $request->district);
                                      })
                                      ->when($request->upazilla, function ($query) use ($request) {
                                          return $query->where('Upazila', $request->upazilla);
                                      })
                                      ->first();

    return $getUpazillaLevelInfectedGender;
  }

  private function upazillaLevelInfectedAge_old($request)
  {
    $getUpazillaLevelInfectedAge = DB::table('Div_Dist_Upz_Infected_age')
                                      ->when($request->division, function ($query) use ($request) {
                                          return $query->where('Division', $request->division);
                                      })
                                      ->when($request->district, function ($query) use ($request) {
                                          return $query->where('District', $request->district);
                                      })
                                      ->when($request->upazilla, function ($query) use ($request) {
                                          return $query->where('Upazila', $request->upazilla);
                                      })
                                      ->first();

    return $getUpazillaLevelInfectedAge;
  }

  

  public function generateInfectedGenderExcel(Request $request){
     if($request->division){
        $genderData = $this->upazillaLevelInfectedGender($request);
     }else{
        $genderData = $this->nationalInfectedGender();
     }

     $list = collect([
          [ 'Female' => $genderData->F ?? '--', 'Male' => $genderData->M ?? '--', 'Updated Date' =>$genderData->updt_date ?? '--' ],
      ]);

      return (new FastExcel($list))->download('infected_gender.xlsx');
  }
    
}
