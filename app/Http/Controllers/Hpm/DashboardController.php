<?php

namespace App\Http\Controllers\Hpm;

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
        $cumulativeInfectedPerson = $this->cumulativeInfectedPerson($request);

        $i = 0;
        $divisionlist=[];
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
                          FROM Div_Dist_Upz_Infected_Trend where Date is not null
                          GROUP BY Date, Division ) as t
                        JOIN (SELECT @running_total:=0) r
                        WHERE division= '".$request->division."'
                        ORDER BY t.date");
        }else{
            $cumulativeData = DB::select("SELECT t.date,
                               @running_total:=@running_total + t.infected_person_count AS cumulative_infected_person
                        FROM
                        ( SELECT
                          test_date as 'date',
                          count(id) as 'infected_person_count'
                          FROM infected_person where test_date is not null
                          GROUP BY test_date ) t
                        JOIN (SELECT @running_total:=0) r
                        ORDER BY t.date");
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

    public function cumulativeInfectedPerson($request) {
        try {
            $data['categories'] = [];
            $data['division_data'] = [];
            $searchQuery = '';


            if($request->has('division') && count($request->division)) {
                $divisionReqData = "'" . implode ( "', '", $request->division ) . "'";
                $searchQuery = " AND  Division IN (". $divisionReqData.")";
            }

            if($searchQuery != '') {
                $cumulativeSql = "SELECT t.date,t.Division,
       @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
FROM
(SELECT
  Date, Division, sum(Infected_Person) as 'Infected_Person'
  FROM Div_Dist_Upz_Infected_Trend where Date is not null  ".$searchQuery."
  GROUP BY Date, Division ) as t
JOIN (SELECT @running_total:=0) r
ORDER BY t.date";

            } else {
                $cumulativeSql = "SELECT t.date,t.Division,
       @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
FROM
(SELECT
  Date, Division, sum(Infected_Person) as 'Infected_Person'
  FROM Div_Dist_Upz_Infected_Trend where Date is not null
  GROUP BY Date, Division ) as t
JOIN (SELECT @running_total:=0) r
ORDER BY t.date";

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
            Log::error("cumulativeInfectedPerson error : ". $exception->getMessage());
        }

       // dd($data);
        return $data;
    }

    public function getCumulativeInfectedData(Request $request) {
        $result['status'] = 'failed';
        try{

            $cumulativeInfectedPerson = $this->cumulativeInfectedPerson($request);
            $cumulativeDisUpaZillaData = $this->cumulativeDivDistData($request);
            $formattedData = [];
            $i = 0;
            if($request->has('district') && count($request['district'])){
                $formattedData = $cumulativeDisUpaZillaData['districtData'];
            } elseif($request->has('upazilla') && count($request['upazilla'])){
                $formattedData = $cumulativeDisUpaZillaData['upazillaData'];
            }else {
                $formattedData = $cumulativeInfectedPerson['division_data'] ?? [];
            }
            if(count($formattedData)) {
                foreach ($formattedData as $key => $dist) {
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
            $upzillaData = [];
            $districtData = [];
            if($request->has('division') && count($request->division)) {
                $divisionReqData = "'" . implode ( "', '", $request->division ) . "'";
                $searchQuery = " AND  Division IN (". $divisionReqData.")";
            }
            if($request->has('district') && count($request->district)) {
                $districtReqData = "'" . implode ( "', '", $request->district ) . "'";
                $searchQuery = " AND  District IN (". $districtReqData.")";
            }

            if($request->has('upazilla') && count($request->upazilla)) {
                $districtReqData = "'" . implode ( "', '", $request->upazilla ) . "'";
                $searchQuery = " AND  Upazila IN (". $districtReqData.")";
            }

            $cumulativeSqlDistrictUpazilaSql = "SELECT t.date,t.Division, t.District,t.Upazila,
       @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
FROM
(SELECT
  Date, Division, District, Upazila, sum(Infected_Person) as 'Infected_Person'
  FROM Div_Dist_Upz_Infected_Trend where Date is not null  ".$searchQuery."
  GROUP BY Date, Upazila ) as t
JOIN (SELECT @running_total:=0) r
ORDER BY t.date";
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

}
