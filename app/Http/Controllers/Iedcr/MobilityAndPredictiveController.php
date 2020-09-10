<?php

namespace App\Http\Controllers\Iedcr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobilityAndPredictiveController extends Controller
{
    //
    public function index(Request  $request) {
        $mobilityData = $this->getMobilityAndPredictiveControllerData($request);

        $divisionData = $mobilityData['divisionData'];
        $districtData = $mobilityData['districtData'] ?? '';
        $mobilityMapData = [];
        $districtInfo = [];
        if(count($districtData)) {
            foreach ($districtData as $key=>$districtDatum){
                $districtInfo[$districtDatum->district]['predicted_importation'][] = (int)$districtDatum->predicted_importation;
            }
        }
       $data['districtList'] = $districtInfo;
        $categories = [];
        if(count($divisionData)) {
            foreach ($divisionData as $mobilityDatum) {
                $categories[] = $mobilityDatum->date ?? '';
            }
        }
        $mobilityMapData = $mobilityData['mobilityMapData'] ?? [];

        $seriesData = [];

        $i = 0;
        if(count($divisionData)) {
            $seriesData[$i]['type'] = 'spline';

            $seriesData[$i]['name'] = $divisionData[0]->division;
            foreach ($divisionData as $key => $division) {
                $seriesData[$i]['data'][] = (int)$division->predicted_importation;
            }
            $seriesData[$i]['marker']['enabled'] = false;
            $seriesData[$i]['marker']['symbol'] = 'circle';
            //$seriesData[$i]['dashStyle'] = "shortdot";

        }
        $i = 1;
        if(count($districtData)) {
            foreach ($districtInfo as $key => $dist) {
                if($request->has('district') && $request->district != ''){
                    if($request->district != $key){
                        continue;
                    }
                }

                $seriesData[$i]['type'] = 'spline';

                $seriesData[$i]['name'] = $key;
                $seriesData[$i]['data'] = $dist['predicted_importation'] ?? [];
                $seriesData[$i]['marker']['enabled'] = false;
                $seriesData[$i]['marker']['symbol'] = 'circle';
                $seriesData[$i]['dashStyle'] = "shortdot";

                $i++;
            }


        }
        $data['series_data'] = $seriesData;
        $data['categories'] = $categories;
        $data['mobilityData'] = $mobilityMapData;
       // dd($data);
        return view('iedcr.mobility-and-predictive-importation',$data);
    }
    public function getMobilityAndPredictiveControllerData($request) {
        $searchQuery = '';
        $searchMapQuery= '';

        if($request->has('division') && $request->division != ''){
            $groupBy = 'division';
            $division = $request->division;
            $searchQuery = "where B.division = '". $division."'";
            $searchMapQuery = "where B.division = '". $division."'";
            if($request->has('district') && $request->district != ''){
                $searchMapQuery .= "And B.district='".$request->district."'";
            }
        }

        if($searchQuery != '') {

            $mobilityPredictivesqlQuery = "select date_format(str_to_date(A.day, '%m/%d/%Y'), '%Y-%m-%d') as 'date', B.division, sum(A.predicted_importation)
as 'predicted_importation'
from v_mobility_predicted_importations as A inner join bbs_coded_upazila_dist_div as B on A.upazila_code=B.upz_code  ".$searchQuery."
group by B.division, A.day";
            $mobilityPredictiveDistrictsqlQuery = "select date_format(str_to_date(A.day, '%m/%d/%Y'), '%Y-%m-%d') as 'date', B.division, B.district, sum(A.predicted_importation)
as 'predicted_importation'
from v_mobility_predicted_importations as A inner join bbs_coded_upazila_dist_div as B on A.upazila_code=B.upz_code ".$searchQuery."
group by B.district , A.day";
            $mobilityMapDatasqlQuery = "select date_format(str_to_date(A.day, '%m/%d/%Y'), '%Y-%m-%d') as 'date', B.division, B.district, sum(A.predicted_importation)
as 'predicted_importation'
from v_mobility_predicted_importations as A inner join bbs_coded_upazila_dist_div as B on A.upazila_code=B.upz_code ".$searchMapQuery."
group by B.district";
        } else {
            $mobilityPredictivesqlQuery = "select date_format(str_to_date(A.day, '%m/%d/%Y'), '%Y-%m-%d') as 'date', B.division, sum(A.predicted_importation)
as 'predicted_importation'
from v_mobility_predicted_importations as A inner join bbs_coded_upazila_dist_div as B on A.upazila_code=B.upz_code where B.division = 'Chittagong'
group by B.division, A.day";
            $mobilityPredictiveDistrictsqlQuery = "select date_format(str_to_date(A.day, '%m/%d/%Y'), '%Y-%m-%d') as 'date', B.division, B.district, sum(A.predicted_importation)
as 'predicted_importation'
from v_mobility_predicted_importations as A inner join bbs_coded_upazila_dist_div as B on A.upazila_code=B.upz_code where B.division = 'Dhaka'
group by B.district , A.day";
            $mobilityMapDatasqlQuery = "select date_format(str_to_date(A.day, '%m/%d/%Y'), '%Y-%m-%d') as 'date', B.division, B.district, sum(A.predicted_importation)
as 'predicted_importation'
from v_mobility_predicted_importations as A inner join bbs_coded_upazila_dist_div as B on A.upazila_code=B.upz_code where B.division = 'Dhaka'
group by B.district";
        }



        $mobilityPredictivesqlQueryData['divisionData'] = \Illuminate\Support\Facades\DB::select($mobilityPredictivesqlQuery);
        $mobilityPredictivesqlQueryData['districtData'] = \Illuminate\Support\Facades\DB::select($mobilityPredictiveDistrictsqlQuery);
        $mobilityPredictivesqlQueryData['districtList'] = \Illuminate\Support\Facades\DB::select($mobilityPredictiveDistrictsqlQuery);
        $mobilityPredictivesqlQueryData['mobilityMapData'] = \Illuminate\Support\Facades\DB::select($mobilityMapDatasqlQuery);
        return $mobilityPredictivesqlQueryData;
    }

}
