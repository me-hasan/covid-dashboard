<?php

namespace App\Http\Controllers\Iedcr;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Hpm\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ManageIframeController extends Controller
{
    public function doubling_time_growth_rate_analysis() {
        return view('iedcr.doubling-time-growth-rate-analysis');
    }

    public function rt_analysis(Request  $request) {
        $hpmDashBoard = new DashboardController();
        $cumulativeInfectedPerson = $hpmDashBoard->cumulativeInfectedPerson_nation($request);
        $i = 0;
        $divisionlist=[];
        $seriesData = [];
        if(count($cumulativeInfectedPerson['division_data'])) {
            foreach ($cumulativeInfectedPerson['division_data'] as $key => $dist) {
                $seriesData[$i]['type'] = 'spline';
                $seriesData[$i]['name'] = en2bnTranslation($key);
                $seriesData[$i]['data'] = $dist ?? [];
                $seriesData[$i]['marker']['enabled'] = false;
                $seriesData[$i]['marker']['symbol'] = 'circle';
                $divisionlist[] = $key;
                // $seriesData[$i]['dashStyle'] = "shortdot";
                $i++;
            }


        }
        $data['des_2'] = $this->description_insight_qry('201'); //Daily New Cases by Region / অঞ্চল তুলনা
        $data['series_data'] = json_encode($seriesData);
        $data['categories'] = json_encode($cumulativeInfectedPerson['categories']) ?? [];
        $data['division_list'] = $divisionlist;

        $data['district_list'] = DB::table('div_dist')->get();
        //dd($data);
        return view('iedcr.rt-analysis', $data);
    }

    public function case_distribution_and_forecasting() {
        return view('iedcr.case-distribution-and-forecasting');
    }

    // public function hospital_and_patient_analysis() {
    //     return view('iedcr.hospital-and-patient-analysis-new');
    // }
    public function mobility_and_predictive_importation() {
        return view('iedcr.mobility-and-predictive-importation');
    }
    public function risk_zone_analysis() {
        return view('iedcr.risk-zone-analysis');
    }
    public function syndromic_surveillance() {
        return view('iedcr.syndromic-surveillance');
    }

    private function description_insight_qry($component_code){
        $component=str_replace(" ","_",strtoupper($component_code));
        // $des= cache()->rememberForever('hpm_description_insight.'.$component,  function () use($component_name_eng) {
        //     return DB::select("select * from hpm_description_insight where component_name_eng='".$component_name_eng."' and date=(select max(date) from hpm_description_insight) ");
        // });
        // return $des[0];

        //$des= DB::select("select * from hpm_description_insight where component_name_eng='".$component_name_eng."' and date=(select max(date) from hpm_description_insight) ");
        $des= DB::select("select * from hpm_description_insight where component_id='".$component_code."' ");

        if (isset($des[0])){ return $des[0];}else{return null; }
    }
}
