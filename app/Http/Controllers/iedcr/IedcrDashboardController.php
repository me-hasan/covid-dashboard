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
     $hda_population_wise_infected = DB::table('hda_population_wise_infected')->orderBy('division','ASC')->get();
      $hda_time_series = DB::table('hda_time_series')->orderBy('date','DESC')->take(7)->get();


     $data_source_description = DB::table('data_source_description')->where('page_name','iedcr-dashboard')->get();



    if($request->division){
      // Div Dis Upazila Level Infected Gender Distribution
      $infectedGender = $this->upazillaLevelInfectedGender($request);

      // Div Dis Upazila Level Infected Age Group Distribution
      $infectedAge = $this->upazillaLevelInfectedAge($request);

      // Div Dis Upazila wise Infectd Person Trend Line
      $ininfectedTrend = $this->divDislInfectedTrend($request) ?? '';


      $ininfectedMap = $this->divDisInfectedMap($request);

      $ininfectedPopulation = $this->nationalInfectedPopulation($request->division);

      //death case for map
      $row5_data['death_case_map'] = $this->deathCaseMap($request->division);
      $death_case_two_week = $this->deathCaseTwoWeek($request->division);
      $row5_data['previous_week_data'] = $death_case_two_week['previous_week'];
      $row5_data['current_week_data'] = $death_case_two_week['current_week'];
      $row5_data['division_wise_death'] = $this->divisionDeathDistribution($request->division);
    }else{
     // Nationwide Infected Gender Distribution
      $infectedGender = $this->nationalInfectedGender();

     // National level Infected Age Group Distribution
      $infectedAge = $this->nationalInfectedAge();

      // Nantionwide Infectd Person Trend Line
      $ininfectedTrend = $this->nationalInfectedTrend($request);

      //death case for map
      $row5_data['death_case_map'] = $this->deathCaseMap();
      $ctg_value = $row5_data['death_case_map']->where('division_name','Dhaka')->first();
      $death_case_two_week = $this->deathCaseTwoWeek();
      $row5_data['previous_week_data'] = $death_case_two_week['previous_week'];
      $row5_data['current_week_data'] = $death_case_two_week['current_week'];
      $row5_data['division_wise_death'] = $this->divisionDeathDistribution($request->division);

       $ininfectedMap = $this->nationalInfectedMap();

      // Nantionwide Infectd Person Population
      $ininfectedPopulation = $this->nationalInfectedPopulation();
    }

    // common functions
    //Hospital City Wise
    $dhaka_hospital=$this->city_wise_hospital('Dhaka');
    $ctg_hospital=$this->city_wise_hospital('Chittagong');

    $dhaka_hospital_details=$this->city_wise_hospital_details('Dhaka');
    $ctg_hospital_details=$this->city_wise_hospital_details('Chittagong');

    if($request->has('excel_download') && $request->excel_download == 'test_posititvity_age') {
        return  $this->testPositivitybyAge($request);
    }
      if($request->has('excel_download') && $request->excel_download == 'test_posititvity_gender') {
          return  $this->testPositivitybyGender($request);
      }
      if($request->has('excel_download') && $request->excel_download == 'avgDelayTime') {
          return  $this->avgDelayTime($request);
      }

    $testPositivityByAge =  $this->testPositivitybyAge($request);
    $testPositivityByGender =  $this->testPositivitybyGender($request);
    $avgDelayTimeData =  $this->avgDelayTime($request);


    $death_by_gender = $this->deathByGender();
    $row5_data['male_death_percentage'] = number_format((float)$death_by_gender['male_death_percentage'], 2, '.', '');
    $row5_data['female_death_percentage'] = number_format((float)$death_by_gender['female_death_percentage'], 2, '.', '');
    $row5_data['death_by_age_group'] = $this->deathByAgeGroup();

      //mobility section
      if($request->division || $request->district || $request->upazila){
          $mobility_list  = $this->divisionWideMobilityInOut($request);
      } else {
          $mobility_list  = $this->nationWideMobilityInOut($request);
      }

      $mobility_in = $mobility_out = $subscriber = [];

      foreach ($mobility_list as $mobility) {
          $mobilityDate[] = $mobility->Calculated_date;
          $mobility_in[]  = $mobility->mobility_in;
          $mobility_out[] = $mobility->mobility_out;
          $subscriber[]   = $mobility->Num_subscriber;
      }

      $mobilityInData  = implode(",", $mobility_in);
      $mobilityOutData = implode(",", $mobility_out);


     return view('iedcr.dashboard_new',compact('hda_card','data_source_description','infectedGender','infectedAge','ininfectedTrend',
      'row5_data', 'mobilityDate','mobilityInData','mobilityOutData', 'testPositivityByAge','testPositivityByGender','avgDelayTimeData',
      'ininfectedTrend','ininfectedMap','ininfectedPopulation','hda_time_series','hda_population_wise_infected',
      'dhaka_hospital','ctg_hospital',
      'dhaka_hospital_details','ctg_hospital_details'));
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
    $str= $request->district;
    if($request->district=="COX'S" || $request->district=="cox's"){
       $str= 'cox';
    }
    //dd($str);
    if($request->division && $request->district && $request->upazila){
      $getUpazillaLevelInfectedGender = DB::select("select Upazila, F, M from Div_Dist_Upz_Infected_Gender where Upazila='".$request->upazila."' group by Upazila;");
    }elseif($request->division && $request->district){
      $getUpazillaLevelInfectedGender = DB::select("select District, F, M from Div_Dist_Upz_Infected_Gender where District like '%".$str."%' group by District;");
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

  private function nationalInfectedTrend($request)
  {
    $qry_str= " ";
    if($request->from_date!='' && $request->to_date!=''){
        $qry_str= " where  DATE(date_of_test) BETWEEN '".$request->from_date."' AND '".$request->to_date."' " ;
      }
    $getNationalInfectedTrend = DB::select("select 'national' AS area, date_of_test as 'Date', count(id) as infected_count from infected_person ".$qry_str." group by date_of_test");
    return $getNationalInfectedTrend ?? '';
  }

  private function divDislInfectedTrend($request)
  {
      $qry_str= " ";
    
      if($request->from_date!=''){
        $qry_str= " AND DATE(Date) BETWEEN '".$request->from_date."' AND '".$request->to_date."' " ;
      }
    
      if($request->division && $request->district){
        $getDivDisLevelInfectedTrend = DB::select("select District as area, Date, sum(infected_person) as infected_count from div_dist_upz_infected_trend where District='".$request->district."'  ".$qry_str." group by District, Date ");
      }elseif($request->division){
        $getDivDisLevelInfectedTrend = DB::select("select Division as area, Date, sum(infected_person) as infected_count from div_dist_upz_infected_trend where Division='".$request->division."'  ".$qry_str." group by Division, Date ");
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

  private function deathCaseMap($division_name = '')
  {
    if($division_name != '' && strtolower($division_name) == 'chittagong'){
      $division_name = 'Chattogram';
    }

    if($division_name != ''){
      $getDeathCaseMap = DB::table('death_data')->where('division_name','like',$division_name)->groupBy('division_name')->get();
    }else{
      $getDeathCaseMap = DB::table('death_data')->groupBy('division_name')->get();
    }

    // dd($getDeathCaseMap);
    return $getDeathCaseMap;
  }

  private function divisionDeathDistribution($division_name = '', $is_excel=false)
  {
    if($division_name != '' && strtolower($division_name) == 'chittagong'){
      $division_name = 'Chattogram';
    }

    if($division_name != ''){
      if($is_excel){
        $getDivisionDeath = DB::table('deathdivisionaldistribution')->where('division','like',$division_name)->get();
      }else{
        $getDivisionDeath = DB::table('deathdivisionaldistribution')->where('division','like',$division_name)->pluck('percentageOfDeath')->toArray();
      }

    }else{
      if($is_excel){
        $getDivisionDeath = DB::table('deathdivisionaldistribution')->get();
      }else{
        $getDivisionDeath = DB::table('deathdivisionaldistribution')->pluck('percentageOfDeath')->toArray();
      }

    }

    // dd($getDivisionDeath);
    return $getDivisionDeath;
  }

  private function deathByGender($is_excel=false)
  {
    if($is_excel){
      $deathByGender = DB::table('deathnationalgenderdistribution')->get();
      return $deathByGender;
    }else{
      $deathByGender = DB::select("SELECT * FROM deathnationalgenderdistribution WHERE date like (select max(date) from deathnationalgenderdistribution)");

      $total_death = $deathByGender[0]->TotalDeath + $deathByGender[1]->TotalDeath;
      $data['male_death_percentage'] = ($deathByGender[0]->TotalDeath / $total_death) * 100;
      $data['female_death_percentage'] = ($deathByGender[1]->TotalDeath / $total_death) * 100;

      // dd($deathByGender);
      return $data;
    }

    return $getDivisionDeath;
  }

  private function deathByAgeGroup($is_excel=false)
  {
    $getAgeDeath = DB::table('deathnationalagedistribution')->groupby('ageRange')->get();

    if($is_excel){
      return $getAgeDeath;
    }else{
      $totalDeath = $getAgeDeath->sum('TotalDeath');
      $deathAge = [];
      $i=0;
      foreach ($getAgeDeath as $key => $d) {
        if($i <= 6){
          $calcPercentage = ($d->TotalDeath / $totalDeath) * 100;
          array_push($deathAge, $calcPercentage);
          $i++;
        }else{
          break;
        }
      }
      return $deathAge;
    }
  }

  private function deathCaseTwoWeek($division_name = '', $is_excel = false)
  {
    if($division_name != '' && strtolower($division_name) == 'chittagong'){
      $division_name = 'Chattogram';
    }
    $condition = $division_name != '' ? "where division_name like '$division_name'" : '';
    $getDeathCaseByWeek = DB::select("SELECT
                        division_name, SUM(last_24_hours_death) as 'death',
                        CONCAT
                        (
                          STR_TO_DATE(CONCAT(YEARWEEK(date, 2), ' Sunday'), '%X%V %W'),
                          '--',
                          STR_TO_DATE(CONCAT(YEARWEEK(date, 2), ' Sunday'), '%X%V %W') + INTERVAL 6 DAY
                        ) AS week
                      FROM death_data
                      ".$condition."
                      GROUP BY YEARWEEK(date, 2), division_name
                      ORDER BY YEARWEEK(date, 2) desc limit 16");

    if($is_excel){
      return $getDeathCaseByWeek;
    }
    $arr = array();

    foreach ($getDeathCaseByWeek as $key => $item) {
       $perWeek[$item->week][$key] = $item;
    }

    $current_week = [];
    $previous_week = [];

    $i=0;
    foreach($perWeek as $wk_details){
      foreach ($wk_details as $key => $wk) {
        if($i<2){
          if($i==0){
            array_push($current_week, $wk->death);
          }else{
            array_push($previous_week, $wk->death);
          }
        }
      }
      $i++;
    }

    $data['current_week'] = $current_week;
    $data['previous_week'] = $previous_week;
    return $data;
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

  /*test positivity start*/
    public function  testPositivitybyAge($request) {

        $searchQuery = '';
        if($request->has('hierarchy_level') && $request->hierarchy_level == 'divisional') {
            if($request->has('division') && $request->division != ''){
                $groupBy = 'Division';
                $division = $request->division;
                $searchQuery = "WHERE Division = '". $division."'";
            }
            if($request->has('district') && $request->district != ''){
                $groupBy = 'District';
                $district = $request->district;
                $searchQuery = " WHERE District = '". $district . "'";
            }
            if($request->has('upazilla') && $request->upazilla != ''){
                $groupBy = 'Upazila';
                $upzilla = $request->upazilla;
                $searchQuery = " WHERE Upazila = '". $upzilla."'";
            }

        }
        if($searchQuery != '') {
            $testPositivesqlQuery = "SELECT Division, _0_10, _11_20, _21_30, _31_40, _41_50, _51_60, _60_Plus FROM `div_dis_upazila_test_positivity_age` ". $searchQuery."  group by ".$groupBy;
        } else {
            $testPositivesqlQuery = "SELECT Division, _0_10, _11_20, _21_30, _31_40, _41_50, _51_60, _60_Plus FROM `div_dis_upazila_test_positivity_age`  group by Division";
        }


        $testPositivesqlQueryDataArray = \Illuminate\Support\Facades\DB::select($testPositivesqlQuery);

       if($request->has('excel_download')) {

           if(count($testPositivesqlQueryDataArray)) {
               foreach ($testPositivesqlQueryDataArray as $testPositivesqlQueryData) {
                   $list = collect([
                       [ 'Division' => $testPositivesqlQueryData->Division ?? '--', '_0_10' => $testPositivesqlQueryData->_0_10 ?? '--', '_11_20' =>$testPositivesqlQueryData->_11_20 ?? '--' , '_21_30' =>$testPositivesqlQueryData->_21_30 ?? '--', '_31_40' =>$testPositivesqlQueryData->_31_40 ?? '--', '_41_50' =>$testPositivesqlQueryData->_41_50 ?? '--', '_51_60' =>$testPositivesqlQueryData->_51_60 ?? '--', '_60_Plus' =>$testPositivesqlQueryData->_60_Plus ?? '--' ],
                   ]);
               }
           } else {
               $list = collect([
                   [ 'Division' => $testPositivesqlQueryData->Division ?? '--', '_0_10' => $testPositivesqlQueryData->_0_10 ?? '--', '_11_20' =>$testPositivesqlQueryData->_11_20 ?? '--' , '_21_30' =>$testPositivesqlQueryData->_21_30 ?? '--', '_31_40' =>$testPositivesqlQueryData->_31_40 ?? '--', '_41_50' =>$testPositivesqlQueryData->_41_50 ?? '--', '_51_60' =>$testPositivesqlQueryData->_51_60 ?? '--', '_60_Plus' =>$testPositivesqlQueryData->_60_Plus ?? '--' ],
               ]);
           }


           return (new FastExcel($list))->download('test_positive_age.xlsx');
       }

        return $testPositivesqlQueryDataArray;

    }

    public function  testPositivitybyGender($request) {

        $searchQuery = '';
        if($request->has('hierarchy_level') && $request->hierarchy_level == 'divisional') {
            if($request->has('division') && $request->division != ''){
                $groupBy = 'Division';
                $division = $request->division;
                $searchQuery = "WHERE Division = '". $division."'";
            }
            if($request->has('district') && $request->district != ''){
                $groupBy = 'District';
                $district = $request->district;
                $searchQuery = " WHERE District = '". $district . "'";
            }
            if($request->has('upazilla') && $request->upazilla != ''){
                $groupBy = 'Upazila';
                $upzilla = $request->upazilla;
                $searchQuery = " WHERE Upazila = '". $upzilla."'";
            }

        }
        if($searchQuery != '') {
            $testPositiveGendersqlQuery = "select Division, F, M from div_dist_upz_test_positivity_gender ". $searchQuery."  group by ". $groupBy;
        } else {
            $testPositiveGendersqlQuery = "select Division, F, M from div_dist_upz_test_positivity_gender group by Division";
        }



        $testPositivesqlGenderQueryData = \Illuminate\Support\Facades\DB::select($testPositiveGendersqlQuery);
        if($request->has('excel_download')) {
            $testPositivesqlGenderQueryData = $testPositivesqlGenderQueryData;
            if(count($testPositivesqlGenderQueryData)) {
                foreach ($testPositivesqlGenderQueryData as $genderData) {
                    $list = collect([
                        [ 'Female' => $genderData->F ?? '--', 'Male' => $genderData->M ?? '--', 'Updated Date' =>$genderData->updt_date ?? '--' ],
                    ]);
                }
            } else {
                $list = collect([
                    [ 'Female' => $genderData->F ?? '--', 'Male' => $genderData->M ?? '--', 'Updated Date' =>$genderData->updt_date ?? '--' ],
                ]);
            }

            return (new FastExcel($list))->download('test_positive_gender.xlsx');
        }

        return $testPositivesqlGenderQueryData;

    }

    public function avgDelayTime($request) {
        $searchQuery = '';
        if($request->has('hierarchy_level') && $request->hierarchy_level == 'divisional') {
            if($request->has('division') && $request->division != ''){
                $groupBy = 'division';
                $division = $request->division;
                $searchQuery = "WHERE division = '". $division."'";
            }
            if($request->has('district') && $request->district != ''){
                $groupBy = 'district';
                $district = $request->district;
                $searchQuery = " WHERE district = '". $district . "'";
            }
            if($request->has('upazilla') && $request->upazilla != ''){
                $groupBy = 'upazila';
                $upzilla = $request->upazilla;
                $searchQuery = " WHERE upazila = '". $upzilla."'";
            }

        }
        if($searchQuery != '') {
           // $testPositiveGendersqlQuery = "select Division, F, M from div_dist_upz_test_positivity_gender ". $searchQuery."  group by ". $groupBy;
            $testPositiveGendersqlQuery = "Select Date,(sum(avg_sample_to_test_lag_time)/count(avg_sample_to_test_lag_time)) as 'avg_sample_to_test_lag_time', (sum(avg_test_to_report_lag_time)/count(avg_test_to_report_lag_time)) as 'avg_test_to_report_lag_time' from test_reporting_lag_per_upazila_aug07 ". $searchQuery."  group by ". $groupBy;;
        } else {
            $testPositiveGendersqlQuery = "Select Date,(sum(avg_sample_to_test_lag_time)/count(avg_sample_to_test_lag_time)) as 'avg_sample_to_test_lag_time', (sum(avg_test_to_report_lag_time)/count(avg_test_to_report_lag_time)) as 'avg_test_to_report_lag_time' from test_reporting_lag_per_upazila_aug07 group by date";
        }



        $testPositivesqlGenderQueryData = \Illuminate\Support\Facades\DB::select($testPositiveGendersqlQuery);
        if($request->has('excel_download')) {
            $testPositivesqlGenderQueryData = $testPositivesqlGenderQueryData;
            if(count($testPositivesqlGenderQueryData)) {
                foreach ($testPositivesqlGenderQueryData as $genderData) {
                    $list = collect([
                        [ 'Sample Collection to Test' => $genderData->avg_sample_to_test_lag_time ?? '--', 'Test to Result' => $genderData->avg_test_to_report_lag_time ?? '--', ' Date' =>$genderData->Date ?? '--' ],
                    ]);
                }
            } else {
                $list = collect([
                    [ 'Female' => $genderData->avg_sample_to_test_lag_time ?? '--', 'Male' => $genderData->avg_test_to_report_lag_time ?? '--', 'Updated Date' =>$genderData->Date ?? '--' ],
                ]);
            }

            return (new FastExcel($list))->download('Avg_Delay_Time.xlsx');
        }

        return $testPositivesqlGenderQueryData;
    }
    /*test positivity end*/

    /**
     * Nation wide mobility IN / OUT
     * @return mixed
     */
    protected function nationWideMobilityInOut($request) {
    $nationWideMobility=null;
    if ($request->from_date && $request->to_date){
        $from_date = $request->from_date;
        $to_date   = $request->to_date;
        $nationWideMobility = DB::select("select Calculated_date,sum(mobility_in) as 'mobility_in', sum(mobility_out) as 'mobility_out', sum(Num_subscriber) as 'Num_subscriber' from calculated_mobility where (Calculated_date between '".$from_date."'and '".$to_date ."') group by Calculated_date");

    } else {
        $nationWideMobility = DB::select("select Calculated_date,sum(mobility_in) as 'mobility_in', sum(mobility_out) as 'mobility_out', sum(Num_subscriber) as 'Num_subscriber' from calculated_mobility group by Calculated_date");
    }
      return $nationWideMobility;
  }

    /**
     * Division wide mobility IN / OUT
     * @param $request
     */
    protected function divisionWideMobilityInOut($request) {
      $mobility=null;
      if ($request->from_date && $request->to_date){
          $from_date = $request->from_date;
          $to_date   = $request->to_date;
          if($request->division && $request->district && $request->upazila){
              $mobility = DB::select("select Calculated_date, Division, District, Upazila, sum(mobility_in)  as 'mobility_in', sum(mobility_out) as 'mobility_out', sum(Num_subscriber) as 'Num_subscriber' from calculated_mobility where Upazila='".$request->upazila."' and (Calculated_date between '".$from_date."'and '".$to_date ."') group by Calculated_date, Upazila");
          }elseif($request->division && $request->district){
              $mobility = DB::select("select Calculated_date, Division, District, sum(mobility_in)  as 'mobility_in', sum(mobility_out) as 'mobility_out', sum(Num_subscriber) as 'Num_subscriber' from calculated_mobility where District='".$request->district."' and (Calculated_date between '".$from_date."'and '".$to_date ."') group by Calculated_date, District");
          }elseif($request->division){
              $mobility = DB::select("select Calculated_date,Division,sum(mobility_in)  as 'mobility_in', sum(mobility_out) as 'mobility_out', sum(Num_subscriber) as 'Num_subscriber' from calculated_mobility where Division='".$request->division."' and (Calculated_date between '".$from_date."'and '".$to_date ."') group by Calculated_date, Division");
          }
      } else {
          if($request->division && $request->district && $request->upazila){
              $mobility = DB::select("select Calculated_date, Division, District, Upazila, sum(mobility_in)  as 'mobility_in', sum(mobility_out) as 'mobility_out', sum(Num_subscriber) as 'Num_subscriber' from calculated_mobility where Upazila='".$request->upazila."'group by Calculated_date, Upazila");
          }elseif($request->division && $request->district){
              $mobility = DB::select("select Calculated_date, Division, District, sum(mobility_in)  as 'mobility_in', sum(mobility_out) as 'mobility_out', sum(Num_subscriber) as 'Num_subscriber' from calculated_mobility where District='".$request->district."'group by Calculated_date, District");
          }elseif($request->division){
              $mobility = DB::select("select Calculated_date,Division,sum(mobility_in)  as 'mobility_in', sum(mobility_out) as 'mobility_out', sum(Num_subscriber) as 'Num_subscriber' from calculated_mobility where Division='".$request->division."' group by Calculated_date, Division");
          }
      }

      return $mobility;
	}

  public function generateDeathByAgeGroupExcel(Request $request){
    $deathByAgeGroup = $this->deathByAgeGroup(true);
    $i=0;
    $data = [];
    if(sizeof($deathByAgeGroup) > 0){
        foreach ($deathByAgeGroup as $key => $deathData) {
            $data[$i]['Date'] =  $deathData->date;
            $data[$i]['Age Range'] =  $deathData->ageRange;
            $data[$i]['Death(Last 24 hours)'] =  $deathData->DeathLast24Hours;
            $data[$i]['Total Death'] =  $deathData->TotalDeath;
            $i++;
        }
    }
    $list = collect($data);
    return (new FastExcel($list))->download('death_by_age_group.xlsx');
  }

  public function generateDeathByGenderExcel(Request $request){
    $deathByGender = $this->deathByGender(true);
    $i=0;
    $data = [];
    if(sizeof($deathByGender) > 0){
        foreach ($deathByGender as $key => $deathData) {
            $data[$i]['Date'] =  $deathData->date;
            $data[$i]['Gender'] =  $deathData->gender;
            $data[$i]['Death(Last 24 hours)'] =  $deathData->DeathLast24Hours;
            $data[$i]['Total Death'] =  $deathData->TotalDeath;
            $i++;
        }
    }
    $list = collect($data);
    return (new FastExcel($list))->download('death_by_gender.xlsx');
  }

  public function generateTwoWeeksExcel(Request $request){
     if($request->division){
        $twoWeeksData = $this->deathCaseTwoWeek($request->division, true);
     }else{
        $twoWeeksData = $this->deathCaseTwoWeek('', true);
     }

    $i=0;
    $data = [];
    if(sizeof($twoWeeksData) > 0){
        foreach ($twoWeeksData as $key => $deathData) {
            $data[$i]['Division Name'] =  $deathData->division_name;
            $data[$i]['Death'] =  $deathData->death;
            $data[$i]['Week'] =  $deathData->week;
            $i++;
        }
    }
     $list = collect($data);
      return (new FastExcel($list))->download('two_weeks_change.xlsx');
  }

  public function generateDivisionDeathExcel(Request $request){
     if($request->division){
        $divisionDeathData = $this->divisionDeathDistribution($request->division, true);
     }else{
        $divisionDeathData = $this->divisionDeathDistribution('', true);
     }

    $i=0;
    $data = [];
    if(sizeof($divisionDeathData) > 0){
        foreach ($divisionDeathData as $key => $deathData) {
            $data[$i]['Division Name'] =  $deathData->division;
            $data[$i]['Date'] =  $deathData->date;
            $data[$i]['Death(Last 24 hours)'] =  $deathData->deathLast24Hours;
            $data[$i]['Total Death'] =  $deathData->TotalDeath;
            $data[$i]['percentage Of Death'] =  $deathData->percentageOfDeath;
            $i++;
        }
    }
     $list = collect($data);
      return (new FastExcel($list))->download('division_wise_death.xlsx');
  }


  public function generateInfectedSeriesExcel(Request $request){
     if($request->division){
        $seriesData = $this->divDislInfectedTrend($request);
     }else{
        $seriesData = $this->nationalInfectedTrend($request);
     }

      $i=0;
      $data = [];
      if(sizeof($seriesData) > 0){
          foreach ($seriesData as $key => $row) {
              $data[$i]['Date'] =  $row->Date;
              $data[$i]['Infected Count'] =  $row->infected_count;
              $i++;
          }
      }
     $list = collect($data);
      return (new FastExcel($list))->download('infected_trend.xlsx');
  }

  public function generateInfectedPerLacExcel(Request $request){
     if($request->division){
        $per_pac_Data = $this->nationalInfectedPopulation($request->division);
     }else{
        $per_pac_Data = $this->nationalInfectedPopulation();
     }

      $i=0;
      $data = [];
      if(sizeof($per_pac_Data) > 0){
          foreach ($per_pac_Data as $key => $row) {
              $data[$i]['Division'] =  $row->Division;
              $data[$i]['Cases Per Lac'] =  number_format($row->Cases_Per_Lac,2);
              $i++;
          }
      }
     $list = collect($data);
      return (new FastExcel($list))->download('infected_per_lac.xlsx');
  }

  public function generateInfectedAgeGroupExcel(Request $request){
     if($request->division){
       $infectedAge = $this->upazillaLevelInfectedAge($request);
     }else{
       $infectedAge = $this->nationalInfectedAge();
     }

      $list = collect([
          [
          '0-10' => $infectedAge->_0_10 ?? '--',
          '11-20' => $infectedAge->_11_20 ?? '--',
          '21-30' => $infectedAge->_21_30 ?? '--',
          '31-40' => $infectedAge->_31_40 ?? '--',
          '41-50' => $infectedAge->_41_50 ?? '--',
          '51-60' => $infectedAge->_51_60 ?? '--',
          '60+' => $infectedAge->_60_Plus ?? '--',
          'Updated Date' =>$infectedAge->updt_date ?? '--' ],
      ]);

      return (new FastExcel($list))->download('infected_age_group.xlsx');
  }

  private function city_wise_hospital($city)
  {
    $city_wise_hospital = DB::select("SELECT COUNT(hospitalName) AS 'tot_Hospital',
    SUM(alocatedGeneralBed) AS 'General_Beds',
    SUM(alocatedICUBed) AS 'ICU_Beds',
    ((SUM(AdmittedGeneralBed)*100)/(SUM(alocatedGeneralBed))) AS 'percent_General_Beds_Occupied',
    ((SUM(AdmittedICUBed)*100)/(SUM(alocatedICUBed))) AS 'percent_ICU_Beds_Occupied' FROM hospitaltemporarydata WHERE city='".$city."'");

    return $city_wise_hospital[0];
  }

  private function city_wise_hospital_details($city)
  {
    $city_wise_hospital_details = DB::select("SELECT * FROM hospitaltemporarydata WHERE city='".$city."'");

    return $city_wise_hospital_details;
  }
  private function nationalInfectedMap()
  {
    $getNationalInfectedMap = DB::select("select District, sum(infected) as 'Infected', SUBSTRING(District, 1, 4) AS ExtractString from Div_Dist_Upz_Infected_Geography  group by District");
    return $getNationalInfectedMap ;
  }

  private function divDisInfectedMap($request)
  {
    if($request->division && $request->district){
      $getDivDisLevelInfectedMap = DB::select("select District, sum(infected) as 'Infected',SUBSTRING(District, 1, 4) AS ExtractString from Div_Dist_Upz_Infected_Geography where District='".$request->district."' group by District");
    }else{
      $getDivDisLevelInfectedMap = DB::select("SELECT District, SUM(infected) AS 'Infected', SUBSTRING(District, 1, 4) AS ExtractString FROM Div_Dist_Upz_Infected_Geography where Division='".$request->division."' GROUP BY District;");
    }

    return $getDivDisLevelInfectedMap ?? '';
  }

  private function nationalInfectedPopulation($division=null)
  {
    $str="";
    if($division!=null && $division!=''){
       $str=" WHERE  B.Division = '".$division."' ";
    }
    //dd($str);
    $getNationalInfectedPopulation = DB::select("
        select B.Division, (A.Infected*100000)/B.Pop as 'Cases_Per_Lac' from
        (select Division, sum(infected) as 'Infected' from Div_Dist_Upz_Infected_Geography group by Division) as A

        inner join 
        (select Division, sum(population) as 'Pop' from bbs_coded_pop_upz group by Division) as B on A.Division=B.Division 
    ".$str." 

    ");
    return $getNationalInfectedPopulation ?? '';
  }
}
