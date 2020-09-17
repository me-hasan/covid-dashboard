<?php

namespace App\Http\Controllers\Hpm;

use Carbon\Carbon;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function checkValidUser() {
        if(auth()->user()->user_type != 'hpm'){
            abort(401);
        }
    }

    public function index(Request  $request) {
        $this->checkValidUser();
        $testPositivityMap = $this->testPositivityMap($request);
       // $cumulativeInfectedPerson = $this->cumulativeInfectedPerson($request);
        $cumulativeInfectedPerson = $this->cumulativeInfectedPerson_nation($request);
        //dd($cumulativeInfectedPerson);

        // shamvil start
            // row 2
            $data['nation_wide_MovingAvgInfected'] =$this->nation_wide_five_dayMovingAvgInfected();
            // row 2
            $data['days_infected'] =$this->nation_wise_14_days_infected();
            $data['days_death'] =$this->nation_wise_14_days_death();
            $data['days_test_positivity'] =$this->nation_wise_14_days_test_positivity();

            $data['tests_per_case_Mayanmar'] =$this->tests_per_case_country('Myanmar');
            $data['tests_per_case_Sri'] =$this->tests_per_case_country('Sri Lanka');
            $data['tests_per_case_Nepal'] =$this->tests_per_case_country('Nepal');
            $data['tests_per_case_Maldives'] =$this->tests_per_case_country('Maldives');
            $data['tests_per_case_India'] =$this->tests_per_case_country('India');
            $data['tests_per_case_Pakistan'] =$this->tests_per_case_country('Pakistan');
            $data['tests_per_case_Bangladesh'] =$this->tests_per_case_country('Bangladesh');

            // row 4
            $data['dhaka_hospital'] = $dhaka_hospital=$this->city_wise_hospital('Dhaka');
            $data['ctg_hospital'] = $ctg_hospital=$this->city_wise_hospital('Chittagong');

            $data['dhaka_hospital_details'] = $dhaka_hospital_details=$this->city_wise_hospital_details('Dhaka');
            $data['ctg_hospital_details'] = $ctg_hospital_details=$this->city_wise_hospital_details('Chittagong');
            // row 6
            $data['rm_1'] = $this->risk_matrix_1();
            $data['rm_2'] = $this->risk_matrix_2();
            $data['rm_3'] = $this->risk_matrix_3();
            $data['rm_4'] = $this->risk_matrix_4();
            $data['rm_5'] = $this->risk_matrix_5();
            $data['rm_6'] = $this->risk_matrix_6();
            $data['rm_7'] = $this->risk_matrix_7();
            $data['rm_8'] = $this->risk_matrix_8();
            $data['rm_9'] = $this->risk_matrix_9();
        // shamvil end

        //Test vs Cases (Robi)
        $data['testsVsCases'] = $this->getNationWiseTestsAndCases($request);
//dd($data['testsVsCases']);

        //dd($cumulativeInfectedPerson);

        $i = 0;
        $divisionlist=[];
        $seriesData = [];
        if(count($cumulativeInfectedPerson['division_data'])) {
            foreach ($cumulativeInfectedPerson['division_data'] as $key => $dist) {
                $seriesData[$i]['type'] = 'spline';
                $seriesData[$i]['name'] = $key;
                $seriesData[$i]['data'] = $dist ?? [];
                $seriesData[$i]['marker']['enabled'] = false;
                $seriesData[$i]['marker']['symbol'] = 'circle';
                $divisionlist[] = $key;
               // $seriesData[$i]['dashStyle'] = "shortdot";
                $i++;
            }


        }
        $data['series_data'] = json_encode($seriesData);
        $data['categories'] = json_encode($cumulativeInfectedPerson['categories']) ?? [];
        $data['testPositivityMap'] = $testPositivityMap;

        // row 1 left side
        $cumulativeInfection = $this->getCumulativeInfectionData($request);
        $data['row1_left_trend_date'] = $cumulativeInfection['dateBangla'];
        $data['row1_left_trend_infected_data'] = $cumulativeInfection['infected_person_date'];
        // dd($data);

        $data['division_list'] = $divisionlist;

        $data['last_14_days'] = $this->getLast14DaysData($request);
       // dd($data);
        //return view('hpm.dashboard.dashboard_test',$data);
        return view('hpm.dashboard',$data);
    }

    public function testPositivityMap($request) {
        try {
            $searchQuery = '';
            if($request->has('hierarchy_level') && $request->hierarchy_level == 'divisional') {


                if($request->has('district') && $request->district != ''){
                    $groupBy = 'district';
                    $district = $request->district;
                    if($request->district=="COX'S BAZAR" || $request->district=="cox's bazar"){
                        $district= 'cox';
                    }
                    $searchQuery = " and  district like '%".$district."%' ";
                }

            }
// new query
            if($searchQuery != '') {
//             $testPositivityMapSql = "select A.District, (A.Positive/B.Total)*100 as 'Test_Positivity' from
// (select district as 'District', max(date_of_test) as 'last_date', count(id) as 'Positive'
// from lab_clean_data
// where test_result='Positive' ". $searchQuery."  group by district) as A
// inner join
// (select district as 'District', max(date_of_test) as 'last_date', count(id) as 'Total'
// from lab_clean_data
// where test_result='Positive' or test_result='Negative' group by district) as B using(District)";

                $testPositivityMapSql = "SELECT T2.district AS District, SUM(T1.test_positivity)/COUNT(test_positivity) AS 'Test_Positivity' FROM
(SELECT A.bbs_code AS 'bbs_code', (A.Positive/B.Total)*100 AS 'test_positivity' FROM
(SELECT bbs_code, COUNT(id) AS 'Positive'
FROM lab_clean_data
WHERE test_result='Positive' ". $searchQuery." GROUP BY bbs_code) AS A
INNER JOIN
(SELECT bbs_code, COUNT(id) AS 'Total'
FROM lab_clean_data
WHERE test_result='Positive' OR test_result='Negative' GROUP BY bbs_code) AS B
USING(bbs_code)) AS T1 INNER JOIN bbs_coded_upazila_dist_div AS T2
ON T1.bbs_code=T2.upz_code GROUP BY T2.district";
            } else {
                $testPositivityMapSql = "SELECT T2.district AS District, SUM(T1.test_positivity)/COUNT(test_positivity) AS 'Test_Positivity' FROM
(SELECT A.bbs_code AS 'bbs_code', (A.Positive/B.Total)*100 AS 'test_positivity' FROM
(SELECT bbs_code, COUNT(id) AS 'Positive'
FROM lab_clean_data
WHERE test_result='Positive' GROUP BY bbs_code) AS A
INNER JOIN
(SELECT bbs_code, COUNT(id) AS 'Total'
FROM lab_clean_data
WHERE test_result='Positive' OR test_result='Negative' GROUP BY bbs_code) AS B
USING(bbs_code)) AS T1 INNER JOIN bbs_coded_upazila_dist_div AS T2
ON T1.bbs_code=T2.upz_code GROUP BY T2.district";
            }

            $testMapData = \Illuminate\Support\Facades\DB::select($testPositivityMapSql);
        } catch (\Exception $exception) {
            Log::error("test positivity error : ". $exception->getMessage());
        }
        return $testMapData;
    }


    private function getCumulativeInfectionData($request){
        $dateEnglish = $dateBangla = $infected_person_date = [];
        if($request->division){
            $cumulativeData = DB::select("SELECT t.date,t.Division,
                               @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
                        FROM
                        (SELECT
                          Date, Division, sum(Infected_Person) as 'Infected_Person'
                          FROM div_dist_upz_infected_trend where Date is not null AND Date <= CURDATE()
                          GROUP BY Date, Division ) as t
                        JOIN (SELECT @running_total:=0) r
                        WHERE division= '".$request->division."' and t.date <= CURDATE()
                        ORDER BY t.date");
        }else{
            // $cumulativeData = DB::select("SELECT t.date,
            //                    @running_total:=@running_total + t.infected_person_count AS cumulative_infected_person
            //             FROM
            //             ( SELECT
            //               test_date as 'date',
            //               count(id) as 'infected_person_count'
            //               FROM infected_person where test_date is not null AND test_date <= CURDATE()
            //               GROUP BY test_date ) t
            //             JOIN (SELECT @running_total:=0) r
            //             WHERE  t.date <= CURDATE()
            //             ORDER BY t.date");

            $cumulativeData = DB::select(" SELECT date, cumulative_confirmed_cases AS cumulative_infected_person FROM infected_cumulative ");
        }

        foreach ($cumulativeData as $key => $inf) {
            $get_date = date('Y-m-d', strtotime($inf->date));
            $get_date_bangla = convertEnglishDateToBangla($inf->date);
            if(!in_array($get_date, $dateEnglish, true)){
                array_push($dateEnglish, $get_date);
                array_push($dateBangla, $get_date_bangla);
            }

            array_push($infected_person_date, $inf->cumulative_infected_person);
        }

        $data['dateEnglish'] = $dateEnglish;
        $data['dateBangla'] = $dateBangla;
        $data['infected_person_date'] = $infected_person_date;

        // dd($data);
        return $data;
    }

    public function cumulativeInfectedPerson_nation($request) {

        if($request->has('division') && is_array($request->division) && count($request->division)) {

        }

           $cumulativeSql = "select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Dhaka' and date is not null group by Division, date order by Date";

        $cumulativeSql_dhk = "select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Dhaka' and date is not null group by Division, date order by Date ";

        $cumulativeSql_ctg = "select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Chittagong' and date is not null group by Division, date order by Date ";

        $cumulativeSql_barisal = " select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Barisal' and date is not null group by Division, date order by Date";

        $cumulativeSql_khulna = " select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Khulna' and date is not null group by Division, date order by Date";

        $cumulativeSql_rajshahi = " select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Rajshahi' and date is not null group by Division, date order by Date";

        $cumulativeSql_rangpur = " select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Rangpur' and date is not null group by Division, date order by Date";

        $cumulativeSql_syl = " select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Sylhet' and date is not null group by Division, date order by Date";

        $cumulativeSql_mym = " select Division, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
        where Division='Mymensingh' and date is not null group by Division, date order by Date";

        $cumulativeData = \Illuminate\Support\Facades\DB::select($cumulativeSql);
        $cumulativeSql_dhk = \Illuminate\Support\Facades\DB::select($cumulativeSql_dhk);
        $cumulativeSql_ctg = \Illuminate\Support\Facades\DB::select($cumulativeSql_ctg);
        $cumulativeSql_barisal = \Illuminate\Support\Facades\DB::select($cumulativeSql_barisal);
        $cumulativeSql_khulna = \Illuminate\Support\Facades\DB::select($cumulativeSql_khulna);
        $cumulativeSql_rajshahi = \Illuminate\Support\Facades\DB::select($cumulativeSql_rajshahi);
        $cumulativeSql_rangpur = \Illuminate\Support\Facades\DB::select($cumulativeSql_rangpur);
        $cumulativeSql_syl = \Illuminate\Support\Facades\DB::select($cumulativeSql_syl);
        $cumulativeSql_mym = \Illuminate\Support\Facades\DB::select($cumulativeSql_mym);
            $j=0;
            $dateData = [];
            $divisionData = [];
            $cumulativeData_2['Dhaka'] = array_map('intval',array_column($cumulativeSql_dhk,'cumulative_infected_person'));
            $cumulativeData_2['Chittagong'] = array_map('intval',array_column($cumulativeSql_ctg,'cumulative_infected_person'));
            $cumulativeData_2['Barisal'] = array_map('intval',array_column($cumulativeSql_barisal,'cumulative_infected_person'));
            $cumulativeData_2['Khulna'] = array_map('intval',array_column($cumulativeSql_khulna,'cumulative_infected_person'));
            $cumulativeData_2['Rajshahi'] = array_map('intval',array_column($cumulativeSql_rajshahi,'cumulative_infected_person'));
            $cumulativeData_2['Rangpur'] = array_map('intval',array_column($cumulativeSql_rangpur,'cumulative_infected_person'));
            $cumulativeData_2['Sylhet'] = array_map('intval',array_column($cumulativeSql_syl,'cumulative_infected_person'));
            $cumulativeData_2['Mymensingh'] = array_map('intval',array_column($cumulativeSql_mym,'cumulative_infected_person'));
             // + $cumulativeSql_ctg + $cumulativeSql_barisal + $cumulativeSql_khulna + $cumulativeSql_rajshahi + $cumulativeSql_rangpur + $cumulativeSql_syl + $cumulativeSql_mym ;
            foreach ($cumulativeData as $key => $div) {
                $div_date = date('d/m/Y', strtotime($div->date));

                if(!in_array($div_date, $dateData)){
                    $dateData[] = $div_date;
                }

                $divisionData[$div->Division][] = (int)$div->cumulative_infected_person ?? 0;

                $j++;
            }
            $data['categories'] = $dateData;
            $data['division_data'] = $cumulativeData_2;
            //dd($data);
            return $data;

    }

    public function cumulativeInfectedPerson($request) {
        try {
            $data['categories'] = [];
            $data['division_data'] = [];
            $searchQuery = '';


            if($request->has('division') && is_array($request->division) && count($request->division)) {
                $divisionReqData = "'" . implode ( "', '", $request->division ) . "'";
                $searchQuery = " AND  Division IN (". $divisionReqData.")";
            }

            if($searchQuery != '') {
                $cumulativeSql = "SELECT t.date,t.Division,
       @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
FROM
(SELECT
  Date, Division, sum(Infected_Person) as 'Infected_Person'
  FROM div_dist_upz_infected_trend where Date is not null  ".$searchQuery."
  GROUP BY Date, Division ) as t
JOIN (SELECT @running_total:=0) r
ORDER BY t.date";

            } else {

             return false;

            }

            Log::info("cumulation sql: ". $cumulativeSql);


            $cumulativeData = \Illuminate\Support\Facades\DB::select($cumulativeSql);
            $j=0;
            $dateData = [];
            $divisionData = [];
            foreach ($cumulativeData as $key => $div) {
                $div_date = date('d/m/Y', strtotime($div->date));

                if(!in_array($div_date, $dateData)){
                    $dateData[] = $div_date;
                }

                $divisionData[$div->Division][] = (int)$div->cumulative_infected_person ?? 0;

                $j++;
            }
            $data['categories'] = $dateData;
            $data['division_data'] = $divisionData;
        } catch (\Exception $exception) {
            dd($exception);
            Log::error("cumulativeInfectedPerson error : ". $exception->getMessage());
        }

        //dd($data);
        return $data;
    }

    public function getCumulativeInfectedData(Request $request) {
        $result['status'] = 'failed';
        $seriesData=array();
        try{
            $is_division=false;

           // $cumulativeInfectedPerson = $this->cumulativeInfectedPerson($request);
            $cumulativeInfectedPerson = $this->cumulativeInfectedPerson_nation($request);
            $cumulativeDisUpaZillaData = $this->cumulativeDivDistData($request);
            $formattedData = [];
            $i = 0;
            if($request->has('district') && count($request['district'])){
                $formattedData = $cumulativeDisUpaZillaData['districtData'];
            } elseif($request->has('upazilla') && count($request['upazilla'])){
                $formattedData = $cumulativeDisUpaZillaData['upazillaData'];
            }else {
                $is_division=true;
                $formattedData = $cumulativeInfectedPerson['division_data'] ?? [];
            }
            if(count($formattedData)) {
                foreach ($formattedData as $key => $dist) {
                    if($is_division==true){
                        if(isset($request['division']) && !in_array($key,$request['division'])){
                            continue;
                        }
                    }
                    //dd($key);
                    if(isset($dist['bn'])){
                        unset($dist['bn']);
                    }

                    $seriesData[$i]['type'] = 'spline';

                    $seriesData[$i]['name'] = $key;
                    $seriesData[$i]['data'] = $dist ?? [];
                    $seriesData[$i]['marker']['enabled'] = false;
                    $seriesData[$i]['marker']['symbol'] = 'circle';
                    // $seriesData[$i]['dashStyle'] = "shortdot";
                    $i++;
                }


            }
            $result['district_data'] = $cumulativeDisUpaZillaData['districtData'] ?? [];
            $result['upazillaData'] = $cumulativeDisUpaZillaData['upazillaData'] ?? [];
            $result['series_data'] = json_encode($seriesData);
            $result['categories'] = json_encode($cumulativeInfectedPerson['categories']) ?? [];
            $result['status'] = 'success';

        }catch (\Exception $exception) {
            $result['status'] = 'failed';
            \Log::error('getCumulativeInfectedData:'. $exception->getMessage().'---'.$exception->getFile().'---'.$exception->getLine());
        }

        return $result;

    }


    private function cumulativeDivDistData($request) {
        try{
            $searchQuery = "";
            $cumulativeSqlDistrictUpazilaSql = "";
            $upzillaData = [];
            $districtData = [];
            if($request->has('division') && count($request->division)) {
                $divisionReqData = "'" . implode ( "', '", $request->division ) . "'";
                $searchQuery = " AND  Division IN (". $divisionReqData.")";

                $cumulativeSqlDistrictUpazilaSql = " select Division, District, Upazila, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
                where date is not null ".$searchQuery." group by Division, date order by Date ";
            }
            if($request->has('district') && count($request->district)) {
                $districtReqData = "'" . implode ( "', '", $request->district ) . "'";
                $searchQuery = " AND  District IN (". $districtReqData.")";

                $cumulativeSqlDistrictUpazilaSql = " select Division, District, Upazila, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend 
                where date is not null  ".$searchQuery."  group by District, date order by date ";
            }

            if($request->has('upazilla') && count($request->upazilla)) {
                $districtReqData = "'" . implode ( "', '", $request->upazilla ) . "'";
                $searchQuery = " AND  Upazila IN (". $districtReqData.")";

                $cumulativeSqlDistrictUpazilaSql = " select Division, District, Upazila, date, infected_person AS cumulative_infected_person from div_dist_upz_infected_trend 
                where date is not null  ".$searchQuery."  order by date ";
            }

            // $cumulativeSqlDistrictUpazilaSql = "SELECT t.date,t.Division, t.District,t.Upazila,
            //     @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
            // FROM
            // (SELECT
            //   Date, Division, District, Upazila, sum(Infected_Person) as 'Infected_Person'
            //   FROM div_dist_upz_infected_trend where Date is not null  ".$searchQuery."
            //   GROUP BY Date, Upazila ) as t
            // JOIN (SELECT @running_total:=0) r
            // ORDER BY t.date";


            $cumulativeDisUpaZillaData = \Illuminate\Support\Facades\DB::select($cumulativeSqlDistrictUpazilaSql);
            $j=0;
            $dateData = [];
            $districtData = [];
            foreach ($cumulativeDisUpaZillaData as $key => $div) {
                $div_date = date('d/m/Y', strtotime($div->date));

                if(!in_array($div_date, $dateData)){
                    $dateData[] = $div_date;
                }

                $districtData[$div->District][] = (int)$div->cumulative_infected_person ?? 0;
                $districtData[$div->District]['bn'] = en2bnTranslation($div->District);
                $j++;
            }
            foreach ($cumulativeDisUpaZillaData as $key => $div) {
                $upzillaDate = date('d/m/Y', strtotime($div->date));

                if(!in_array($upzillaDate, $dateData)){
                    $dateData[] = $upzillaDate;
                }

                $upzillaData[$div->Upazila][] = (int)$div->cumulative_infected_person ?? 0;
                $upzillaData[$div->Upazila]['bn'] = en2bnTranslation($div->Upazila);
                $j++;
            }
            $data['categories'] = $dateData;
            $data['districtData'] = $districtData;
            $data['upazillaData'] = $upzillaData;

        }catch (\Exception $exception) {
            Log::error("cumulativeDivDistData error : ". $exception->getMessage());
        }
        return $data;

    }


      private function city_wise_hospital($city)
      {
        $city_wise_hospital = DB::select("SELECT COUNT(hospitalName) AS 'tot_Hospital',
        SUM(alocatedGeneralBed) AS 'General_Beds',
        SUM(alocatedICUBed) AS 'ICU_Beds',
        SUM(AdmittedGeneralBed) AS 'Admitted_General_Beds',
        SUM(AdmittedICUBed) AS 'Admitted_ICU_Beds',
        ((SUM(AdmittedGeneralBed)*100)/(SUM(alocatedGeneralBed))) AS 'percent_General_Beds_Occupied',
        ((SUM(AdmittedICUBed)*100)/(SUM(alocatedICUBed))) AS 'percent_ICU_Beds_Occupied' FROM hospitaltemporarydata WHERE city='".$city."'");

        return $city_wise_hospital[0];
      }

      private function city_wise_hospital_details($city)
      {
        $city_wise_hospital_details = DB::select("SELECT * FROM hospitaltemporarydata WHERE city='".$city."'");

        return $city_wise_hospital_details;
      }

      private function risk_matrix_1(){
        $risk_matrix = DB::select("select count(district) AS val from
            (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity>=15) a
            inner join 
            (select district from past15_avg_test_positivity where past15_avg_test_positivity<5) b using(district) ");

        return $risk_matrix[0];
      }

      private function risk_matrix_2(){
        $risk_matrix = DB::select("select count(district) AS val from
        (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity>=5 
        and recrent15_avg_test_positivity<15) a
        inner join 
        (select district from past15_avg_test_positivity where past15_avg_test_positivity<5) b using(district) ");

        return $risk_matrix[0];
      }

      private function risk_matrix_3(){
        $risk_matrix = DB::select("select count(district) AS val from
        (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity<5) a
        inner join 
        (select district from past15_avg_test_positivity where past15_avg_test_positivity<5) b using(district)");

        return $risk_matrix[0];
      }

      private function risk_matrix_4(){
        $risk_matrix = DB::select("select count(district) AS val from
        (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity>=15) a
        inner join 
        (select district from past15_avg_test_positivity where past15_avg_test_positivity>=5 and 
        past15_avg_test_positivity< 15) b using(district)");

        return $risk_matrix[0];
      }

      private function risk_matrix_5(){
        $risk_matrix = DB::select("select count(district) AS val from
        (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity>=5
        and recrent15_avg_test_positivity < 15) a
        inner join 
        (select district from past15_avg_test_positivity where past15_avg_test_positivity>=5 and 
        past15_avg_test_positivity < 15) b using(district)");

        return $risk_matrix[0];
      }

      private function risk_matrix_6(){
        $risk_matrix = DB::select("select count(district) AS val from
        (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity<5) a
        inner join 
        (select district from past15_avg_test_positivity where past15_avg_test_positivity>=5 and 
        past15_avg_test_positivity < 15) b using(district)");

        return $risk_matrix[0];
      }

       private function risk_matrix_7(){
        $risk_matrix = DB::select("select count(district) AS val from
        (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity>=15) a
        inner join 
        (select district from past15_avg_test_positivity where past15_avg_test_positivity>=15) b using(district)");

        return $risk_matrix[0];
      }

      private function risk_matrix_8(){
        $risk_matrix = DB::select("select count(district) AS val from
        (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity>=5
        and recrent15_avg_test_positivity<15) a
        inner join 
        (select district from past15_avg_test_positivity where past15_avg_test_positivity>=15) b using(district)");

        return $risk_matrix[0];
      }



      private function risk_matrix_9(){
        $risk_matrix = DB::select("select count(district) AS val from
        (select district from recrent15_avg_test_positivity where recrent15_avg_test_positivity<5) a
        inner join 
        (select district from past15_avg_test_positivity where past15_avg_test_positivity>=15) b using(district)");

        return $risk_matrix[0];
      }

    private function getLast14DaysData($request) {
        try{
            $getLast14DaysDeathData = [];
            $getLast14DaysTestData= [];
            $getLast14DaysinfectedData = [];
            $searchQuery = '';
            if($request->has('division') && $request->division != '') {
                $division = $request->division ?? '';
                $searchQuery = " AND  Division = '". $division."'";
            }
            if($request->has('district') && $request->district != '') {
                $district = $request->district ?? '';
                $searchQuery .= " AND  District = '". $district."'";
            }

            if($request->has('upazila') && $request->upazila != '') {
                $upazilla = $request->upazila ?? '';

                $searchQuery .= " AND  Upazila = '". $upazilla."'";
            }

            if($searchQuery != '') {
                /*infected_datasql*/
                $getLast14DaysDataSql = "select @div_curr_fourtten_days_infected_person:=(select sum(Infected_Person)
from div_dist_upz_infected_trend where
date<=(select max(date) from Div_Dist_Upz_Infected_Trend)
and date>DATE_SUB((select max(date) from Div_Dist_Upz_Infected_Trend), INTERVAL 14 DAY) ".$searchQuery.")";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @div_last_fourtten_days_infected_person:=(select sum(Infected_Person) from div_dist_upz_infected_trend where
date<=DATE_SUB((select max(date) from Div_Dist_Upz_Infected_Trend), INTERVAL 14 DAY)
and date>DATE_SUB(DATE_SUB((select max(date) from Div_Dist_Upz_Infected_Trend), INTERVAL 14 DAY), INTERVAL 14 DAY)  ".$searchQuery.")";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @div_curr_fourtten_days_infected_person as 'curr_fourtten_days_infected_person', @div_last_fourtten_days_infected_person as  'last_fourtten_days_infected_person',
(@div_curr_fourtten_days_infected_person-@div_last_fourtten_days_infected_person) as 'Difference'";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);

                /*test_data_sql*/
                $getLast14DaysDataSql = "select @div_curr_fourtten_days_test:=(select sum(NumberOfTest) from Div_Dist_Upz_Test_Number where
date<=(select max(date) from Div_Dist_Upz_Test_Number) and
date>DATE_SUB((select max(date) from Div_Dist_Upz_Test_Number), INTERVAL 14 DAY) ".$searchQuery.")";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql ="select @div_last_fourtten_days_test:=(select sum(NumberOfTest) from Div_Dist_Upz_Test_Number where
date<=DATE_SUB((select max(date) from Div_Dist_Upz_Test_Number), INTERVAL 14 DAY) and
date>DATE_SUB(DATE_SUB((select max(date) from Div_Dist_Upz_Test_Number), INTERVAL 14 DAY), INTERVAL 14 DAY)".$searchQuery.")";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @div_curr_fourtten_days_test as 'curr_fourtten_days_test', @div_last_fourtten_days_test as 'last_fourtten_days_infected_test',
(@div_curr_fourtten_days_test - @div_last_fourtten_days_test) as 'Difference'";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);

            } else {
                /*infected_datasql*/
                $getLast14DaysDataSql = "SELECT @nat_curr_fourtten_days_infected_person:=(SELECT COUNT(id) FROM infected_person
WHERE case_notification_date<=(SELECT MAX(case_notification_date) FROM infected_person)
AND case_notification_date>DATE_SUB((SELECT MAX(case_notification_date)
FROM infected_person), INTERVAL 14 DAY)) AS last_14_day_infect";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_last_fourtten_days_infected_person:=(select count(id) from infected_person
where case_notification_date<=DATE_SUB((select max(case_notification_date) from infected_person), INTERVAL 14 DAY)
and case_notification_date>DATE_SUB(DATE_SUB((select max(case_notification_date)
from infected_person), INTERVAL 14 DAY), INTERVAL 14 DAY))";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_infected_person as 'curr_fourtten_days_infected_person',
@nat_last_fourtten_days_infected_person as  'last_fourtten_days_infected_person',
(@nat_curr_fourtten_days_infected_person-@nat_last_fourtten_days_infected_person) as 'Difference'";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);

                /*testData sql*/
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_test:=(select count(sl_no)
from lab_clean_data where date_of_test<=(select max(date_of_test)
from lab_clean_data) and date_of_test>DATE_SUB((select max(date_of_test)
from lab_clean_data), INTERVAL 14 DAY))";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql ="select @nat_last_fourtten_days_test:=(select count(sl_no) from lab_clean_data where
date_of_test<=DATE_SUB((select max(date_of_test) from lab_clean_data), INTERVAL 14 DAY) and
date_of_test>DATE_SUB(DATE_SUB((select max(date_of_test) from lab_clean_data), INTERVAL 14 DAY), INTERVAL 14 DAY))";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_test as 'curr_fourtten_days_test', @nat_last_fourtten_days_test as 'last_fourtten_days__test',
(@nat_curr_fourtten_days_test-@nat_last_fourtten_days_test) as 'Difference'";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);

                /*death data*/
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_death:=(select sum(no_of_death) from death_number where date<=(select max(date)
from death_number) and date>DATE_SUB((select max(date) from death_number), INTERVAL 14 DAY))";
                $getLast14DaysDeathData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql ="select @nat_last_fourtten_days_infected_death:=(select sum(no_of_death) from death_number where
date<=DATE_SUB((select max(date) from death_number), INTERVAL 14 DAY) and
date>DATE_SUB(DATE_SUB((select max(date) from death_number), INTERVAL 14 DAY), INTERVAL 14 DAY))";
                $getLast14DaysDeathData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_death as 'curr_fourtten_days_death', @nat_last_fourtten_days_infected_death as 'last_fourtten_days_infected_death',
round((@nat_curr_fourtten_days_death-@nat_last_fourtten_days_infected_death),2) as 'Difference'";
                $getLast14DaysDeathData = DB::select($getLast14DaysDataSql);

            }


        }catch (\Exception $exception) {
            Log::error('Get last 14 days data '. json_encode($request->all()));
        }

        $data['getLast14DaysDeathData'] = $getLast14DaysDeathData;
        $data['getLast14DaysTestData'] = $getLast14DaysTestData;
        $data['getLast14DaysinfectedData'] = $getLast14DaysinfectedData;
        return $data;
    }

    private function nation_wise_14_days_infected(){
        $nation_wise_14_days_infected = DB::select(" select * from (
            SELECT
               a.test_date,
               a.infected,
               Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                        FROM daily_infected_natn AS b
                        WHERE DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 6
                      ), 2 ) AS 'seven_dayMovingAvg'
            FROM daily_infected_natn AS a 
            ORDER BY a.test_date desc limit 14) T order by test_date ");

        return $nation_wise_14_days_infected;
    }

    private function nation_wise_14_days_death(){
        $nation_wise_14_days_death = DB::select(" select * from (
        SELECT
               a.date,
               a.no_of_death,
               Round( ( SELECT SUM(b.no_of_death) / COUNT(b.no_of_death)
                        FROM death_number AS b
                        WHERE DATEDIFF(a.date, b.date) BETWEEN 0 AND 6
                      ), 2 ) AS 'seven_dayMovingAvg'
             FROM death_number AS a 
             ORDER BY a.date desc limit 14) T order by date ");

        return $nation_wise_14_days_death;
    }

    private function nation_wise_14_days_test_positivity(){
        $nation_wise_14_days_test_positivity = DB::select(" SELECT * FROM (
        SELECT
               a.date,
               a.test_positivity,
               ROUND( ( SELECT SUM(b.test_positivity) / COUNT(b.test_positivity)
                        FROM daily_test_positivity_natn AS b  
                        WHERE DATEDIFF(a.date, b.date) BETWEEN 0 AND 6 
                      ), 2 ) AS 'seven_dayMovingAvg'
             FROM daily_test_positivity_natn AS a
             ORDER BY a.date DESC LIMIT 14) T ORDER BY DATE ");

        return $nation_wise_14_days_test_positivity;
    }

    private function tests_per_case_country($country){
        $tests_per_case_country = DB::select("select * from countries_tests_per_case 
        where country = '".$country."' 
        and date = (select max(date) from countries_tests_per_case where country = '".$country."')");


        return $tests_per_case_country[0];
    }

    private function nation_wide_five_dayMovingAvgInfected(){
        $five_dayMovingAvgInfected = DB::select(" SELECT * FROM (
        SELECT
               a.report_date,
               a.infected_24_hrs,
               ROUND( ( SELECT SUM(b.infected_24_hrs) / COUNT(b.infected_24_hrs)
                       FROM daily_data AS b  
            WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 4 
                      ), 2 ) AS 'five_dayMovingAvgInfected'
             FROM daily_data AS a
             ORDER BY a.report_date) T ORDER BY report_date ");


        return $five_dayMovingAvgInfected;
    }

    protected function getNationWiseTestsAndCases($request) {
//dd($request->all());
        $dailyTests = $dailyCases = [];
        if($request->division && $request->district && $request->upazila){
            $dailyTests = DB::select("select * from (
            SELECT a.date, a.division, a.district, a.upazila, a.upz_code, a.no_of_test,
                   Round( ( SELECT SUM(b.no_of_test) / COUNT(b.no_of_test)
                            FROM div_dist_upz_test_number AS b
                            WHERE b.upazila= '".$request->upazila."' and date is not null and DATEDIFF(a.date, b.date) BETWEEN 0 AND 4
                          ), 2 ) AS '5dayMovingAvg'
                 FROM div_dist_upz_test_number AS a WHERE a.upazila= '".$request->upazila."' and date is not null ORDER BY a.date) T order by date");
            dd($dailyTests);
            //Daily cases query
            $dailyCases = DB::select("select * from (
            SELECT
                   a.test_date, a.division, a.district, a.upazila, a.upz_code, a.infected,
                   Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                            FROM daily_infected_upz AS b
                            WHERE b.upazila= '".$request->upazila."' and test_date is not null and DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 4
                          ), 2 ) AS '5dayMovingAvg'
                 FROM daily_infected_upz AS a WHERE a.upazila= '".$request->upazila."' and test_date is not null
                 ORDER BY a.test_date) T order by test_date");

        } elseif($request->division && $request->district) {
            $dailyTests = DB::select("select * from (
            SELECT
                   a.date, a.division, a.district,  a.no_of_test,
                   Round( ( SELECT SUM(b.no_of_test) / COUNT(b.no_of_test)
                            FROM daily_test_number_dist AS b  
                            WHERE b.district = '".$request->district."' and 
                            date is not null and DATEDIFF(a.date, b.date) BETWEEN 0 AND 4
                        ), 2 ) AS '5dayMovingAvgTest'
                 FROM daily_test_number_dist AS a where a.district = '".$request->district."' and date is not null
                  ORDER BY a.date) T order by date");
            //Daily cases query
            $dailyCases = DB::select("select * from (
            SELECT
                   a.test_date, a.district, a.infected,
                   Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                            FROM daily_infected_dist AS b
                            WHERE b.district= '".$request->district."' and DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 4
                          ), 2 ) AS '5dayMovingAvg'
                 FROM daily_infected_dist AS a WHERE a.district= '".$request->district."'
                 ORDER BY a.test_date) T order by test_date");

        } elseif($request->division) {
            $dailyTests = DB::select("select * from (
            SELECT
                   a.date, a.division, a.no_of_test,
                   Round( ( SELECT SUM(b.no_of_test) / COUNT(b.no_of_test)
                            FROM daily_test_number_div AS b  
                            WHERE b.division = '".$request->division."' and 
                            date is not null and DATEDIFF(a.date, b.date) BETWEEN 0 AND 4
                        ), 2 ) AS '5dayMovingAvgTest'
                 FROM daily_test_number_div AS a where a.division = '".$request->division."' and date is not null
                 and date >= '2020-03-08'
                  ORDER BY a.date) T order by date");
            //Daily cases query
            $dailyCases = DB::select("select * from (
            SELECT
                   a.test_date, a.division, a.infected,
                   Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                            FROM daily_infected_div AS b
                            WHERE b.division= '".$request->division."' and DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 4
                          ), 2 ) AS '5dayMovingAvg'
                 FROM daily_infected_div AS a WHERE a.division= '".$request->division."'
                 and a.test_date >= '2020-03-08'
                 ORDER BY a.test_date) T order by test_date");
        } else {
            $dailyTests = DB::select("select * from (
            SELECT
                   a.report_date,
                   a.test_24_hrs,
                   Round( ( SELECT SUM(b.test_24_hrs) / COUNT(b.test_24_hrs)
                           FROM daily_data AS b
                WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 4
                          ), 2 ) AS 'fiveDayMovingAvgTest'
                 FROM daily_data AS a
                 ORDER BY a.report_date) T order by report_date");
            //Daily cases query
            $dailyCases = DB::select("select * from (
                SELECT
                       a.report_date,
                       a.infected_24_hrs,
                       Round( ( SELECT SUM(b.infected_24_hrs) / COUNT(b.infected_24_hrs)
                               FROM daily_data AS b
                    WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 4
                              ), 2 ) AS 'fiveDayMovingAvgInfected'
                     FROM daily_data AS a
                     ORDER BY a.report_date) T order by report_date");
        }

        foreach ($dailyTests as $dailyTest) {
            $dateRange[] =  "'" .Carbon::parse($dailyTest->report_date)->format('d-M-Y'). "'" ;
            $totalTest[] = $dailyTest->fiveDayMovingAvgTest;
        }

        foreach ($dailyCases as $dailyCase) {
            $totalCase[] = $dailyCase->fiveDayMovingAvgInfected;
        }

        $dateRange  = implode(",", $dateRange);
        $totalTest  = implode(",", $totalTest);
        $totalCase  = implode(",", $totalCase);

        return [
            'totalTest' => $totalTest,
            'totalCase' => $totalCase,
            'dateRange' => $dateRange
        ];
    }

}
