<?php

namespace App\Http\Controllers\cabinet;

use App\Http\Controllers\Controller;
use App\Models\cabinet\Covid19DashboardTestSum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{
    public static $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
    public static $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    public function covid24Hours() {

        //Test 24 hours
        $covid_tests_24_hours = Covid19DashboardTestSum::where('DASH_COMP_ID', '=', 1)->where('REPORT_DY', function($q)
                                                    {
                                                        $q->from('dwa_covid19_dash_summ_test')
                                                            ->selectRaw('max(REPORT_DY)')
                                                            ->where('DASH_COMP_ID', '=', 1);
                                                    })->get();

        foreach ($covid_tests_24_hours as $key => $_resultData){
            $result_24_hours[$_resultData['KPI_NAME']] = $_resultData['KPI_VAL'];
        }
        $data['result_24_hours'] = $result_24_hours;

        // Last Day Compare Data
        $covid_tests_last_day = Covid19DashboardTestSum::where('DASH_COMP_ID', '=', 1)->where('REPORT_DY', '=', DB::raw('DATE_SUB(NOW(), INTERVAL 1 DAY)'))->get();

        if(count($covid_tests_last_day) > 0){
            foreach ($covid_tests_last_day as $key => $_resultData){
                $result_last_day[$_resultData['KPI_NAME']] = $_resultData['KPI_VAL'];
                $data['result_last_day'] = $result_last_day;
            }
        } else {
            $data['result_last_day'] = null;
        }

        //District wise result
        $district_wise_infected_data = DB::select( DB::raw("SELECT distinct T1.DATE AS 'DATE', T1.DIVISION, T1.DISTRICT, T1.INFECTED_PERSON, T1.GROUP_CONFIRMED, T2.Rt, T3.DOUBLING_RATE FROM
                                (select str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED_PERSON', SUB_DIM_NAME_2 AS 'GROUP_CONFIRMED' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt') AND (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') and DY_KEY >='20200624') AS T1
                                INNER JOIN
                                (SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'Rt' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'Rt')) AS T2 USING (DISTRICT)
                                INNER JOIN
                                (SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'DOUBLING_RATE' from dwa_covid19_dash_summ_test 
                                WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'DOUBLING_RATE')) AS T3 USING (DISTRICT) GROUP BY DISTRICT ORDER BY DATE DESC, `INFECTED_PERSON` DESC"));

        $_mapDataDistrictWiseInfectedRes = $_mapDataGroupList = $_districtList = $_distirctDetailsData = [];
        foreach ($district_wise_infected_data as $_disWiseInfResultData){
            $_distirctDetailsData[] = $_disWiseInfResultData; // This data will use for DataTable
            $_disWiseInfResultData = (array)$_disWiseInfResultData;
//            $_mapDataDistrictWiseInfectedRes[$_disWiseInfResultData['DIVISION']] = ($_mapDataDistrictWiseInfectedRes[$_disWiseInfResultData['DIVISION']])?$_mapDataDistrictWiseInfectedRes[$_disWiseInfResultData['DIVISION']]+$_disWiseInfResultData['INFECTED_PERSON']:$_disWiseInfResultData['INFECTED_PERSON'];
            $_dataGroupParts = explode("-", $_disWiseInfResultData['GROUP_CONFIRMED']);
            $_dataGroupKey = (count($_dataGroupParts) > 1)?$_dataGroupParts[1]:str_replace('+', '', $_dataGroupParts[0])+100000;
            $_mapDataGroupList[$_dataGroupKey] = $this->en2bn($_disWiseInfResultData['GROUP_CONFIRMED']);
            $_districtList[$_disWiseInfResultData['DISTRICT']] = array( 'division' => $_disWiseInfResultData['DIVISION'], 'district' => $_disWiseInfResultData['DISTRICT'], 'infected' => $_disWiseInfResultData['INFECTED_PERSON']); // Prepare District List
        }
        $data['_distirctDetailsData'] = $_distirctDetailsData;

        //Daily Changes & forcast
        $_outputDailyData = $_InfectedDailyData = $_forcastDailyInfectedData = $_infectedWeekDays = $_forcastWeekDays = $_lastDay = [];
//        $_cr = 0;
//
//        $_dailyInfectedSQL =  DB::select( DB::raw("select str_to_date(REPORT_DY, '%Y%m%d') AS 'DATE', KPI_VAL AS 'CUMULATIVE_COUNT' FROM dwa_covid19_dash_summ_test WHERE KPI_NAME = 'DAILY_CHANGES' AND DIM_NAME = 'ACTUAL'"));
//
//        foreach($_dailyInfectedSQL as $_queryResData){
//            $_queryResData = (array) $_queryResData;
//            $_InfectedDailyData[$_queryResData['DATE']] = $_queryResData['CUMULATIVE_COUNT'];
//
//            if($_cr%7 == 0){
//                $_lableTextParts = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_queryResData['DATE'])));
//                $_lableTextParts[0] = $this->en2bn($_lableTextParts[0]);
////                $_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
//                $_lableTextParts[1] = $_lableTextParts[1];
//                #print_r($_lableTextParts); exit;
//                $_infectedWeekDays[$_queryResData['DATE']] = implode("",$_lableTextParts);
//            }
//            $_infLastDay = $_queryResData['DATE'];
//            $_cr++;
//        }
//dd();

        //Red zone data
        $data['red_zone_data'] = DB::select( DB::raw("SELECT T1.ZONE_AREA, T1.DOUBLING_RATE, T2.Rt, T3.TEST_POSITIVITY, T4.CASES_PER_1M_POPULATION
													FROM (select DIM_NAME as 'ZONE_AREA', SUB_DIM_NAME AS 'ZONE', KPI_VAL AS 'DOUBLING_RATE'
													FROM dwa_covid19_dash_summ_test WHERE SUB_DIM_NAME_2 = 'Doubling_Rate' AND KPI_NAME = 'TABULAR_DATA') AS T1
													INNER JOIN (select DIM_NAME as 'ZONE_AREA', SUB_DIM_NAME AS 'ZONE',KPI_VAL AS 'Rt' FROM dwa_covid19_dash_summ_test
													WHERE SUB_DIM_NAME_2 = 'Rt' AND KPI_NAME = 'TABULAR_DATA') AS T2 using (ZONE_AREA)
													INNER JOIN (select DIM_NAME as 'ZONE_AREA', SUB_DIM_NAME AS 'ZONE',KPI_VAL AS 'TEST_POSITIVITY'
													FROM dwa_covid19_dash_summ_test WHERE SUB_DIM_NAME_2 = 'TEST_POSITIVITY' AND KPI_NAME = 'TABULAR_DATA') AS T3 using(ZONE_AREA)
													INNER JOIN (select DIM_NAME as 'ZONE_AREA', SUB_DIM_NAME AS 'ZONE',KPI_VAL AS 'CASES_PER_1M_POPULATION'
													FROM dwa_covid19_dash_summ_test WHERE SUB_DIM_NAME_2 = 'CASES_PER_100000_POPULATION' AND KPI_NAME = 'TABULAR_DATA') AS T4 using(ZONE_AREA) GROUP BY T1.ZONE_AREA ORDER BY CASES_PER_1M_POPULATION DESC") );


        return view('administrative.dashboard', $data);
    }

    public function dataFrame(Request $request){
        //District wise result
        $district_wise_infected_data = DB::select( DB::raw("SELECT distinct T1.DATE AS 'DATE', T1.DIVISION, T1.DISTRICT, T1.INFECTED_PERSON, T1.GROUP_CONFIRMED, T2.Rt, T3.DOUBLING_RATE FROM
                                (select str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED_PERSON', SUB_DIM_NAME_2 AS 'GROUP_CONFIRMED' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt') AND (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') and DY_KEY >='20200624') AS T1
                                INNER JOIN
                                (SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'Rt' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'Rt')) AS T2 USING (DISTRICT)
                                INNER JOIN
                                (SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'DOUBLING_RATE' from dwa_covid19_dash_summ_test 
                                WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'DOUBLING_RATE')) AS T3 USING (DISTRICT) GROUP BY DISTRICT ORDER BY DATE DESC, `INFECTED_PERSON` DESC"));

        $_mapDataDistrictWiseInfectedRes = $_mapDataGroupList = $_districtList = $_distirctDetailsData = [];
        foreach ($district_wise_infected_data as $_disWiseInfResultData){
            $_distirctDetailsData[] = $_disWiseInfResultData; // This data will use for DataTable
            $_disWiseInfResultData = (array)$_disWiseInfResultData;
            $_dataGroupParts = explode("-", $_disWiseInfResultData['GROUP_CONFIRMED']);
            $_dataGroupKey = (count($_dataGroupParts) > 1)?$_dataGroupParts[1]:str_replace('+', '', $_dataGroupParts[0])+100000;
            $_mapDataGroupList[$_dataGroupKey] = $this->en2bn($_disWiseInfResultData['GROUP_CONFIRMED']);
            $_districtList[$_disWiseInfResultData['DISTRICT']] = array( 'division' => $_disWiseInfResultData['DIVISION'], 'district' => $_disWiseInfResultData['DISTRICT'], 'infected' => $_disWiseInfResultData['INFECTED_PERSON']); // Prepare District List
        }
        $data['_distirctDetailsData'] = $_distirctDetailsData;

        $dataType = $request->get('datatype');
        if($dataType == "riskzone"){
            $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'https://arcg.is/1iqf0T');
        }elseif($dataType == "patientmobility"){
            $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'https://covid19mobility.cramstack.com/');
        } else if($dataType == "citizenmobility"){
            $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'https://covid19mobility.cramstack.com/');
        } else if($dataType == "synnoptic_surveillance"){
            $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'http://a2i-monitoring.sigmind.ai/home');
        } else if($dataType == "ss_report"){
            $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'http://cdr.a2i.gov.bd/outlier_new/');
        } else if($dataType == "sdp_monitoring"){
            $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'http://a2i-monitoring.sigmind.ai/home');
        } else if($dataType == "analytics"){
            $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'https://app.powerbi.com/view?r=eyJrIjoiNmU2YWEwNTEtZWIwMC00M2Q2LTg5NzItMDI1YjEwNzM5NTNmIiwidCI6ImNkNTc1NTI0LTkyNTgtNGVkOC05NDg3LWUxYTIyN2JlMjkyYiIsImMiOjEwfQ%3D%3D&pageName=ReportSection96ba617637500cdc7529');
        } else if($dataType == "detailsmap"){
            $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'https://app.powerbi.com/view?r=eyJrIjoiNmU2YWEwNTEtZWIwMC00M2Q2LTg5NzItMDI1YjEwNzM5NTNmIiwidCI6ImNkNTc1NTI0LTkyNTgtNGVkOC05NDg3LWUxYTIyN2JlMjkyYiIsImMiOjEwfQ%3D%3D&pageName=ReportSection96ba617637500cdc7529');
        }
        $data['_requestedFrameData'] = $_requestedFrameData;

        return view('administrative.dataframe', $data);
    }

    public static function bn2en($number) {
        return str_replace(self::$bn, self::$en, $number);
    }

    public static function en2bn($number) {
        return str_replace(self::$en, self::$bn, $number);
    }

    public static function en2bnbyXLSX($_enText){
//        if(!@$_SESSION['translate']){

            $_translateData = NULL;
            if ($xlsx = Excel::import(new BulkImport,request()->file('translate.xlsx'))){
                foreach($xlsx->rows() as $_rowData){
                    $_translateData[$_rowData[0]] = $_rowData[1];
                }
            }
            $_SESSION['translate'] = $_translateData;
//        }
        return (@$_SESSION['translate'][$_enText])?$_SESSION['translate'][$_enText]:$_enText;
    }
}
