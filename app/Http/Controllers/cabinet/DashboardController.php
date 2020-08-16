<?php

namespace App\Http\Controllers\cabinet;

use App\Http\Controllers\Controller;
use App\Models\cabinet\Covid19DashboardTestSum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class DashboardController extends Controller
{
    public static $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
    public static $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

    public function covid24Hours(Request $request) {

        $auth_level = Auth::user()->account_level;

        $_outputDailyData = $_InfectedDailyData = $_forcastDailyInfectedData = $_infectedWeekDays = $_forcastWeekDays = $_lastDay = array();
        $_cr = 0;
        $_infLastDay = '';
        $_divisionSelName = $_districtSelName = $_upazillaSelName = NULL;
        $_divisionSelName = $request->get('division');
        $_districtSelName = $request->get('district');
        $_upazillaSelName = $request->get('upazilla');

        // Get All Division List
        $_getDivisionRes =  DB::select( DB::raw("select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED_PERSON', SUB_DIM_NAME_2 AS 'GROUP CONFIRMED' from dwa_covid19_dash_summ_test WHERE KPI_NAME='MAP_OF_CASES' GROUP BY `DISTRICT` ORDER BY `DATE`"));

        $_allDivisionList = [];
        $_mapDataDistrictWiseInfectedRes = [];
        foreach( $_getDivisionRes as $_divQueryData){
            $_divQueryData = (array)$_divQueryData;
            if($_divQueryData['DIVISION'] == NULL) continue; // SKIP Empty Row
//            if(auth()->user()->account_level == 'divisional'){
//                $_allDivisionList[$_divQueryData[strtoupper(auth()->user()->division)]] = (isset($_mapDataDistrictWiseInfectedRes[$_divQueryData[strtoupper(auth()->user()->division)]])) ? $_mapDataDistrictWiseInfectedRes[$_divQueryData[strtoupper(auth()->user()->division)]] + 0:0;
//            }
            $_allDivisionList[$_divQueryData['DIVISION']] = (isset($_mapDataDistrictWiseInfectedRes[$_divQueryData['DIVISION']])) ? $_mapDataDistrictWiseInfectedRes[$_divQueryData['DIVISION']] + $_divQueryData['INFECTED_PERSON']:$_divQueryData['INFECTED_PERSON'];
        }

        $data['_allDivisionList'] = $_allDivisionList;

        //Get Upazilla list
        $upazillaList = $this->getUpazillaList();
        $data['_upazillaList'] = $upazillaList;

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

        //District wise map result
//        if($_divisionSelName == "all")
//            unset($_divisionSelName);

        if($auth_level == 'divisional'){
            $_divisionSelName = strtoupper(Auth::user()->division);
        }

        if(isset($_divisionSelName) && $_divisionSelName != "all"){
            $_extendedQuery = " AND DIM_NAME='".$_divisionSelName."'";

            $district_wise_infected_data = DB::select( DB::raw("SELECT distinct T1.DATE AS 'DATE', T1.DIVISION, T1.DISTRICT, T1.INFECTED_PERSON, T1.GROUP_CONFIRMED, T2.Rt, T3.DOUBLING_RATE FROM
                                (select str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED_PERSON', SUB_DIM_NAME_2 AS 'GROUP_CONFIRMED' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt') AND (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') and DY_KEY >='20200624') AS T1
                                INNER JOIN
                                (SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'Rt' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'Rt')) AS T2 USING (DISTRICT)
                                INNER JOIN
                                (SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'DOUBLING_RATE' from dwa_covid19_dash_summ_test
                                WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'DOUBLING_RATE'".$_extendedQuery.")) AS T3 USING (DISTRICT) GROUP BY DISTRICT ORDER BY DATE DESC, `INFECTED_PERSON` DESC"));
        } else {
            $district_wise_infected_data = DB::select( DB::raw("SELECT distinct T1.DATE AS 'DATE', T1.DIVISION, T1.DISTRICT, T1.INFECTED_PERSON, T1.GROUP_CONFIRMED, T2.Rt, T3.DOUBLING_RATE FROM
                                (select str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED_PERSON', SUB_DIM_NAME_2 AS 'GROUP_CONFIRMED' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt') AND (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') and DY_KEY >='20200624') AS T1
                                INNER JOIN
                                (SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'Rt' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'Rt')) AS T2 USING (DISTRICT)
                                INNER JOIN
                                (SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'DOUBLING_RATE' from dwa_covid19_dash_summ_test
                                WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'DOUBLING_RATE')) AS T3 USING (DISTRICT) GROUP BY DISTRICT ORDER BY DATE DESC, `INFECTED_PERSON` DESC"));
        }


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
        $data['_districtList']        = $_districtList;
//        dd($data['_districtList']);

        //Daily Changes & forcast
        $_outputDailyData = $_InfectedDailyData = $_forcastDailyInfectedData = $_infectedWeekDays = $_forcastWeekDays = $_lastDay = [];
        $_cr = 0;

        if(isset($_divisionSelName)){
            $_dailyInfectedSQL = DB::select( DB::raw("select str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', SUM(KPI_VAL) AS 'CUMULATIVE_COUNT', DIM_NAME AS 'DIVISION' FROM dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') AND DIM_NAME = '".$_divisionSelName."' GROUP BY DY_KEY"));
        }else {
            $_dailyInfectedSQL =  DB::select( DB::raw("select str_to_date(REPORT_DY, '%Y%m%d') AS 'DATE', KPI_VAL AS 'CUMULATIVE_COUNT' FROM dwa_covid19_dash_summ_test WHERE KPI_NAME = 'DAILY_CHANGES' AND DIM_NAME = 'ACTUAL'"));
        }

        foreach($_dailyInfectedSQL as $_queryResData){
            $_queryResData = (array) $_queryResData;
            $_InfectedDailyData[$_queryResData['DATE']] = $_queryResData['CUMULATIVE_COUNT'];

            if($_cr%7 == 0){
                $_lableTextParts    = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_queryResData['DATE'])));
                $_lableTextParts[0] = $this->en2bn($_lableTextParts[0]);
//                $_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
                $_lableTextParts[1] = en2bnTranslation($_lableTextParts[1]);
                $_infectedWeekDays[$_queryResData['DATE']] = implode("",$_lableTextParts);
            }
            $_infLastDay = $_queryResData['DATE'];
            $_cr++;
        }

        if(isset($_InfectedDailyData[$_infLastDay]) && $_InfectedDailyData[$_infLastDay]){
            $_lableTextParts    = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_infLastDay)));
            $_lableTextParts[0] = $this->en2bn($_lableTextParts[0]);
//            $_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
            $_lableTextParts[1] = en2bnTranslation($_lableTextParts[1]);
            $_infectedWeekDays[$_infLastDay] = implode("",$_lableTextParts);
        }
        $_infectedWeeksDate = array_keys($_infectedWeekDays); // For Forcasting Data Maping

        $_forcastDailySQL = DB::select( DB::raw("select str_to_date(REPORT_DY, '%Y%m%d') AS 'DATE', KPI_VAL AS 'CUMULATIVE_COUNT' FROM dwa_covid19_dash_summ_test WHERE KPI_NAME = 'DAILY_CHANGES' AND DIM_NAME = 'PREDICTION'"));

        $_cr = 0;
        foreach($_forcastDailySQL as $_queryResData){
            $_queryResData = (array)$_queryResData;
            $_forcastDailyInfectedData[$_queryResData['DATE']] = $_queryResData['CUMULATIVE_COUNT'];
            if(in_array($_queryResData['DATE'], $_infectedWeeksDate) || (($_cr%7 == 0) && (strtotime($_queryResData['DATE']) > strtotime($_infLastDay)))){
                $_lableTextParts = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_queryResData['DATE'])));
                $_lableTextParts[0] = $this->en2bn($_lableTextParts[0]);
//                $_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
                $_lableTextParts[1] = en2bnTranslation($_lableTextParts[1]);
                $_forcastWeekDays[$_queryResData['DATE']] = implode("",$_lableTextParts);
            }
            $_lastDay = $_queryResData['DATE'];
            $_cr++;
        }

        $_totalDataCount = count($_InfectedDailyData)+count($_forcastDailyInfectedData);

        $_lableTextParts    = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_lastDay)));
        $_lableTextParts[0] = $this->en2bn($_lableTextParts[0]);
//        $_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
        $_lableTextParts[1] = en2bnTranslation($_lableTextParts[1]);
        $_lastDayData       = array($_lastDay => implode("", $_lableTextParts));

        $_xAxisData = array_merge($_infectedWeekDays, $_forcastWeekDays, $_lastDayData);
        $_xAxisData = array_values($_xAxisData);

        foreach($_infectedWeekDays as $_infactedWeekDaysKey => $_infactedWeekDaysVal){
            $_infectedWeeksData[] = (int)$_InfectedDailyData[$_infactedWeekDaysKey];
        }
//$_infectedWeeksData[] = (int)$_InfectedDailyData[$_infLastDay]; // Used before

        foreach($_forcastWeekDays as $_forcastKeyDate => $_forcastVal){
            if(!in_array($_forcastKeyDate, $_infectedWeeksDate)){
                $_infectedWeeksData[] = NULL;
            }
        }

        $_forcastWeeksDate = array_keys($_forcastWeekDays); // For Forcasting Data Maping

        foreach($_infectedWeeksData as $_infectedKey => $_infectedVal){
            //if($_infectedVal == NULL) continue;
            $_forcastDailyData[$_infectedKey] = NULL;
            //$_forcastDailyData[] = ($_infectedKey % 2 == 0)?$_infectedVal+rand(($_infectedVal/15)-200, ($_infectedVal/15)):$_infectedVal-rand(($_infectedVal/20)-200, ($_infectedVal/20));
        }

        $_totalInfecRecords = (int)count($_infectedWeeksData);
        $_rc = (int)count($_forcastWeekDays);

        foreach($_forcastWeekDays as $_forcastWeekKey => $_forcastVal){
            $_forcastDailyData[$_totalInfecRecords-$_rc] = (int)$_forcastDailyInfectedData[$_forcastWeekKey];
            $_rc--;
        }

        $data['_xAxisData'] = $_xAxisData;
        $data['_infectedWeeksData'] = $_infectedWeeksData;
        $data['_forcastDailyData'] = $_forcastDailyData;

        //Red zone
        $_redZoneData = $_xAxisRedZoneData = array();
        $_week = 1;

        $_redZoneRes = DB::select( DB::raw("select str_to_date(DY_KEY,'%Y%m%d') AS 'WEEK DATE', DIM_NAME AS ZONE, KPI_VAL AS 'NO OF ZONE' from dwa_covid19_dash_summ_test WHERE KPI_NAME='ZONE' AND DIM_NAME='RED'"));
        foreach( $_redZoneRes as $_queryResData){
            $_queryResData  = (array)$_queryResData;
            $_redZoneData[] = (int)$_queryResData['NO OF ZONE'];
            $_xAxisRedZoneData[] = "W".$_week;
            $_week++;
        }

        $data['_xAxisRedZoneData']  = $_xAxisRedZoneData;
        $data['_redZoneData']       = $_redZoneData;

        // Mobility IN
        $_mobilityRes = DB::select( DB::raw("SELECT DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'MOBILITY_TYPE', SUB_DIM_NAME_2 AS 'WEEK', KPI_VAL*100 AS 'PERCENTAGE(%)' FROM dwa_covid19_dash_summ_test WHERE KPI_NAME = 'MOBILITY_RATE'"));
        $_mobilityData = $_mobilityWeeks = $_mobilityInWeeklyData = $_mobilityOutWeeklyData = [];
        foreach($_mobilityRes as $_queryResData){
            $_queryResData = (array)$_queryResData;
            $_mobilityData[$_queryResData['MOBILITY_TYPE']][$_queryResData['DIVISION']][$_queryResData['WEEK']] = $_queryResData['PERCENTAGE(%)'];
            if(!in_array($_queryResData['WEEK'], $_mobilityWeeks)){
                $_mobilityWeeks[] = $_queryResData['WEEK'];
            }
        }
        asort($_mobilityWeeks);
        $_mobilityWeeks = array_values($_mobilityWeeks);

        $data['_mobilityWeeks']  = $_mobilityWeeks;

        foreach($_mobilityData as $_mobilityType => $_mobilityTypeData){
            foreach($_mobilityTypeData as  $_orgMobilityDivision => $_orgMobilityData){
                ksort($_orgMobilityData);
                $_mobilityDivisionWeeksData = array_values(array_map('intval', $_orgMobilityData));
                if($_mobilityType == "IN"){
//                    $_mobilityInWeeklyData[] = array('type' => 'area', 'name' => en2bnbyXLSX(strtoupper($_orgMobilityDivision)), 'data' => $_mobilityDivisionWeeksData, 'marker' => array('symbol' => 'circle'));
                    $_mobilityInWeeklyData[] = array('type' => 'area', 'name' => en2bnTranslation(strtoupper($_orgMobilityDivision)), 'data' => $_mobilityDivisionWeeksData, 'marker' => array('symbol' => 'circle'));
                }else if($_mobilityType == "OUT"){
//                    $_mobilityOutWeeklyData[] = array('type' => 'area', 'name' => en2bnbyXLSX(strtoupper($_orgMobilityDivision)), 'data' => $_mobilityDivisionWeeksData, 'marker' => array('symbol' => 'circle'));
                    $_mobilityOutWeeklyData[] = array('type' => 'area', 'name' => en2bnTranslation(strtoupper($_orgMobilityDivision)), 'data' => $_mobilityDivisionWeeksData, 'marker' => array('symbol' => 'circle'));
                }
            }
        }

        $data['_mobilityInWeeklyData']  = $_mobilityInWeeklyData;
        $data['_mobilityOutWeeklyData']  = $_mobilityOutWeeklyData;


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

        // search data
        if($_divisionSelName){
            $data['_divisionSelName'] = $_divisionSelName;
        } else {
            $data['_divisionSelName'] = null;
        }

        $_colorCode = array( '10' => '#FCAA94', '50' => '#F69475', '100' => '#F37366', '150' => '#E5515D', '1000' => '#CD3E52', 'high' => '#BC2B4C');
        $_groupDataColor = array();
        foreach($_mapDataGroupList as $dataGroupKeyVal => $dataGroupName){
            if($dataGroupName == 'Doubling_Rate') continue; // Error Handling
            $_groupDataColor[] = array('maxvalue' => $dataGroupKeyVal, 'displayvalue' => $dataGroupName, 'code' => ($dataGroupKeyVal > 1000)?$_colorCode['high']:$_colorCode[$dataGroupKeyVal]);
        }

        $_divisionCode = array('RANGPUR' => 'BD.RP', 'RAJSHAHI' => 'BD.RS', 'MYMENSINGH' => 'BD.MM', 'SYLHET' => 'BD.SY', 'DHAKA' => 'BD.DA', 'KHULNA' => 'BD.KH', 'BARISHAL' => 'BD.BA', 'BARISAL' => 'BD.BA', 'CHATTOGRAM' => 'BD.CG');

        $_divisionDistrictCode = array(
            'RANGPUR' => array('DINAJPUR' => 'BD.RP.DJ', 'GAIBANDHA' => 'BD.RP.GB', 'KURIGRAM' => 'BD.RP.KR', 'LALMONIRHAT' => 'BD.RP.LL', 'NILPHAMARI' => 'BD.RP.NP', 'PANCHAGARH' => 'BD.RP.PN', 'RANGPUR' => 'BD.RP.RP', 'THAKURGAON' => 'BD.RP.TH'),
            'RAJSHAHI' => array('BOGRA' => 'BD.RS.BO', 'JOYPURHAT' => 'BD.RS.JP', 'NAOGAON' => 'BD.RS.NA', 'NATORE' => 'BD.RS.NT', 'CHAPAINAWABGANJ' => 'BD.RS.NW', 'CHAPAI NAWABGANJ' => 'BD.RS.NW', 'NOWABGANJ' => 'BD.RS.NW', 'NAWABGANJ' => 'BD.RS.NW', 'PABNA' => 'BD.RS.PB', 'RAJSHAHI' => 'BD.RS.RS', 'SIRAJGANJ' => 'BD.RS.SR'),
            'MYMENSINGH' => array('JAMALPUR' => 'BD.MM.JM', 'MYMENSINGH' => 'BD.MM.MM', 'NETROKONA' => 'BD.MM.NK', 'SHERPUR' => 'BD.MM.SP'),
            'SYLHET' => array('HABIGANJ' => 'BD.SY.HA', 'HOBIGANJ' => 'BD.SY.HA', 'MOULVIBAZAR' => 'BD.SY.MB', 'MOULVI BAZAR' => 'BD.SY.MB', 'SUNAMGANJ' => 'BD.SY.SN', 'SYLHET' => 'BD.SY.SL'),
            'DHAKA' => array('DHAKA' => 'BD.DA.DH', 'FARIDPUR' => 'BD.DA.FR', 'GAZIPUR' => 'BD.DA.GZ', 'GOPALGANJ' => 'BD.DA.GG', 'KISHOREGANJ' => 'BD.DA.KS', 'MANIKGANJ' => 'BD.DA.MK', 'MUNSIGANJ' => 'BD.DA.MK', 'MUNSHIGANJ' => 'BD.DA.MU', 'NARAYANGANJ' => 'BD.DA.NY', 'NARSINGDHI' => 'BD.DA.NS', 'NARSINGDI' => 'BD.DA.NS', 'RAJBARY' => 'BD.DA.RB', 'RAJBARI' => 'BD.DA.RB', 'SARIATPUR' => 'BD.DA.SA', 'SHARIATPUR' => 'BD.DA.SA', 'TANGAIL' => 'BD.DA.TA', 'MADARIPUR' => 'BD.DA.MD'),
            'KHULNA' => array('BAGERHAT' => 'BD.KH.BH', 'CHUADANGA' => 'BD.KH.CD', 'JESSORE' => 'BD.KH.JS', 'JHENAIDAH' => 'BD.KH.JN', 'KHULNA' => 'BD.KH.KL', 'KUSHTIA' => 'BD.KH.KU', 'MAGURA' => 'BD.KH.MG', 'MEHERPUR' => 'BD.KH.ME', 'NARAIL' => 'BD.KH.NR', 'SATKHIRA' => 'BD.KH.ST'),
            'BARISAL' => array('BARGUNA' => 'BD.BA.BG', 'BARISAL' => 'BD.BA.BS', 'BHOLA' => 'BD.BA.BL', 'JHALOKATI' => 'BD.BA.JK', 'JHALAKATI' => 'BD.BA.JK', 'PATUAKHALI' => 'BD.BA.PT', 'PIROJPUR' => 'BD.BA.PR', 'PEROJPUR' => 'BD.BA.PR'),
            'CHATTOGRAM' => array('BANDARBAN' => 'BD.CG.BD', 'BRAHAMANBARIA' => 'BD.CG.BB', 'BRAHMANBARIA' => 'BD.CG.BB', 'CHANDPUR' => 'BD.CG.CP', 'CHATTOGRAM' => 'BD.CG.CT', 'COMILLA' => 'BD.CG.CM', "COX'S BAZAR" => 'BD.CG.CB', 'FENI' => 'BD.CG.FN', 'KHAGRACHHARI' => 'BD.CG.KG', 'LAKSHMIPUR' => 'BD.CG.LK', 'NOAKHALI' => 'BD.CG.NO', 'RANGAMATI' => 'BD.CG.PC')
        );

        $_divisionWiseInfacted = array();
        #echo $_divisionSelName;
        if($_divisionSelName && $_divisionSelName != 'all'){
            #print_r($_districtList); exit;
            foreach($_districtList as $_districtName => $_districtInfo){ #print_r($_districtInfo);exit;
                #if($_divisionName == NULL) continue; // Error Handling
                $_divisionWiseInfacted[] = array('id' => $_divisionDistrictCode[$_districtInfo['division']][$_districtName], 'value' => $_districtInfo['infected'], 'showLabel' => '1');
            }
        }else{
            foreach($_mapDataDistrictWiseInfectedRes as $_divisionName => $divisionInfected){ #print_r($_divisionName);exit;
                #if($_divisionName == NULL) continue; // Error Handling
                $_divisionWiseInfacted[] = array('id' => $_divisionCode[$_divisionName], 'value' => $divisionInfected);
            }
        }

        $_mapRegions = array(
            'all' => 'maps/bangladesh',
            'MYMENSINGH' => 'maps/mymensingh',
            'BARISAL' => 'maps/barisal',
            'RANGPUR' => 'maps/rangpur',
            'SYLHET' => 'maps/sylhet',
            'CHATTOGRAM' => 'maps/chittagong',
            'RAJSHAHI' => 'maps/rajshahi',
            'DHAKA' => 'maps/dhaka',
            'KHULNA' => 'maps/khulna'
        );

        //Data frame
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


        $dataType = $request->input('datatype');
        if(!is_null($dataType)) {
            if ($dataType == "riskzone") {
                $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'https://arcg.is/1iqf0T');
            } elseif ($dataType == "patientmobility") {
                $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'https://covid19mobility.cramstack.com/');
            } else if ($dataType == "citizenmobility") {
                $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'https://covid19mobility.cramstack.com/');
            } else if ($dataType == "synnoptic_surveillance") {
                $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'http://a2i-monitoring.sigmind.ai/home');
            } else if ($dataType == "ss_report") {
                $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'http://cdr.a2i.gov.bd/outlier_new/');
            } else if ($dataType == "sdp_monitoring") {
                $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'http://a2i-monitoring.sigmind.ai/home');
            } else if ($dataType == "analytics") {
                $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'https://app.powerbi.com/view?r=eyJrIjoiNmU2YWEwNTEtZWIwMC00M2Q2LTg5NzItMDI1YjEwNzM5NTNmIiwidCI6ImNkNTc1NTI0LTkyNTgtNGVkOC05NDg3LWUxYTIyN2JlMjkyYiIsImMiOjEwfQ%3D%3D&pageName=ReportSection96ba617637500cdc7529');
            } else if ($dataType == "detailsmap") {
                $_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'https://app.powerbi.com/view?r=eyJrIjoiNmU2YWEwNTEtZWIwMC00M2Q2LTg5NzItMDI1YjEwNzM5NTNmIiwidCI6ImNkNTc1NTI0LTkyNTgtNGVkOC05NDg3LWUxYTIyN2JlMjkyYiIsImMiOjEwfQ%3D%3D&pageName=ReportSection96ba617637500cdc7529');
            }

            $data['_groupDataColor']        = $_groupDataColor;
            $data['_divisionWiseInfacted']  = $_divisionWiseInfacted;
            $data['_mapRegions']            = $_mapRegions;
            $data['_districtSelName']       = $_districtSelName;
            $data['_upazillaSelName']       = $_upazillaSelName;
            $data['_requestedFrameData'] = $_requestedFrameData;
            return view('administrative.dataframe', $data);
        }

        $data['_groupDataColor']        = $_groupDataColor;
        $data['_divisionWiseInfacted']  = $_divisionWiseInfacted;
        $data['_mapRegions']            = $_mapRegions;
        $data['_districtSelName']       = $_districtSelName;
        $data['_upazillaSelName']       = $_upazillaSelName;



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

    protected function getUpazillaList(){
        $_translateData = NULL;

        $upazillaList = DB::table('upazila')->get();
        foreach($upazillaList as $_rowData){
            $_rowData = (array)$_rowData;
            $_translateData[] = array($_rowData['upazila_en'], $_rowData['upazila_bn'], $_rowData['district']);
        }
        return $_translateData;
    }

}
