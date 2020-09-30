<?php

namespace App\Http\Controllers\Iedcr;

use DB;
use App\Http\Controllers\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    
    public function hospital_and_patient_analysis(Request $request) {
        // if($request->division || $request->district || $request->upazila){
            
        // }else{

          $nation_hospital = $this->nation_wide_hospital();
          $dhaka_hospital=$this->city_wise_hospital('Dhaka');
          $ctg_hospital=$this->city_wise_hospital('Chittagong');
          $dhaka_hospital_details=$this->city_wise_hospital_details('Dhaka');
          $ctg_hospital_details=$this->city_wise_hospital_details('Chittagong');

          $diabetic_info  = $this->diabetic_info($request);
          $heart_info  = $this->heart_info($request);
          $lunge_info  = $this->lunge_info($request);
          $kidney_info  = $this->kidney_info($request);
          $hypertension_info  = $this->hypertension_info($request);
        //}
        
        return view('iedcr.hospital-and-patient-analysis-new',compact('nation_hospital','dhaka_hospital','ctg_hospital',
        'dhaka_hospital_details','ctg_hospital_details','diabetic_info','heart_info','lunge_info','kidney_info','hypertension_info'));
    }

    private function nation_wide_hospital()
    {
        $nation_wide_hospital = DB::select(" select count(hospitalName) as '#_Hospital',
            sum(alocatedGeneralBed) as 'General_Beds',
            sum(alocatedICUBed) as 'ICU_Beds',
            SUM(AdmittedGeneralBed) AS 'Admitted_General_Beds',
            SUM(AdmittedICUBed) AS 'Admitted_ICU_Beds',
            ((sum(AdmittedGeneralBed)*100)/(sum(alocatedGeneralBed))) as 'percent_General_Beds_Occupied',
            ((sum(AdmittedICUBed)*100)/(sum(alocatedICUBed))) as 'percent_ICU_Beds_Occupied'
            from hospitaltemporarydata where city='Country' and date = (select max(date) from hospitaltemporarydata) ");

        return $nation_wide_hospital[0];
    }

    private function city_wise_hospital($city)
    {
        $city_wise_hospital = DB::select(" select count(hospitalName) as '#_Hospital',
        sum(alocatedGeneralBed) as 'General_Beds',
        sum(alocatedICUBed) as 'ICU_Beds',
        SUM(AdmittedGeneralBed) AS 'Admitted_General_Beds',
        SUM(AdmittedICUBed) AS 'Admitted_ICU_Beds',
        ((sum(AdmittedGeneralBed)*100)/(sum(alocatedGeneralBed))) as 'percent_General_Beds_Occupied',
        ((sum(AdmittedICUBed)*100)/(sum(alocatedICUBed))) as 'percent_ICU_Beds_Occupied'
        from hospitaltemporarydata where city='".$city."' and date = (select max(date) from hospitaltemporarydata) ");

        return $city_wise_hospital[0];
    }

    private function city_wise_hospital_details($city)
    {
      $city_wise_hospital_details = DB::select("SELECT * FROM hospitaltemporarydata WHERE city='".$city."'");

      return $city_wise_hospital_details;
    }

    private function diabetic_info($request) {
        $diabetic_info = DB::select("
           select distinct
          (SELECT count(any_long_term_illness) FROM patient_assessment 
          where any_long_term_illness like '%ডায়াবেটিস%')*100/(SELECT count(id) FROM patient_assessment) as 'Diabetic_percentage'
          from patient_assessment;
        ");

        return $diabetic_info[0] ?? [];
    }

    private function heart_info($request) {
        $heart_info = DB::select("
          select distinct
          (SELECT count(any_long_term_illness) FROM patient_assessment 
          where any_long_term_illness like '%হার্ট ফেইলর%')*100/(SELECT count(id) FROM patient_assessment) as 'Heart_Failure_percentage'
          from patient_assessment;
        ");

        return $heart_info[0] ?? [];
    }

    private function lunge_info($request) {
        $lunge_info = DB::select("
          select distinct
          (SELECT count(any_long_term_illness) FROM patient_assessment 
          where any_long_term_illness like '%হাঁপানি%')*100/(SELECT count(id) FROM patient_assessment) as 'Asthma_percentage'
          from patient_assessment;
        ");

        return $lunge_info[0] ?? [];
    }

    private function kidney_info($request) {
        $kidney_info = DB::select("
          select distinct
          (SELECT count(any_long_term_illness) FROM patient_assessment 
          where any_long_term_illness like '%কিডনীর সমস্যা%')*100/(SELECT count(id) FROM patient_assessment) as 'Kidney_percentage'
          from patient_assessment;
        ");

        return $kidney_info[0] ?? [];
    }

    private function hypertension_info($request) {
        $hypertension_info = DB::select("
          select distinct
          (SELECT count(any_long_term_illness) FROM patient_assessment 
          where any_long_term_illness like '%উচ্চ রক্তচাপ%')*100/(SELECT count(id) FROM patient_assessment) as 'Hypertension_percentage'
          from patient_assessment;
        ");

        return $hypertension_info[0] ?? [];
    }

    public function generateComorbidityExcel(Request $request){
      $diabetic_info  = $this->diabetic_info($request);
      $heart_info  = $this->heart_info($request);
      $lunge_info  = $this->lunge_info($request);
      $kidney_info  = $this->kidney_info($request);
      $hypertension_info  = $this->hypertension_info($request);

      $list = collect([
          [
          'Diabetic Patient' => number_format($diabetic_info->Diabetic_percentage,2) ?? '--', 
          'Heart Patient' => number_format($heart_info->Heart_Failure_percentage,2) ?? '--', 
          'Lunge Patient' => number_format($lunge_info->Asthma_percentage,2) ?? '--', 
          'Kidney Patient' => number_format($kidney_info->Kidney_percentage,2) ?? '--', 
          'Hypertension' => number_format($hypertension_info->Hypertension_percentage,2) ?? '--' 
          ],
      ]);

      return (new FastExcel($list))->download('Comorbidity_analysis.xlsx');
    }


}
