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
            //section 1
            $test_positive_trend  = $this->divisionWiseTestPositiveRate($request);
            //section 2
            $get_today_test_positive  = $this->todayDivisionWiseTestPositiveRate($request);
            $today_test_positive_rate  = $get_today_test_positive['today_test_positive_rate'];
            $today_number_of_test  = $get_today_test_positive['today_number_of_test'];
            //section 3
            $get_avg_test_positive  = $this->avgDivisionWiseTestPositiveRate($request);
            $avg_test_positive_rate  = $get_avg_test_positive['avg_test_positive_rate'];
            $avg_number_of_test  = $get_avg_test_positive['avg_number_of_test'];
        }else {
            //section 1
            $test_positive_trend  = $this->nationWiseTestPositiveRate($request);
            //section 2
            $get_today_test_positive  = $this->todayNationWiseTestPositiveRate($request);
            $today_test_positive_rate  = $get_today_test_positive['today_test_positive_rate'];
            $today_number_of_test  = $get_today_test_positive['today_number_of_test']; 
            //section 3
            $get_avg_test_positive  = $this->avgNationWiseTestPositiveRate($request);
            $avg_test_positive_rate  = $get_avg_test_positive['avg_test_positive_rate'];
            $avg_number_of_test  = $get_avg_test_positive['avg_number_of_test']; 
        }
        $testPositiveDate = $test_positive = $asymptomic_test_positive= $asymptomicTestPositiveDate= [];

        foreach ($test_positive_trend as $tptrend) {
          $testPositiveDate[] = date('Y-m-d', strtotime($tptrend->date_of_test ?? $tptrend->Date));
          $test_positive[]  = $tptrend->Test_Positive ?? $tptrend->Test_Positivity;
        }

        $testPositiveData  = implode(",", $test_positive);

        // section 3
        $asymptomictest_positive_trend  = $this->asymptomicTestPositiveRate($request);
        foreach ($asymptomictest_positive_trend as $tptrend) {
          $asymptomicTestPositiveDate[] = date('Y-m-d', strtotime($tptrend->event_date));
          $asymptomic_test_positive[]  = $tptrend->total;
        }
        $asymptomicTestPositiveData  = implode(",", $asymptomic_test_positive);

        //section 4
        $get_today_asymptomic_test_positive  = $this->todayAsymptomicTestPositiveRate($request);
        $today_asymptomic_test_positive_rate  = $get_today_asymptomic_test_positive['today_asymp_test_positive_rate'];
        $today_asymptomic_number_of_test  = $get_today_asymptomic_test_positive['today_asymp_number_of_test'];

        //section 5
        $get_avg_asymptomic_test_positive  = $this->avgAsymptomicTestPositiveRate($request);
        $avg_asymptomic_test_positive_rate  = $get_avg_asymptomic_test_positive['avg_asymp_test_positive_rate'];
        $avg_asymptomic_number_of_test  = $get_avg_asymptomic_test_positive['avg_asymp_number_of_test'];

        return view('iedcr.test-positivity-analysis-new',compact('testPositiveDate','testPositiveData','today_test_positive_rate','today_number_of_test','avg_test_positive_rate','avg_number_of_test','asymptomicTestPositiveData','asymptomicTestPositiveDate','today_asymptomic_test_positive_rate','today_asymptomic_number_of_test','avg_asymptomic_test_positive_rate','avg_asymptomic_number_of_test'));
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

    private function avgAsymptomicTestPositiveRate($request) {
        // $getDateCondition = $this->getDateCondition($request,'event_date');
        $asymptomicTestPositiveRate = DB::select("select (sum((P.Positive*100)/T.Total)/count(P.event_date)) as 'Avg_Test_Positivity_Rate' from (select event_date, sum(total) as 'Positive' from lab_test_data_passport 
                where lab_test_result='Positive' group by event_date order by event_date desc) as P
            inner join 
                (select event_date, sum(total) as 'Total'
                from lab_test_data_passport group by event_date order by event_date desc) as T 
            using(event_date)");

        $asymptomicTestCount = DB::select("select sum(total)/(count(distinct(event_date))) as avg_test_per_day from lab_test_data_passport");

        $data['avg_asymp_test_positive_rate'] = $asymptomicTestPositiveRate[0]->Avg_Test_Positivity_Rate ?? 0;
        $data['avg_asymp_number_of_test'] = $asymptomicTestCount[0]->avg_test_per_day ?? 0;

        return $data;
    }

    private function asymptomicTestPositiveRate($request) {
        $getDateCondition = $this->getDateCondition($request,'event_date');
        $asymptomicTestPositive = DB::select("select * from lab_test_data_passport where lab_test_result='Positive' ".$getDateCondition." order by event_date desc");

        return $asymptomicTestPositive ?? [];
    }

    private function nationWiseTestPositiveRate($request) {
        $getDateCondition = $this->getDateCondition($request, 'date_of_test');
        $nationWiseTestPositive = DB::select("select date_of_test, ((count(sl_no) *100)/(select count(sl_no) from lab_clean_data)) as 'Test_Positive' from lab_clean_data where test_result='Positive' ".$getDateCondition." group by date_of_test order by date_of_test desc");

        return $nationWiseTestPositive ?? [];
    }

    private function divisionWiseTestPositiveRate($request) {
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

    private function avgNationWiseTestPositiveRate($request) {
        $avgNationWiseTestPositive = DB::select("select (sum(A.Test_Positivity)/count(A.date_of_test)) as 'Avg_Test_Positivity' from
                                        (select date_of_test, ((count(sl_no) *100)/
                                        (select count(sl_no)
                                        from lab_clean_data)) as 'Test_Positivity'
                                        from lab_clean_data where test_result='Positive' group by date_of_test) as A");

        $avgNumberOfTest = DB::select("select (count(sl_no)/(select count(distinct(date_of_test)) from lab_clean_data)) as 'AVG_Test' from lab_clean_data;");

        // dd($avgNationWiseTestPositive[0]->Avg_Test_Positivity);

        $data['avg_test_positive_rate'] = $avgNationWiseTestPositive[0]->Avg_Test_Positivity ?? 0;
        $data['avg_number_of_test'] = $avgNumberOfTest[0]->AVG_Test ?? 0;

        return $data;
    }

    private function avgDivisionWiseTestPositiveRate($request) {
        $str_dis= $request->district;
        $str_upa= $request->upazila;
        if($request->district=="COX'S BAZAR" || $request->district=="cox's bazar"){
         $str_dis= 'cox';
        }
        if($request->upazila=="COX'S BAZAR SADAR" || $request->upazila=="cox's bazar sadar"){
         $str_upa= 'cox';
        }

        if($request->division && $request->district && $request->upazila){
            $avgDivisionWiseTestPositive = DB::select("select division, district, upazila, sum(Test_Positivity)/count(date) as 'Avg_Test_Positivity' from Div_Dist_Upz_Test_Positivity_Trend where upazila like '%".$str_upa."%' group by date");

            $avgDivisionWiseTestNumber = DB::select("select Division, District, Upazila, sum(NumberOfTest)/count(date) as 'AVG_Test' from Div_Dist_Upz_Test_Number where upazila '%".$str_upa."%'");
        }elseif($request->division && $request->district){
          $avgDivisionWiseTestPositive = DB::select("select (sum(A.Test_Positivity)/count(A.Date)) as 'Avg_Test_Positivity' from
                                        (select date,(sum(Test_Positivity)/
                                            ((select count(upazila) from Div_Dist_Upz_Test_Positivity_Trend where district like '%".$str_dis."%'))) as 'Test_Positivity'
                                        from Div_Dist_Upz_Test_Positivity_Trend where district like '%".$str_dis."%' group by date) as A");

          $avgDivisionWiseTestNumber = DB::select("select Division, District, sum(NumberOfTest)/count(date) as 'AVG_Test' from Div_Dist_Upz_Test_Number where District like '%".$str_dis."%'");
        }elseif($request->division){           
            $avgDivisionWiseTestPositive = DB::select("select (sum(A.Test_Positivity)/count(A.Date)) as 'Avg_Test_Positivity' from
                                            (select date,sum(Test_Positivity)/
                                                ((select count(district) from Div_Dist_Upz_Test_Positivity_Trend where division like '%".$request->division."%')) as 'Test_Positivity'
                                            from Div_Dist_Upz_Test_Positivity_Trend where division like '%".$request->division."%' group by date) as A");

            $avgDivisionWiseTestNumber = DB::select("select Division, sum(NumberOfTest)/count(date) as 'AVG_Test' from Div_Dist_Upz_Test_Number where Division like '%".$request->division."%'");
        }

        // dd($avgDivisionWiseTestPositive);
        $data['avg_test_positive_rate'] = $avgDivisionWiseTestPositive[0]->Avg_Test_Positivity ?? 0;
        $data['avg_number_of_test'] = $avgDivisionWiseTestNumber[0]->AVG_Test ?? 0;

        return $data;
    }

    private function getDateCondition($request, $filed_name){
        if ($request->from_date && $request->to_date){
            $from_date = $request->from_date;
            $to_date   = $request->to_date;
            $condition = "and (".$filed_name." between '".$from_date."' and  '".$to_date ."')";
        }elseif($request->from_date || $request->to_date){
            $sdate = $request->from_date != '' ? $request->from_date : $request->to_date;
            $condition = "and ".$filed_name." like '".$sdate."'";
        }else{
            $condition = "";
        }
        return $condition;
    }

    public function generateAsymptomicTestPositiveRateExcel(Request $request){
        $asymptomictest_positive_trend  = $this->asymptomicTestPositiveRate($request);

        $i=0;
        $data = [];
        if(sizeof($asymptomictest_positive_trend) > 0){
          foreach ($asymptomictest_positive_trend as $key => $tptrend) {
              $data[$i]['Date'] =  date('Y-m-d', strtotime($tptrend->event_date ?? ''));
              $data[$i]['Lab Test Result'] =  $tptrend->lab_test_result ?? 'Positive';
              $data[$i]['Total'] =  $tptrend->total ?? 0;
              $i++;
          }
        }
        $list = collect($data);
        return (new FastExcel($list))->download('asymptomic_test_positivity.xlsx');
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

    public function generateAvgTestPositiveExcel(Request $request){
        if($request->division || $request->district || $request->upazila){
            $get_avg_test_positive  = $this->avgDivisionWiseTestPositiveRate($request);
            $avg_test_positive_rate  = $get_avg_test_positive['avg_test_positive_rate'];
            $avg_number_of_test  = $get_avg_test_positive['avg_number_of_test'];
        }else {
            $get_avg_test_positive  = $this->avgNationWiseTestPositiveRate($request);
            $avg_test_positive_rate  = $get_avg_test_positive['avg_test_positive_rate'];
            $avg_number_of_test  = $get_avg_test_positive['avg_number_of_test']; 
        }

        $list = collect([
          [
          'Avg Test Positivity Rate' => $avg_test_positive_rate,
          'Avg Number of Test' => $avg_number_of_test
        ]
      ]);

      return (new FastExcel($list))->download('avg_test_positive_data.xlsx');
    }

    public function generateTodayAsympTestPositiveExcel(Request $request){
        $get_today_asymptomic_test_positive  = $this->todayAsymptomicTestPositiveRate($request);
        $today_asymptomic_test_positive_rate  = $get_today_asymptomic_test_positive['today_asymp_test_positive_rate'];
        $today_asymptomic_number_of_test  = $get_today_asymptomic_test_positive['today_asymp_number_of_test'];

        $list = collect([
          [
          'Test Positivity Rate' => $today_asymptomic_test_positive_rate,
          'Number of Performed Test' => $today_asymptomic_number_of_test
        ]
      ]);

      return (new FastExcel($list))->download('today_asymptomic_test_positive_data.xlsx');
    }

    public function generateAvgAsympTestPositiveExcel(Request $request){
        $get_avg_asymptomic_test_positive  = $this->avgAsymptomicTestPositiveRate($request);
        $avg_asymptomic_test_positive_rate  = $get_avg_asymptomic_test_positive['avg_asymp_test_positive_rate'];
        $avg_asymptomic_number_of_test  = $get_avg_asymptomic_test_positive['avg_asymp_number_of_test'];

        $list = collect([
          [
          'Avg Test Positivity Rate' => $avg_asymptomic_test_positive_rate,
          'Avg Number of Test' => $avg_asymptomic_number_of_test
        ]
      ]);

      return (new FastExcel($list))->download('avg_asymptomic_test_positive_data.xlsx');
    }
}
