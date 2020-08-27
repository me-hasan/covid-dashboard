<?php

namespace App\Http\Controllers\Iedcr;

use DB;
use App\Http\Controllers\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;

class TestPositiveController extends Controller
{
    public function test_positivity_analysis(Request $request) {
        if($request->division || $request->district || $request->upazila){
            $test_positive_trend  = $this->divisionWiseTestPositiveRate($request);
            $get_today_test_positive  = $this->todayDivisionWiseTestPositiveRate($request);
            $today_test_positive_rate  = $get_today_test_positive['today_test_positive_rate'];
            $today_number_of_test  = $get_today_test_positive['today_number_of_test'];
        }else {
            $test_positive_trend  = $this->nationWiseTestPositiveRate($request);
            $get_today_test_positive  = $this->todayNationWiseTestPositiveRate($request);
            $today_test_positive_rate  = $get_today_test_positive['today_test_positive_rate'];
            $today_number_of_test  = $get_today_test_positive['today_number_of_test']; 
        }
        $testPositiveDate = $test_positive = [];

        foreach ($test_positive_trend as $tptrend) {
          $testPositiveDate[] = date('Y-m-d', strtotime($tptrend->date_of_test ?? $tptrend->Date));
          $test_positive[]  = $tptrend->Test_Positive ?? $tptrend->Test_Positivity;
        }

        $testPositiveData  = implode(",", $test_positive);

        return view('iedcr.test-positivity-analysis-new',compact('testPositiveDate','testPositiveData','today_test_positive_rate','today_number_of_test'));
    }

    private function nationWiseTestPositiveRate($request) {
        $getDateCondition = $this->getDateCondition($request);
        $nationWiseTestPositive = DB::select("select date_of_test, ((count(sl_no) *100)/(select count(sl_no) from lab_clean_data)) as 'Test_Positive' from lab_clean_data where test_result='Positive' ".$getDateCondition." group by date_of_test order by date_of_test desc");

        return $nationWiseTestPositive ?? [];
    }

    private function divisionWiseTestPositiveRate($request) {
        $getDateCondition = $this->getDateCondition($request);
        $str_dis= $request->district;
        $str_upa= $request->upazila;
        if($request->district=="COX'S BAZAR" || $request->district=="cox's bazar"){
         $str_dis= 'cox';
        }
        if($request->upazila=="COX'S BAZAR SADAR" || $request->upazila=="cox's bazar sadar"){
         $str_upa= 'cox';
        }

        if($request->division && $request->district && $request->upazila){
            $divisionWiseTestPositive = DB::select("select * from Div_Dist_Upz_Test_Positivity_Trend where upazila like '%".$str_upa."%' ".$getDateCondition." group by date order by date desc");
        }elseif($request->division && $request->district){
          $divisionWiseTestPositive = DB::select("select date,(sum(Test_Positivity)/
                                        ((select count(upazila) from Div_Dist_Upz_Test_Positivity_Trend where district like '%".$str_dis."%'))) as 'Test_Positivity'
                                    from Div_Dist_Upz_Test_Positivity_Trend where district like '%".$str_dis."%' ".$getDateCondition." group by date order by date des");
        }elseif($request->division){
            $divisionWiseTestPositive = DB::select("select date,sum(Test_Positivity)/
                                        ((select count(district) from Div_Dist_Upz_Test_Positivity_Trend where division like '%".$request->division."%')) as 'Test_Positivity'
                                    from Div_Dist_Upz_Test_Positivity_Trend where division like '%".$request->division."%' ".$getDateCondition." group by date order by date desc");
        }

        // dd($divisionWiseTestPositive);

        return $divisionWiseTestPositive ?? [];
    }

    private function todayNationWiseTestPositiveRate($request) {
        $todayNationWiseTestPositive = DB::select("select ((A.Number_of_PT*100)/ (select count(sl_no) from lab_clean_data where date_of_test= (select max(date_of_test) from lab_clean_data) )) as today_test_positivity from (select count(test_result) as 'Number_of_PT' from lab_clean_data where test_result='Positive' and date_of_test= (select max(date_of_test) from lab_clean_data)) as A");

        $todayNumberOfTest = DB::select("select count(sl_no) as NumberOfTest from lab_clean_data where date_of_test=
                            (select max(date_of_test) from lab_clean_data)");

        // dd($todayNationWiseTestPositive[0]->today_test_positivity);

        $data['today_test_positive_rate'] = $todayNationWiseTestPositive[0]->today_test_positivity ?? 0;
        $data['today_number_of_test'] = $todayNumberOfTest[0]->NumberOfTest ?? 0;

        return $data;
    }

    private function todayDivisionWiseTestPositiveRate($request) {
        $str_dis= $request->district;
        $str_upa= $request->upazila;
        if($request->district=="COX'S BAZAR" || $request->district=="cox's bazar"){
         $str_dis= 'cox';
        }
        if($request->upazila=="COX'S BAZAR SADAR" || $request->upazila=="cox's bazar sadar"){
         $str_upa= 'cox';
        }

        if($request->division && $request->district && $request->upazila){
            $todayDivisionWiseTestPositive = DB::select("select * from Div_Dist_Upz_Today_Test_Positivity where upazila like '%".$str_upa."%' order by date desc");

            $todayDivisionWiseTestNumber = DB::select("select * from Div_Dist_Upz_Today_Test_Number where Upazila like '%".$str_upa."%'");
        }elseif($request->division && $request->district){
          $todayDivisionWiseTestPositive = DB::select("select date,(sum(Test_Positivity)/
                                            ((select count(upazila) from Div_Dist_Upz_Today_Test_Positivity where district like '%".$str_dis."%'))) as 'Test_Positivity'
                                        from Div_Dist_Upz_Today_Test_Positivity where district like '%".$str_dis."%' order by date desc");

          $todayDivisionWiseTestNumber = DB::select("select division, district, sum(numberOfTest) as NumberOfTest from Div_Dist_Upz_Today_Test_Number where district like '%".$str_dis."%' group by district");
        }elseif($request->division){
            $todayDivisionWiseTestPositive = DB::select("select date,(sum(Test_Positivity)/
                                            ((select count(district) from Div_Dist_Upz_Today_Test_Positivity where division like '%".$request->division."%'))) as 'Test_Positivity'
                                        from Div_Dist_Upz_Today_Test_Positivity where division like '%".$request->division."%' group by date order by date desc");

            $todayDivisionWiseTestNumber = DB::select("select division, sum(numberOfTest) as NumberOfTest from Div_Dist_Upz_Today_Test_Number where division like '%".$request->division."%' group by division");
        }

        // dd($todayDivisionWiseTestPositive);
        $data['today_test_positive_rate'] = $todayDivisionWiseTestPositive[0]->Test_Positivity ?? 0;
        $data['today_number_of_test'] = $todayDivisionWiseTestNumber[0]->NumberOfTest ?? 0;

        return $data;
    }

    private function getDateCondition($request){
        if ($request->from_date && $request->to_date){
            $from_date = $request->from_date;
            $to_date   = $request->to_date;
            $condition = "and (date_of_test between '".$from_date."' and  '".$to_date ."')";
        }elseif($request->from_date || $request->to_date){
            $sdate = $request->from_date != '' ? $request->from_date : $request->to_date;
            $condition = "and date_of_test like '".$sdate."'";
        }else{
            $condition = "";
        }
        return $condition;
    }

    public function generateTestPositiveRateExcel(Request $request){
        if($request->division || $request->district || $request->upazila){
            $test_positive_trend  = $this->divisionWiseTestPositiveRate($request);
        }else {
            $test_positive_trend  = $this->nationWiseTestPositiveRate($request);
        }

        $i=0;
        $data = [];
        if(sizeof($test_positive_trend) > 0){
          foreach ($test_positive_trend as $key => $tptrend) {
              $data[$i]['Date'] =  date('Y-m-d', strtotime($tptrend->date_of_test ?? $tptrend->Date));
              $data[$i]['Positivity Rate'] =  $tptrend->Test_Positive ?? $tptrend->Test_Positivity;
              $i++;
          }
        }
        $list = collect($data);
        return (new FastExcel($list))->download('test_positivity_rate.xlsx');
    }

    public function generateTodayTestPositiveExcel(Request $request){
        if($request->division || $request->district || $request->upazila){
            $get_today_test_positive  = $this->todayDivisionWiseTestPositiveRate($request);
            $today_test_positive_rate  = $get_today_test_positive['today_test_positive_rate'];
            $today_number_of_test  = $get_today_test_positive['today_number_of_test'];
        }else {
            $get_today_test_positive  = $this->todayNationWiseTestPositiveRate($request);
            $today_test_positive_rate  = $get_today_test_positive['today_test_positive_rate'];
            $today_number_of_test  = $get_today_test_positive['today_number_of_test']; 
        }

        $list = collect([
          [
          'Test Positivity Rate' => $today_test_positive_rate,
          'Number of Performed Test' => $today_number_of_test
        ]
      ]);

      return (new FastExcel($list))->download('today_test_positive_data.xlsx');
    }
}
