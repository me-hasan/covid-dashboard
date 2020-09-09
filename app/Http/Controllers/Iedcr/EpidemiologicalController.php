<?php

namespace App\Http\Controllers\Iedcr;

use DB;
use App\Http\Controllers\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;

class EpidemiologicalController extends Controller
{
    
    public function epidemiological_syndromic_indicator_analysis(Request $request) {
        if($request->division || $request->district || $request->upazila){
            //$zone_information  = $this->divisionWiseTestPositiveRate($request);
        }else{
            $zone_information  = $this->nationWise_zone_info($request);
        }
        
        return view('iedcr.epidemiological-syndromic-indicator-analysis',compact('zone_information'));
    }

    private function nationWise_zone_info($request) {
        $nationWise_zone_info = DB::select("
            SELECT TABLE2.division, TABLE2.district,TABLE1.bbs_code, TABLE2.upazila, TABLE1.cases, TABLE1.test_positivity, TABLE1.mobility_in, TABLE1.mobility_out FROM
                (SELECT A.bbs_code AS 'bbs_code', A.cases  AS 'cases', B.test_positivity AS 'test_positivity', C.mobility_in AS 'mobility_in',
                C.mobility_out AS 'mobility_out' FROM

                (SELECT last_thana_code AS 'bbs_code', COUNT(id) AS 'cases' FROM infected_person GROUP BY last_thana_code) AS A
                INNER JOIN 

                (SELECT T2.bbs_code AS 'bbs_code', T1.pos AS 'positive', (T1.pos/T2.total)*100 AS 'test_positivity'
                FROM
                (SELECT bbs_code, COUNT(id) AS 'pos'
                FROM lab_clean_data
                WHERE test_result='Positive' GROUP BY bbs_code) AS T1
                INNER JOIN
                (SELECT bbs_code, COUNT(id) AS 'total'
                FROM lab_clean_data
                WHERE test_result='Negative' OR test_result='Positive' GROUP BY bbs_code) AS T2 USING(bbs_code)) AS B
                INNER JOIN
                (SELECT Upazila_Code, SUM(mobility_in)  AS 'mobility_in',
                SUM(mobility_out) AS 'mobility_out' 
                FROM v_mobility_in_out GROUP BY upazila_code) AS C ON A.bbs_code=B.bbs_code AND B.bbs_code=C.upazila_code) AS TABLE1
                INNER JOIN bbs_coded_upazila_dist_div AS TABLE2 ON TABLE1.bbs_code=TABLE2.upz_code
        ");

        return $nationWise_zone_info ?? [];
    }

    private function getLocationWiseTestPositivity($request) {
        $getDateCondition = $this->getDateCondition($request,'date');
        $str_dis= $request->district;
        $str_upa= $request->upazila;
        if($request->district=="COX'S BAZAR" || $request->district=="cox's bazar"){
         $str_dis= 'cox';
        }
        if($request->upazila=="COX'S BAZAR SADAR" || $request->upazila=="cox's bazar sadar"){
         $str_upa= 'cox';
        }

        if($request->division && $request->district && $request->upazila){
            $locationWiseTestPositive = DB::select("select * from Geo_location_wise_test_positivity where upazila like '%".$str_upa."%' ".$getDateCondition." order by date desc");
        }elseif($request->division && $request->district){
            $locationWiseTestPositive = DB::select("select date,division,district, sum(total_test) as 'total_test',sum(positive) as 'positive' ,
                ((sum(positive)*100)/sum(total_test)) as 'test_positivity' from Geo_location_wise_test_positivity where district like '%".$str_dis."%' ".$getDateCondition." group by district order by date desc");
        }elseif($request->division){
            $locationWiseTestPositive = DB::select("select date,division,district, sum(total_test) as 'total_test',sum(positive) as 'positive', 
                ((sum(positive)*100)/sum(total_test)) as 'test_positivity' from Geo_location_wise_test_positivity where division like '%".$request->division."%' ".$getDateCondition." group by division order by date desc");
        }else{
            $locationWiseTestPositive = DB::select("select date,division,district, sum(total_test) as 'total_test',sum(positive) as 'positive' ,
                ((sum(positive)*100)/sum(total_test)) as 'test_positivity' from Geo_location_wise_test_positivity group by district order by date desc");
        }

        
        // dd($locationWiseTestPositive);

        return $locationWiseTestPositive ?? [];
    }

    private function todayAsymptomicTestPositiveRate($request) {
        // $getDateCondition = $this->getDateCondition($request,'event_date');
        $asymptomicTestPositiveRate = DB::select("select distinct
                                    (select sum(total) from lab_test_data_passport 
                                    where lab_test_result='Positive' and
                                    event_date=(select max(event_date) from lab_test_data_passport))/ 
                                    (select sum(total)
                                    from lab_test_data_passport 
                                    where event_date=(select max(event_date) from lab_test_data_passport))
                                    as Test_Positivity from lab_test_data_passport");

        $asymptomicTestCount = DB::select("select sum(total) as Total
                                from lab_test_data_passport 
                                where event_date=(select max(event_date) from lab_test_data_passport)");

        $data['today_asymp_test_positive_rate'] = $asymptomicTestPositiveRate[0]->Test_Positivity ?? 0;
        $data['today_asymp_number_of_test'] = $asymptomicTestCount[0]->Total ?? 0;

        return $data;
    }


}
