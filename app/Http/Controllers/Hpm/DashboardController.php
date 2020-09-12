<?php

namespace App\Http\Controllers\Hpm;

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
        $data['testPositivityMap'] = $testPositivityMap;
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
}
