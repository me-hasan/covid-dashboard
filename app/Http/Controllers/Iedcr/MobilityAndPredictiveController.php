<?php

namespace App\Http\Controllers\Iedcr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobilityAndPredictiveController extends Controller
{
    //
    public function index(Request  $request) {
        $mobilityData = $this->getMobilityAndPredictiveControllerData($request);
        $categories = [];
        if(count($mobilityData)) {
            foreach ($mobilityData as $mobilityDatum) {
                $categories[] = $mobilityDatum->date ?? '';
            }
        }

        $seriesData = [];

        $i = 0;
        if(count($mobilityData)) {
            $seriesData[$i]['type'] = 'spline';

            $seriesData[$i]['name'] = $mobilityData[0]->division;

            $seriesData[$i]['marker']['enabled'] = false;
            $seriesData[$i]['marker']['symbol'] = 'circle';
            $seriesData[$i]['dashStyle'] = "shortdot";
            foreach ($mobilityData as $key => $dist) {
                $seriesData[$i]['data'][] = (int)$dist->predicted_importation;
            }
        }
        $data['series_data'] = $seriesData;
        $data['categories'] = $categories;

        return view('iedcr.mobility-and-predictive-importation',$data);
    }
    public function getMobilityAndPredictiveControllerData($request) {
        $searchQuery = '';

        if($request->has('division') && $request->division != ''){
            $groupBy = 'division';
            $division = $request->division;
            $searchQuery = "where B.division = '". $division."'";
        }

        if($searchQuery != '') {

            $mobilityPredictivesqlQuery = "select date_format(str_to_date(A.day, '%m/%d/%Y'), '%Y-%m-%d') as 'date', B.division, sum(A.predicted_importation)
as 'predicted_importation'
from v_mobility_predicted_importations as A inner join bbs_coded_upazila_dist_div as B on A.upazila_code=B.upz_code  ".$searchQuery."
group by B.division, A.day";
        } else {
            $mobilityPredictivesqlQuery = "select date_format(str_to_date(A.day, '%m/%d/%Y'), '%Y-%m-%d') as 'date', B.division, sum(A.predicted_importation)
as 'predicted_importation'
from v_mobility_predicted_importations as A inner join bbs_coded_upazila_dist_div as B on A.upazila_code=B.upz_code where B.division = 'Chittagong'
group by B.division, A.day";
        }



        $mobilityPredictivesqlQueryData = \Illuminate\Support\Facades\DB::select($mobilityPredictivesqlQuery);
        return $mobilityPredictivesqlQueryData;
    }

    public function nationalInfectedCaseData(Request $request) {
        $result['status'] = 'failed';
        try{

            $ininfectedPopulation = $this->divDistUpaInfectedPopulation($request);
            $infectedAge = $this->upazillaLevelInfectedAge($request);
            $infectedGender = $this->upazillaLevelInfectedGender($request);
            $ininfectedTrend = $this->divDislInfectedTrend($request);

            $_genderWiseInfectData = array();

            $_genderWiseInfectData[] = isset($infectedGender->M) ? (float)$infectedGender->M : 0;
            $_genderWiseInfectData[] = isset($infectedGender->F) ? (float)$infectedGender->F : 0;
            $_ageWiseInfectData = array();

            $_ageWiseInfectData[] = isset($infectedAge->_0_10) ? (float)$infectedAge->_0_10 : 0;
            $_ageWiseInfectData[] = isset($infectedAge->_11_20) ? (float)$infectedAge->_11_20 : 0;
            $_ageWiseInfectData[] = isset($infectedAge->_21_30) ? (float)$infectedAge->_21_30 : 0;
            $_ageWiseInfectData[] = isset($infectedAge->_31_40) ? (float)$infectedAge->_31_40 : 0;
            $_ageWiseInfectData[] = isset($infectedAge->_41_50) ? (float)$infectedAge->_41_50 : 0;
            $_ageWiseInfectData[] = isset($infectedAge->_51_60) ? (float)$infectedAge->_51_60 : 0;
            $_ageWiseInfectData[] = isset($infectedAge->_60_Plus) ? (float)$infectedAge->_60_Plus : 0;
            $date_arr = $infected_arr =  array();

            if($ininfectedTrend && $ininfectedTrend != '' && count($ininfectedTrend)) {
                foreach($ininfectedTrend as $row){

                    $date_arr[] = date('d\/m\/Y', strtotime($row->Date));
                    $infected_arr[] = (double)$row->infected_count;
                }
            }

            $div_name = $div_data = array();

            if($ininfectedPopulation != "" && count($ininfectedPopulation)) {

                foreach($ininfectedPopulation as $row){

                    $div_name[] = $row->zone; //  need to be dynamic
                    $div_data[] = (float)(number_format($row->Cases_Per_Lac, 2));

                }
            }

            $infected = implode(",", $infected_arr);

            /*dd(json_encode($_ageWiseInfectData));*/
            $result['infectedTrend_data'] = $infected_arr;
            $result['ininfectedTrend_date'] = $date_arr;
            $result['infectedTrend_string'] = $infected;
            $result['gender_wise_infected_data'] = $_genderWiseInfectData;
            $result['age_wise_infected_data'] = $_ageWiseInfectData;
            $result['age_wise_infected_data'] = $_ageWiseInfectData;
            $result['div_name'] = $div_name;
            $result['div_data'] = $div_data;
            $result['status'] = 'success';

        }catch (\Exception $exception) {
            $result['status'] = 'failed';
            \Log::error('National Infected Case Data:'. $exception->getMessage().'---'.$exception->getFile().'---'.$exception->getLine());
        }

        return $result;

    }

    private function getDivisonWiseData($request) {
        $dateData = $districtInfo = [];

        /*$divisionData = DB::select("select B.date, A.division, avg(ContactedDistance) as 'avg_distance_meter', avg(Duration)/60 as 'avg_duration_minute' from
        (select * from coronatracerbd_appuser_location group by  AppUserID) as A
        inner join
        (select * from information_contacts group by  AppUserID) as B using(AppUserID) where A.division='".$division."' group by B.date, A.division");

        $divisionObj['division'] = $divisionData[0]->division ?? null;
        $divisionObj['avg_duration'] = isset($divisionData[0]->avg_duration_minute) ? number_format($divisionData[0]->avg_duration_minute, 2, '.', ''):null;
        $div_date = isset($divisionData[0]->date) ? date('d/m/Y', strtotime($divisionData[0]->date)) : null;
        if(!in_array($div_date, $dateData, true)){
            array_push($dateData, $div_date);
        }*/



        $mobilityData = $this->getMobilityAndPredictiveControllerData($request);

        // dd($districtData);

        $newDistrictArr = [];

        foreach($mobilityData as $key => $item)
        {
            $newDistrictArr[$item->district][$key] = $item;
        }

        $i=0;
        foreach ($newDistrictArr as $key => $distGroup) {
            $districtInfo[$i]['district'] = $key;

            $j=0;
            foreach ($distGroup as $key => $dist) {
                $dist_date = date('d/m/Y', strtotime($dist->date));
                if(!in_array($dist_date, $dateData, true)){
                    array_push($dateData, $dist_date);
                }
                $getAvgDuration = number_format($dist->avg_duration_minute, 2, '.', '');
                $districtInfo[$i]['avg_duration'][$j] = (float) $getAvgDuration;
                $j++;
            }

            $i++;
        }


        $data['dateData'] = $dateData;
        //$data['divisionData'] = $divisionObj;
        $data['districtData'] = $districtInfo;

        return $data ?? [];
    }
}
