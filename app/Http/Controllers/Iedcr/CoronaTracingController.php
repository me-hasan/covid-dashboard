<?php

namespace App\Http\Controllers\Iedcr;

use DB;
use App\Http\Controllers\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CoronaTracingController extends Controller
{
    public function corona_tracing_analysis(Request $request) {
        $division = $request->division ?? 'DHAKA';
        $getTracingData = $this->getDivisonWiseData($division);

        // dd($getTracingData);

        $data = [];
        $data[0]['type'] = 'spline';
        $data[0]['name'] = $getTracingData['divisionData']['division'];
        $data[0]['data'] = $getTracingData['divisionData']['avg_duration'];
        $data[0]['marker']['enabled'] = false;
        $data[0]['marker']['symbol'] = 'circle';
        $i=1;
        foreach ($getTracingData['districtData'] as $key => $dist) {
            $data[$i]['type'] = 'spline';
            $data[$i]['name'] = $dist['district'];
            $data[$i]['data'] = $dist['avg_duration'];
            $data[$i]['marker']['enabled'] = false;
            $data[$i]['marker']['symbol'] = 'circle';
            $data[$i]['dashStyle'] = "shortdot";
            $i++;
        }

        return view('iedcr.corona-tracing-analysis',compact('getTracingData','data'));
    }

    private function getDivisonWiseData($division) {
        $dateData = $districtInfo = $divAvgInfo = [];

        $divisionData = DB::select("select B.date, A.division, avg(ContactedDistance) as 'avg_distance_meter', avg(Duration)/60 as 'avg_duration_minute' from 
        (select * from coronatracerbd_appuser_location group by  AppUserID) as A
        inner join 
        (select * from information_contacts group by  AppUserID) as B using(AppUserID) where A.division='".$division."' group by B.date, A.division order by B.date");


        // dd($divisionData);

        $divisionObj['division'] = $divisionData[0]->division ?? null;

        $j=0;
        foreach ($divisionData as $key => $div) {
            $div_date = date('d/m/Y', strtotime($div->date));
            if(!in_array($div_date, $dateData, true)){
                array_push($dateData, $div_date);
            }
            $getAvgDuration = number_format($div->avg_duration_minute, 2, '.', '');
            $divAvgInfo[$j] = (float) $getAvgDuration;
            $j++;
        }

        $divisionObj['avg_duration'] = $divAvgInfo;

        // dd($divisionObj);


        $div_date = isset($divisionData[0]->date) ? date('d/m/Y', strtotime($divisionData[0]->date)) : null;
        if(!in_array($div_date, $dateData, true)){
            array_push($dateData, $div_date);
        }

        Log::debug('get division corona tracing data: ' . json_encode($divisionData));

        // dd($divisionData);

        $districtData = DB::select("select B.date, A.division, A.district, avg(ContactedDistance) as 'avg_distance_meter', avg(Duration)/60 as 'avg_duration_minute' from 
            (select * from coronatracerbd_appuser_location group by  AppUserID) as A
            inner join 
            (select * from information_contacts group by  AppUserID) as B using(AppUserID) where A.division='".$division."' group by B.date, A.district order by B.date");

        // dd($districtData);

        Log::debug('get district corona tracing data: ' . json_encode($districtData));

        $newDistrictArr = [];

        foreach($districtData as $key => $item)
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
        $data['divisionData'] = $divisionObj;
        $data['districtData'] = $districtInfo;

        return $data ?? [];
    }
}
