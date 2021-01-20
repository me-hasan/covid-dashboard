<?php

namespace App\Http\Controllers\xpm;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function checkValidUser()
    {
        if (auth()->user()->user_type != 'hpm') {
            abort(401);
        }
    }

    public function forceFirstTimeResetPassword()
    {
        return view('auth.force_password_reset');
    }

    public function submitforceFirstTimePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6',
            'repassword' => 'required_with:password|same:password|min:6',
        ], [
            'password.required' => 'পাসওয়ার্ড টি কখনো ফাঁকা হতে পারবে না',
            'password.min' => 'পাসওয়ার্ড ৬ হরফ এর কম হতে পারবে না',
            'repassword.same' => 'পুনরাবৃত্তি পাসওয়ার্ড এবং পাসওয়ার্ড অবশ্যই একই হতে হবে',
        ]);

        auth()->user()->password = bcrypt($request->input('password'));
        auth()->user()->first_time_login_status = true;
        auth()->user()->save();
        // toastr()->success('sdfsdf');
        return redirect('/');
    }

    public function index(Request $request)
    {
        $this->checkValidUser();
        //$testPositivityMap = $this->testPositivityMap($request);

        $cumulativeInfectedPerson = $this->cumulativeInfectedPerson_nation($request);

        // shamvil start
        // row 1
        $data['nation_wide_MovingAvgInfected'] = $this->nation_wide_five_dayMovingAvgInfected($request);
        // row 2
        $data['forteen_day_infected'] = $this->get_14days_infected($request); // 14 days songcromon & songcromoner har
        $data['days_infected'] = $this->nation_wise_14_days_infected();
        $data['days_death'] = $this->nation_wise_14_days_death();
        $data['days_test_positivity'] = $this->nation_wise_14_days_test_positivity();

        /*$data['tests_per_case_Mayanmar'] = $this->tests_per_case_country('Myanmar');
        $data['tests_per_case_Sri'] = $this->tests_per_case_country('Sri Lanka');
        $data['tests_per_case_Nepal'] = $this->tests_per_case_country('Nepal');
        $data['tests_per_case_Maldives'] = $this->tests_per_case_country('Maldives');
        $data['tests_per_case_India'] = $this->tests_per_case_country('India');
        $data['tests_per_case_Pakistan'] = $this->tests_per_case_country('Pakistan');
        $data['tests_per_case_Bangladesh'] = $this->tests_per_case_country('Bangladesh');
         */

        // row 4
        $data['nation_hospital'] = $dhaka_hospital = $this->nation_wide_hospital();
        $data['dhaka_hospital'] = $dhaka_hospital = $this->city_wise_hospital('Dhaka');
        $data['ctg_hospital'] = $ctg_hospital = $this->city_wise_hospital('Chittagong');

        $data['dhaka_hospital_details'] = $dhaka_hospital_details = $this->city_wise_hospital_details('Dhaka');
        $data['ctg_hospital_details'] = $ctg_hospital_details = $this->city_wise_hospital_details('Chittagong');
        // row 6
        $data['rm_1'] = $this->risk_matrix_1();
        $data['rm_2'] = $this->risk_matrix_2();
        $data['rm_3'] = $this->risk_matrix_3();
        $data['rm_4'] = $this->risk_matrix_4();
        $data['rm_5'] = $this->risk_matrix_5();
        $data['rm_6'] = $this->risk_matrix_6();
        $data['rm_7'] = $this->risk_matrix_7();
        $data['rm_8'] = $this->risk_matrix_8();
        $data['rm_9'] = $this->risk_matrix_9();
        $data['first_week'] = $this->first_week();
        $data['last_week'] = $this->last_week();

        // description and insight
        $data['des_1'] = $this->description_insight_qry('101'); // Daily National Cases / সংক্রমণের ক্রমবর্ধমান দৈনিক পরিবর্তন
        $data['des_2'] = $this->description_insight_qry('201'); //Daily New Cases by Region / অঞ্চল তুলনা
        $data['des_3'] = $this->description_insight_qry('202'); //Total National Cases / সংক্রমণের ক্রমবর্ধমান পরিবর্তন
        $data['des_4'] = $this->description_insight_qry('301'); //Daily Tests and Cases / পরীক্ষা বনাম আক্রান্ত
        $data['des_5'] = $this->description_insight_qry('302'); // Tests vs Cases (Positivity Rate) / বিগত ১৪ দিনের সংক্রমণ ও সংক্রমণের হার
        $data['des_6'] = $this->description_insight_qry('303'); // Risk Map by District (14 Days) / পরীক্ষা ভিত্তিক ঝুঁকি
        $data['des_7'] = $this->description_insight_qry('304'); // Test Per Cases For South Asian Countries
        $data['des_8'] = $this->description_insight_qry('401'); // Risk Matrix
        $data['des_9'] = $this->description_insight_qry('501'); //  IMPACT IN POPULATION
        $data['des_10'] = $this->description_insight_qry('601'); // Nationwide Hospital Capacity And Occupancy
        $data['des_11'] = $this->description_insight_qry('701'); // Nationwide Hospital Capacity And Occupancy
        // shamvil end

        //Test vs Cases (Robi)
        $data['testsVsCases'] = $this->getNationWiseTestsAndCases($request);
        $i = 0;
        $divisionlist = [];
        $seriesData = [];
        /*
        $data['series_data'] = json_encode($seriesData);
        $data['categories'] = json_encode($cumulativeInfectedPerson['categories']) ?? [];
        $data['testPositivityMap'] = $testPositivityMap;

        // 5 oct
        $cumulativeInfectedPerson_onlyDhaka = $this->cumulativeInfectedPerson_dhaka($request);
        $k = 0;
        $dhk_divisionlist = [];
        $dhk_seriesData = [];
        if (count($cumulativeInfectedPerson_onlyDhaka['division_data'])) {
        foreach ($cumulativeInfectedPerson_onlyDhaka['division_data'] as $key => $dist) {
        $dhk_seriesData[$k]['type'] = 'spline';
        $dhk_seriesData[$k]['name'] = en2bnTranslation($key);
        $dhk_seriesData[$k]['data'] = $dist ?? [];
        $dhk_seriesData[$k]['marker']['enabled'] = false;
        $dhk_seriesData[$k]['marker']['symbol'] = 'circle';
        $dhk_divisionlist[] = $key;
        $k++;
        }
        }

        $data['series_data_dhk'] = json_encode($dhk_seriesData);
        $data['categories_dhk'] = json_encode($cumulativeInfectedPerson_onlyDhaka['categories']) ?? [];
         */

        // row 1 left side
        $cumulativeInfection = $this->getCumulativeInfectionData($request);
        $data['row1_left_trend_date'] = $cumulativeInfection['dateBangla'];
        $data['row1_left_trend_infected_data'] = $cumulativeInfection['infected_person_date'];

        $data['division_list'] = DB::table('div_dist')->groupBY('division')->pluck('division');

        $data['district_list'] = DB::table('div_dist')->get();

        $data['last_14_days'] = $this->getLast14DaysData($request);

        //$data['division_compare'] = $this->divisionCompare($request);
        $data['division_compare'] = [];

        $data['total_tested'] = DB::table('daily_data')->selectRaw('test_total')->orderBy('report_date', 'DESC')->first()->test_total;
        $data['total_infected'] = DB::table('daily_data')->selectRaw('infected_total')->orderBy('report_date', 'DESC')->first()->infected_total;
        $data['total_death'] = DB::table('daily_data')->selectRaw('death_total')->orderBy('report_date', 'DESC')->first()->death_total;
        //dd($data['total_death']);

        /*  $hospitalGeneralBedStacked = DB::select("SELECT date, alocatedGeneralBed as 'total_bed', AdmittedGeneralBed as 'occupied_bed',
        round(generalBedOccupencyRate, 2) as 'occupency_rate'
        from hospitaltemporarydata
        where city = 'Country' LIMIT 10");

        $data['hospitalGeneralBedStackedData'] =  json_encode($hospitalGeneralBedStacked); */

        return view('xpm.dashboard', $data);
    }

    public function divisionCompare()
    {
        
        $params = ['dhk' => 'DHAKA', 'ctg' => 'CHITTAGONG', 'khu' => 'KHULNA', 'mym' => 'MYMENSINGH', 'raj' => 'RAJSHAHI', 'ran' => 'RANGPUR', 'bar' => 'BARISAL', 'syl' => 'SYLHET'];
        $last_key = array_key_last($params);
        $comma = "";

        /* select fileds */
        $sql = "SELECT DHAKA.thedate AS date, ";
        foreach ($params as $select => $selectValue) {
            if ($select == $last_key) {
                $comma = "";
            } else {
                $comma = ",";
            }
            $sql .= " $selectValue.$select AS $select $comma";
        }

        // return $sql;
        $sql .= " FROM ";
        foreach ($params as $select => $selectValue) {
            if ($select == $last_key) {
                $comma = "";
            } else {
                $comma = ",";
            }

            $sql .= " ( SELECT
            a.thedate,
            Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                     FROM
                     (SELECT thedate, division,
            COALESCE(daily_cases, 0) AS daily_cases FROM
            (SELECT thedate, division, daily_cases from
            (SELECT thedate from calendardate where thedate >= '2020-05-20'
            and thedate <= (date_sub((SELECT max(date_of_test) from
            division_infected where division = '$selectValue'), interval 7 day))) as T1
            left join
            (SELECT date_of_test, division, daily_cases from  division_infected
            where division = '$selectValue') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                            where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 6
                        ), 2 ) AS '$select'
            FROM
            (SELECT thedate, division,
            COALESCE(daily_cases, 0) AS daily_cases FROM
            (SELECT thedate, division, daily_cases from
            (SELECT thedate from calendardate where thedate >= '2020-05-20'
            and thedate <= (date_sub((SELECT max(date_of_test) from
            division_infected where division = '$selectValue'), interval 7 day))) as T1
            left join
            (select date_of_test, division, daily_cases from  division_infected
            where division = '$selectValue') as T2 on T1.thedate=T2.date_of_test) as Q) as a) AS $selectValue $comma";
        }
        $sql .= " WHERE DHAKA.thedate = CHITTAGONG.thedate AND DHAKA.thedate = KHULNA.thedate AND DHAKA.thedate = MYMENSINGH.thedate AND  DHAKA.thedate = RAJSHAHI.thedate AND DHAKA.thedate = RANGPUR.thedate AND DHAKA.thedate = BARISAL.thedate AND DHAKA.thedate = SYLHET.thedate";

        try {
            $data = DB::select(DB::raw($sql));
            return $data;
        } catch (\Exception $exception) {
            return [];
        }

    }

    public function testPositivityMap($request)
    {
        try {
            $searchQuery = '';
            if ($request->has('hierarchy_level') && $request->hierarchy_level == 'divisional') {

                if ($request->has('district') && $request->district != '') {
                    $groupBy = 'district';
                    $district = $request->district;
                    if ($request->district == "COX'S BAZAR" || $request->district == "cox's bazar") {
                        $district = 'cox';
                    }
                    $searchQuery = " and  district like '%" . $district . "%' ";
                }

            }
// new query
            if ($searchQuery != '') {
//             $testPositivityMapSql = "select A.District, (A.Positive/B.Total)*100 as 'Test_Positivity' from
                // (select district as 'District', max(date_of_test) as 'last_date', count(id) as 'Positive'
                // from lab_clean_data
                // where test_result='Positive' ". $searchQuery."  group by district) as A
                // inner join
                // (select district as 'District', max(date_of_test) as 'last_date', count(id) as 'Total'
                // from lab_clean_data
                // where test_result='Positive' or test_result='Negative' group by district) as B using(District)";

                $testPositivityMapSql = " select district as District,round((positive_rate*100),2) as 'Test_Positivity' from test_positivity_rate_district
where date=((select max(date) from test_positivity_rate_district)) " . $searchQuery . " ";
            } else {
                $testPositivityMapSql = "select district as District,round((positive_rate*100),2) as 'Test_Positivity' from test_positivity_rate_district
where date=((select max(date) from test_positivity_rate_district))";
            }

            $testMapData = \Illuminate\Support\Facades\DB::select($testPositivityMapSql);
        } catch (\Exception $exception) {
            Log::error("test positivity error : " . $exception->getMessage());
        }
        return $testMapData;
    }

    private function getCumulativeInfectionData($request)
    {
        $dateQuery = 'Where True';
        if ($request->has('from_date') && $request->from_date != '') {
            $dateQuery .= ' AND date >=' . "'" . $request->from_date . "'";
        }
        if ($request->has('to_date') && $request->to_date != '') {
            $dateQuery .= ' AND date <=' . "'" . $request->to_date . "'";
        }
        $dateEnglish = $dateBangla = $infected_person_date = [];
        if ($request->division || $request->district) {
            $dateQuery = 'AND True';
            if ($request->has('from_date') && $request->from_date != '') {
                $dateQuery .= ' AND t.date >=' . "'" . $request->from_date . "'";
            }
            if ($request->has('to_date') && $request->to_date != '') {
                $dateQuery .= ' AND t.date <=' . "'" . $request->to_date . "'";
            }
            if ($request->has('division')) {
                $dateQuery .= ' AND Division =' . "'" . $request->division . "'";
            }
            if ($request->has('district')) {
                $dateQuery .= ' AND District =' . "'" . $request->district . "'";
            }

            $cumulativeData = DB::select("SELECT t.date,t.Division,t.District,
                               @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
                        FROM
                        (SELECT
                          Date, Division, District, sum(Infected_Person) as 'Infected_Person'
                          FROM div_dist_upz_infected_trend where Date is not null AND Date <= CURDATE()
                          GROUP BY Date, Division ) as t
                        JOIN (SELECT @running_total:=0) r
                        WHERE  t.date <= CURDATE() and t.date >= '2020-05-20' $dateQuery
                        ORDER BY t.date");
        } else {
            // $cumulativeData = DB::select("SELECT t.date,
            //                    @running_total:=@running_total + t.infected_person_count AS cumulative_infected_person
            //             FROM
            //             ( SELECT
            //               test_date as 'date',
            //               count(id) as 'infected_person_count'
            //               FROM infected_person where test_date is not null AND test_date <= CURDATE()
            //               GROUP BY test_date ) t
            //             JOIN (SELECT @running_total:=0) r
            //             WHERE  t.date <= CURDATE()
            //             ORDER BY t.date");

            $cumulativeData = DB::select(" SELECT date, cumulative_confirmed_cases AS cumulative_infected_person   FROM infected_cumulative $dateQuery and date >= '2020-05-20' ");
        }

        foreach ($cumulativeData as $key => $inf) {
            $get_date = date('Y-m-d', strtotime($inf->date));
            $get_date_bangla = convertEnglishDateToBangla($inf->date);
            if (!in_array($get_date, $dateEnglish, true)) {
                array_push($dateEnglish, $get_date);
                array_push($dateBangla, $get_date_bangla);
            }

            array_push($infected_person_date, doubleval($inf->cumulative_infected_person));
        }

        $data['dateEnglish'] = $dateEnglish;
        $data['dateBangla'] = $dateBangla;
        $data['infected_person_date'] = $infected_person_date;

        // dd($data);
        return $data;
    }

    public function cumulativeInfectedPerson_nation($request)
    {

        if ($request->has('division') && is_array($request->division) && count($request->division)) {

        }
        $dateQuery = ' Where TRUE';
        if ($request->has('from_date') && $request->from_date != '') {
            $dateQuery .= ' AND  thedate >=' . "'" . $request->from_date . "'";
        }
        if ($request->has('to_date') && $request->to_date != '') {
            $dateQuery .= ' AND thedate <=' . "'" . $request->to_date . "'";
        }

        /*$cumulativeSql = "select
        a.thedate,
        a.division,
        a.daily_cases,
        Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
        FROM
        (select thedate, division,
        COALESCE(daily_cases, 0) AS daily_cases FROM
        (select thedate, division, daily_cases from
        (select thedate from calendardate where thedate >= '2020-05-20' and thedate <=
        (select max(date_of_test) from
        division_infected where division = 'Dhaka')) as T1
        left join
        (select date_of_test, division, daily_cases from  division_infected
        where division = 'Dhaka') as T2 on T1.thedate=T2.date_of_test) as R) AS b
        where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
        ), 2 ) AS 'total_cases'
        FROM
        (select thedate, division,
        COALESCE(daily_cases, 0) AS daily_cases FROM
        (select thedate, division, daily_cases from
        (select thedate from calendardate where thedate >= '2020-05-20' and thedate <=
        (select max(date_of_test) from
        division_infected where division = 'Dhaka')) as T1
        left join
        (select date_of_test, division, daily_cases from  division_infected
        where division = 'Dhaka') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";*/
        $cumulativeSql = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'Dhaka') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'Dhaka') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";

        $cumulativeSql_dhk = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'Dhaka') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'Dhaka') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";

        $cumulativeSql_ctg = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'Chittagong') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'Chittagong') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";

        $cumulativeSql_barisal = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'barisal') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'barisal') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";

        $cumulativeSql_khulna = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'khulna') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'khulna') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";

        $cumulativeSql_rajshahi = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'rajshahi') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'rajshahi') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";

        $cumulativeSql_rangpur = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'rangpur') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'rangpur') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";

        $cumulativeSql_syl = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'sylhet') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'sylhet') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";
        //Mymensingh
        $cumulativeSql_mym = "select
	   a.thedate,
       a.division,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'Mymensingh') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, daily_cases from  division_infected
where division = 'Mymensingh') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery";

        $cumulativeData = \Illuminate\Support\Facades\DB::select($cumulativeSql);
        //   dd($cumulativeData);
        $cumulativeSql_dhk = \Illuminate\Support\Facades\DB::select($cumulativeSql_dhk);
        $cumulativeSql_ctg = \Illuminate\Support\Facades\DB::select($cumulativeSql_ctg);
        $cumulativeSql_barisal = \Illuminate\Support\Facades\DB::select($cumulativeSql_barisal);
        $cumulativeSql_khulna = \Illuminate\Support\Facades\DB::select($cumulativeSql_khulna);
        $cumulativeSql_rajshahi = \Illuminate\Support\Facades\DB::select($cumulativeSql_rajshahi);
        $cumulativeSql_rangpur = \Illuminate\Support\Facades\DB::select($cumulativeSql_rangpur);
        $cumulativeSql_syl = \Illuminate\Support\Facades\DB::select($cumulativeSql_syl);
        $cumulativeSql_mym = \Illuminate\Support\Facades\DB::select($cumulativeSql_mym);
        $j = 0;
        $dateData = [];
        $divisionData = [];
        $cumulativeData_2['Dhaka'] = array_map('intval', array_column($cumulativeSql_dhk, 'total_cases'));
        $cumulativeData_2['Chittagong'] = array_map('intval', array_column($cumulativeSql_ctg, 'total_cases'));
        $cumulativeData_2['Barisal'] = array_map('intval', array_column($cumulativeSql_barisal, 'total_cases'));
        $cumulativeData_2['Khulna'] = array_map('intval', array_column($cumulativeSql_khulna, 'total_cases'));
        $cumulativeData_2['Rajshahi'] = array_map('intval', array_column($cumulativeSql_rajshahi, 'total_cases'));
        $cumulativeData_2['Rangpur'] = array_map('intval', array_column($cumulativeSql_rangpur, 'total_cases'));
        $cumulativeData_2['Sylhet'] = array_map('intval', array_column($cumulativeSql_syl, 'total_cases'));
        $cumulativeData_2['Mymensingh'] = array_map('intval', array_column($cumulativeSql_mym, 'total_cases'));
        // + $cumulativeSql_ctg + $cumulativeSql_barisal + $cumulativeSql_khulna + $cumulativeSql_rajshahi + $cumulativeSql_rangpur + $cumulativeSql_syl + $cumulativeSql_mym ;
        foreach ($cumulativeData as $key => $div) {
            $div_date = date('d-M-Y', strtotime($div->thedate));

            if (!in_array(convertEnglishDateToBangla($div_date), $dateData)) {
                $dateData[] = convertEnglishDateToBangla($div_date);
            }

            $divisionData[$div->division][] = (int) $div->total_cases ?? 0;

            $j++;
        }
        $data['categories'] = $dateData;
        $data['division_data'] = $cumulativeData_2;
        //dd($data);
        return $data;

    }

    public function cumulativeInfectedPerson_dhaka($request = null)
    {
        $j = 0;
        $data = [];
        $dateData = [];
        $divisionData = [];

        $dateQuery = ' AND TRUE';
        if ($request->has('from_date') && $request->from_date != '') {
            $dateQuery .= ' AND  date_of_test >=' . "'" . $request->from_date . "'";
        }
        if ($request->has('to_date') && $request->to_date != '') {
            $dateQuery .= ' AND date_of_test <=' . "'" . $request->to_date . "'";
        }

        $cumulativeSql_dhk_sql = "select a.date_of_test, a.district, a.total_tests, a.positive_tests, round((a.positive_tests/a.total_tests), 2)*100
        as 'test_positivity' from
        (select date(date_of_test) as 'date_of_test', district, count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data
        WHERE  date_of_test is not null and date_of_test >= '2020-05-20'
        and date_of_test <=date_sub(curdate(), interval 7 day)
        and district = 'Dhaka' $dateQuery
        group by district, date(date_of_test)) as a order by a.date_of_test";

        $cumulativeData = \Illuminate\Support\Facades\DB::select($cumulativeSql_dhk_sql);
        $cumulativeSql_dhk = \Illuminate\Support\Facades\DB::select($cumulativeSql_dhk_sql);
        $cumulativeData_2['Dhaka'] = array_map('intval', array_column($cumulativeSql_dhk, 'test_positivity'));

        foreach ($cumulativeData as $key => $div) {
            $div_date = date('d-M-Y', strtotime($div->date_of_test));

            if (!in_array(convertEnglishDateToBangla($div_date), $dateData)) {
                $dateData[] = convertEnglishDateToBangla($div_date);
            }
            $divisionData[$div->district][] = (float) $div->test_positivity ?? 0;
            $j++;
        }
        $data['categories'] = $dateData;
        $data['division_data'] = $cumulativeData_2;
        //dd($data);
        return $data;

    }

    public function cumulativeInfectedPerson($request)
    {
        try {
            $data['categories'] = [];
            $data['division_data'] = [];
            $searchQuery = '';

            if ($request->has('division') && is_array($request->division) && count($request->division)) {
                $divisionReqData = "'" . implode("', '", $request->division) . "'";
                $searchQuery = " AND  Division IN (" . $divisionReqData . ")";
            }

            if ($searchQuery != '') {
                $cumulativeSql = "SELECT t.date,t.Division,
       @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
FROM
(SELECT
  Date, Division, sum(Infected_Person) as 'Infected_Person'
  FROM div_dist_upz_infected_trend where Date is not null and Date >= '2020-03-04' " . $searchQuery . "
  GROUP BY Date, Division ) as t
JOIN (SELECT @running_total:=0) r
ORDER BY t.date";

            } else {

                return false;

            }

            Log::info("cumulation sql: " . $cumulativeSql);

            $cumulativeData = \Illuminate\Support\Facades\DB::select($cumulativeSql);
            $j = 0;
            $dateData = [];
            $divisionData = [];
            foreach ($cumulativeData as $key => $div) {
                $div_date = date('d/m/Y', strtotime($div->date));

                if (!in_array($div_date, $dateData)) {
                    $dateData[] = $div_date;
                }

                $divisionData[$div->Division][] = (int) $div->cumulative_infected_person ?? 0;

                $j++;
            }
            $data['categories'] = $dateData;
            $data['division_data'] = $divisionData;
        } catch (\Exception $exception) {
            dd($exception);
            Log::error("cumulativeInfectedPerson error : " . $exception->getMessage());
        }

        //dd($data);
        return $data;
    }

    public function getCumulativeInfectedData(Request $request)
    {
        $result['status'] = 'failed';
        $seriesData = array();
        try {
            $is_division = false;

            // $cumulativeInfectedPerson = $this->cumulativeInfectedPerson($request);
            $cumulativeInfectedPerson = $this->cumulativeInfectedPerson_nation($request);
            $cumulativeDisUpaZillaData = $this->cumulativeDivDistData($request);

            $formattedData = [];
            $i = 0;
            if ($request->has('district') && count($request['district'])) {
                $formattedData = $cumulativeDisUpaZillaData['districtData'];
            } elseif ($request->has('upazilla') && count($request['upazilla'])) {
                $formattedData = $cumulativeDisUpaZillaData['upazillaData'];
            } else {
                $is_division = true;
                $formattedData = $cumulativeInfectedPerson['division_data'] ?? [];
            }
            if (count($formattedData)) {
                foreach ($formattedData as $key => $dist) {
                    if ($is_division == true) {
                        if (isset($request['division']) && !in_array($key, $request['division'])) {
                            continue;
                        }
                    }
                    //dd($key);
                    if (isset($dist['bn'])) {
                        unset($dist['bn']);
                    }

                    $seriesData[$i]['type'] = 'spline';

                    $seriesData[$i]['name'] = en2bnTranslation($key);
                    $seriesData[$i]['data'] = $dist ?? [];
                    $seriesData[$i]['marker']['enabled'] = false;
                    $seriesData[$i]['marker']['symbol'] = 'circle';
                    // $seriesData[$i]['dashStyle'] = "shortdot";
                    $i++;
                }

            }
            $result['district_data'] = $cumulativeDisUpaZillaData['districtData'] ?? [];
            $result['upazillaData'] = $cumulativeDisUpaZillaData['upazillaData'] ?? [];
            $result['series_data'] = json_encode($seriesData);
            if ($is_division) {
                $result['categories'] = json_encode($cumulativeInfectedPerson['categories']) ?? [];
            } else {
                $result['categories'] = json_encode($cumulativeDisUpaZillaData['categories']) ?? [];
            }

            $result['status'] = 'success';

        } catch (\Exception $exception) {
            $result['status'] = 'failed';
            \Log::error('getCumulativeInfectedData:' . $exception->getMessage() . '---' . $exception->getFile() . '---' . $exception->getLine());
        }

        return $result;

    }

    // private function cumulativeDivDistData($request) {
    //     try{
    //         $searchQuery = "";
    //         $cumulativeSqlDistrictUpazilaSql = "";
    //         $upzillaData = [];
    //         $districtData = [];
    //         if($request->has('division') && count($request->division)) {
    //             $divisionReqData = "'" . implode ( "', '", $request->division ) . "'";
    //             $searchQuery = " AND  Division IN (". $divisionReqData.")";

    //             $cumulativeSqlDistrictUpazilaSql = " select Division, District, Upazila, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend
    //             where date is not null ".$searchQuery." group by Division, date order by Date ";
    //         }
    //         if($request->has('district') && count($request->district)) {
    //             $districtReqData = "'" . implode ( "', '", $request->district ) . "'";
    //             $searchQuery = " AND  District IN (". $districtReqData.")";

    //             $cumulativeSqlDistrictUpazilaSql = " select Division, District, Upazila, date, sum(infected_person) AS cumulative_infected_person from div_dist_upz_infected_trend
    //             where date is not null  ".$searchQuery."  group by District, date order by date ";
    //         }

    //         if($request->has('upazilla') && count($request->upazilla)) {
    //             $districtReqData = "'" . implode ( "', '", $request->upazilla ) . "'";
    //             $searchQuery = " AND  Upazila IN (". $districtReqData.")";

    //             $cumulativeSqlDistrictUpazilaSql = " select Division, District, Upazila, date, infected_person AS cumulative_infected_person from div_dist_upz_infected_trend
    //             where date is not null  ".$searchQuery."  order by date ";
    //         }

    //         // $cumulativeSqlDistrictUpazilaSql = "SELECT t.date,t.Division, t.District,t.Upazila,
    //         //     @running_total:=@running_total + t.Infected_Person AS cumulative_infected_person
    //         // FROM
    //         // (SELECT
    //         //   Date, Division, District, Upazila, sum(Infected_Person) as 'Infected_Person'
    //         //   FROM div_dist_upz_infected_trend where Date is not null  ".$searchQuery."
    //         //   GROUP BY Date, Upazila ) as t
    //         // JOIN (SELECT @running_total:=0) r
    //         // ORDER BY t.date";

    //         $cumulativeDisUpaZillaData = \Illuminate\Support\Facades\DB::select($cumulativeSqlDistrictUpazilaSql);
    //         //dd($cumulativeDisUpaZillaData);
    //         $j=0;
    //         $dateData = [];
    //         $districtData = [];
    //         foreach ($cumulativeDisUpaZillaData as $key => $div) {
    //             $div_date = date('d/m/Y', strtotime($div->date));

    //             if(!in_array($div_date, $dateData)){
    //                 $dateData[] = $div_date;
    //             }

    //             $districtData[$div->District][] = (int)$div->cumulative_infected_person ?? 0;
    //             $districtData[$div->District]['bn'] = en2bnTranslation($div->District);
    //             $j++;
    //         }
    //         // 19-sep-2020
    //         foreach ($cumulativeDisUpaZillaData as $key => $div) {
    //             $upzillaDate = date('d/m/Y', strtotime($div->date));

    //             if(!in_array($upzillaDate, $dateData)){
    //                 $dateData[] = $upzillaDate;
    //             }

    //             $upzillaData[$div->Upazila][] = (int)$div->cumulative_infected_person ?? 0;
    //             $upzillaData[$div->Upazila]['bn'] = en2bnTranslation($div->Upazila);
    //             $j++;
    //         }
    //         $data['categories'] = $dateData;
    //         $data['districtData'] = $districtData;
    //         $data['upazillaData'] = $upzillaData;

    //     }catch (\Exception $exception) {
    //         Log::error("cumulativeDivDistData error : ". $exception->getMessage());
    //     }
    //     return $data;

    // }

    private function cumulativeDivDistData($request)
    {
        $data = array();
        try {
            $searchQuery = "";
            $cumulativeSqlDistrictUpazilaSql = "";
            $upzillaData = [];
            $districtData = [];

            $dateQuery = ' Where TRUE';
            if ($request->has('from_date') && $request->from_date != '') {
                $dateQuery .= ' AND  thedate >=' . "'" . $request->from_date . "'";
            }
            if ($request->has('to_date') && $request->to_date != '') {
                $dateQuery .= ' AND thedate <=' . "'" . $request->to_date . "'";
            }

//            f($request->has('division') && count($request->division)) {
            //                $divisionReqData = "'" . implode ( "', '", $request->division ) . "'";
            //                $searchQuery = "  (". $divisionReqData.")";
            //
            //                $cumulativeSqlDistrictUpazilaSql = "SELECT * FROM `district_wise_cases_covid` WHERE `division_eng` IN ".$searchQuery;
            //                $cumulativeDisUpaZillaData[] = \Illuminate\Support\Facades\DB::select($cumulativeSqlDistrictUpazilaSql);
            //            }
            if ($request->has('district') && count($request->district)) {
                $districtReqData = "'" . implode("', '", $request->district) . "'";
                $searchQuery = "   (" . $districtReqData . ")";
                $districts = $request->district;
                $cumulativeDisUpaZillaData = [];
                if (count($districts)) {
                    foreach ($districts as $district) {
                        if ($district == 'Jhalakati') {
                            $district = 'Jhalokati';
                        }

                        if ($district == 'Coxs Bazar' || $district == 'Cox Bazar') {
                            $district = "Cox\'s Bazar";
                        }

                        $cumulativeSqlDistrictUpazilaSql = "select
	   a.thedate,
       a.division,
       a.district,
       a.daily_cases,
       Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                FROM
                (select thedate, division, district,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, district, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, district, daily_cases from  division_district_infected
where district = '" . $district . "') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 4
              ), 2 ) AS 'total_cases'
FROM
(select thedate, division, district,
COALESCE(daily_cases, 0) AS daily_cases FROM
(select thedate, division, district, daily_cases from
(select thedate from calendardate where thedate >= '2020-05-20'
and thedate <= date_sub(curdate(), interval 7 day)) as T1
left join
(select date_of_test, division, district, daily_cases from  division_district_infected
where district = '" . $district . "') as T2 on T1.thedate=T2.date_of_test) as Q) as a $dateQuery ORDER BY thedate";

                        $cumulativeDisUpaZillaData[$district] = \Illuminate\Support\Facades\DB::select($cumulativeSqlDistrictUpazilaSql);
                    }
                }

            }

            /*if($request->has('upazilla') && count($request->upazilla)) {
            $districtReqData = "'" . implode ( "', '", $request->upazilla ) . "'";
            $searchQuery = " AND  Upazila IN (". $districtReqData.")";

            $cumulativeSqlDistrictUpazilaSql = " select Division, District, Upazila, date, infected_person AS cumulative_infected_person from div_dist_upz_infected_trend
            where date is not null  ".$searchQuery."  order by date ";
            }*/

            $j = 0;
            $dateData = [];
            $districtData = [];
            foreach ($cumulativeDisUpaZillaData as $key => $districtDataInfo) {
                if (count($districtDataInfo)) {
                    foreach ($districtDataInfo as $div) {

                        $div_date = date('d-M-Y', strtotime($div->thedate));

                        if (!in_array(convertEnglishDateToBangla($div_date), $dateData)) {
                            $dateData[] = convertEnglishDateToBangla($div_date);
                        }
                        if ($key == "Cox\'s Bazar" || $key == 'Cox Bazar') {
                            $key = 'Coxs Bazar';
                        }
                        $districtData[strtolower($key)][] = (float) $div->total_cases ?? 0;
                        $districtData[strtolower($key)]['bn'] = en2bnTranslation($key);
                        $j++;
                    }
                }
                //dd($div);

            }
            // 19-sep-2020
            // foreach ($cumulativeDisUpaZillaData as $key => $div) {
            //     $upzillaDate = date('d/m/Y', strtotime($div->date));

            //     if(!in_array($upzillaDate, $dateData)){
            //         $dateData[] = $upzillaDate;
            //     }

            //     $upzillaData[$div->Upazila][] = (int)$div->cumulative_infected_person ?? 0;
            //     $upzillaData[$div->Upazila]['bn'] = en2bnTranslation($div->Upazila);
            //     $j++;
            // }
            //dd($dateData);
            $data['categories'] = $dateData;
            $data['districtData'] = $districtData;
            $data['upazillaData'] = $upzillaData;

        } catch (\Exception $exception) {
            Log::error("cumulativeDivDistData error : " . $exception->getMessage());
        }
        return $data;

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
        from hospitaltemporarydata where city='" . $city . "' and date = (select max(date) from hospitaltemporarydata) ");

        return $city_wise_hospital[0];
    }

    private function city_wise_hospital_details($city)
    {
        $city_wise_hospital_details = DB::select("SELECT * FROM hospitaltemporarydata WHERE city='" . $city . "'");

        return $city_wise_hospital_details;
    }

    private function risk_matrix_1($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {

        $risk_matrix = DB::select("select count(l.district) as 'low_to_high' from
(select district from last_14_days_test_positivity_district where test_positivity<$test_positive_min) as l
inner join
(select district from recent_14_days_test_positivity_district where test_positivity>=$test_positive_max
 and total_tests>$testCount) as r
using(district)");

        return $risk_matrix[0];
    }

    private function risk_matrix_2($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $risk_matrix = DB::select("select count(l.district) as 'low_to_medium' from
(select district from last_14_days_test_positivity_district where test_positivity<$test_positive_min) as l
inner join
(select district from recent_14_days_test_positivity_district where test_positivity>=$test_positive_min
and test_positivity<$test_positive_max and total_tests>$testCount) as r
using(district)");

        return $risk_matrix[0];
    }

    private function risk_matrix_3($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $risk_matrix = DB::select(" select count(l.district) as 'low_to_low'   from
        (select district from last_14_days_test_positivity_district where test_positivity<$test_positive_min) as l
        inner join
        (select district from recent_14_days_test_positivity_district where test_positivity<$test_positive_min
        and total_tests>$testCount) as r
        using(district)");

        return $risk_matrix[0];
    }

    private function risk_matrix_4($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $risk_matrix = DB::select("select count(l.district) as 'medium_to_high' from
(select district from last_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max) as l
inner join
(select district from recent_14_days_test_positivity_district where test_positivity>=$test_positive_max
and total_tests>$testCount) as r
using(district)");

        return $risk_matrix[0];
    }

    private function risk_matrix_5($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $risk_matrix = DB::select("select count(l.district) as 'medium_to_medium' from
(select district from last_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max) as l
inner join
(select district from recent_14_days_test_positivity_district where test_positivity>=$test_positive_min and
test_positivity<$test_positive_max and total_tests>$testCount) as r
using(district)");

        return $risk_matrix[0];
    }

    private function risk_matrix_6($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $risk_matrix = DB::select("select count(l.district) as 'medium_to_low' from
(select district from last_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max) as l
inner join
(select district from recent_14_days_test_positivity_district where test_positivity<$test_positive_min
and total_tests>$testCount) as r
using(district)");

        return $risk_matrix[0];
    }

    private function risk_matrix_7($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $risk_matrix = DB::select("select count(l.district) as 'high_to_high' from
(select district from last_14_days_test_positivity_district where test_positivity>=$test_positive_max) as l
inner join
(select district from recent_14_days_test_positivity_district where test_positivity>=$test_positive_max
 and total_tests>$testCount) as r
using(district)");

        return $risk_matrix[0];
    }

    private function risk_matrix_8($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $risk_matrix = DB::select("select count(l.district) as 'high_to_medium' from
(select district from last_14_days_test_positivity_district where test_positivity>=$test_positive_max) as l
inner join
(select district from recent_14_days_test_positivity_district where test_positivity>=$test_positive_min
and test_positivity<$test_positive_max and total_tests>$testCount) as r
using(district)");

        return $risk_matrix[0];
    }

    private function risk_matrix_9($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $risk_matrix = DB::select("select count(l.district) as 'high_to_low' from
(select district from last_14_days_test_positivity_district where test_positivity>=$test_positive_max) as l
inner join
(select district from recent_14_days_test_positivity_district where test_positivity<$test_positive_min
and total_tests>$testCount) as r
using(district)");

        return $risk_matrix[0];
    }

    private function getLast14DaysData($request)
    {
        try {
            $getLast14DaysDeathData = [];
            $getLast14DaysTestData = [];
            $getLast14DaysinfectedData = [];
            $searchQuery = '';
            if ($request->has('division') && $request->division != '') {
                $division = $request->division ?? '';
                $searchQuery = " AND  Division = '" . $division . "'";
            }
            if ($request->has('district') && $request->district != '') {
                $district = $request->district ?? '';
                $searchQuery .= " AND  District = '" . $district . "'";
            }

            if ($request->has('upazila') && $request->upazila != '') {
                $upazilla = $request->upazila ?? '';

                $searchQuery .= " AND  Upazila = '" . $upazilla . "'";
            }

            $searchQuery = ''; // fridge

            if ($searchQuery != '') {
                /*infected_datasql*/
                $getLast14DaysDataSql = "select @div_curr_fourtten_days_infected_person:=(select sum(Infected_Person)
from div_dist_upz_infected_trend where
date<=(select max(date) from Div_Dist_Upz_Infected_Trend)
and date>DATE_SUB((select max(date) from Div_Dist_Upz_Infected_Trend), INTERVAL 14 DAY) " . $searchQuery . ")";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @div_last_fourtten_days_infected_person:=(select sum(Infected_Person) from div_dist_upz_infected_trend where
date<=DATE_SUB((select max(date) from Div_Dist_Upz_Infected_Trend), INTERVAL 14 DAY)
and date>DATE_SUB(DATE_SUB((select max(date) from Div_Dist_Upz_Infected_Trend), INTERVAL 14 DAY), INTERVAL 14 DAY)  " . $searchQuery . ")";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @div_curr_fourtten_days_infected_person as 'curr_fourtten_days_infected_person', @div_last_fourtten_days_infected_person as  'last_fourtten_days_infected_person',
(@div_curr_fourtten_days_infected_person-@div_last_fourtten_days_infected_person) as 'Difference'";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);

                /*test_data_sql*/
                $getLast14DaysDataSql = "select @div_curr_fourtten_days_test:=(select sum(NumberOfTest) from Div_Dist_Upz_Test_Number where
date<=(select max(date) from Div_Dist_Upz_Test_Number) and
date>DATE_SUB((select max(date) from Div_Dist_Upz_Test_Number), INTERVAL 14 DAY) " . $searchQuery . ")";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @div_last_fourtten_days_test:=(select sum(NumberOfTest) from Div_Dist_Upz_Test_Number where
date<=DATE_SUB((select max(date) from Div_Dist_Upz_Test_Number), INTERVAL 14 DAY) and
date>DATE_SUB(DATE_SUB((select max(date) from Div_Dist_Upz_Test_Number), INTERVAL 14 DAY), INTERVAL 14 DAY)" . $searchQuery . ")";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @div_curr_fourtten_days_test as 'curr_fourtten_days_test', @div_last_fourtten_days_test as 'last_fourtten_days_infected_test',
(@div_curr_fourtten_days_test - @div_last_fourtten_days_test) as 'Difference'";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);

            } else {
                /*infected_datasql*/
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_infected_person:=(select sum(infected_24_hrs)
from daily_data where report_date<=(select max(report_date)
from daily_data) and report_date>DATE_SUB((select max(report_date)
from daily_data), INTERVAL 14 DAY))";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_last_fourtten_days_infected_person:=(select sum(infected_24_hrs) from daily_data where
report_date<=DATE_SUB((select max(report_date) from daily_data), INTERVAL 14 DAY) and
report_date>DATE_SUB(DATE_SUB((select max(report_date) from daily_data),
INTERVAL 14 DAY), INTERVAL 14 DAY))";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_infected_person as 'curr_fourtten_days_infected_person', @nat_last_fourtten_days_infected_person as 'last_fourtten_days_infected_person',
round((@nat_curr_fourtten_days_infected_person-@nat_last_fourtten_days_infected_person),0) as 'Difference'";
                $getLast14DaysinfectedData = DB::select($getLast14DaysDataSql);

                /*testData sql*/
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_test:=(select sum(test_24_hrs)
from daily_data where report_date<=(select max(report_date)
from daily_data) and report_date>DATE_SUB((select max(report_date)
from daily_data), INTERVAL 14 DAY))";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_last_fourtten_days_test:=(select sum(test_24_hrs) from daily_data where
report_date<=DATE_SUB((select max(report_date) from daily_data), INTERVAL 14 DAY) and
report_date>DATE_SUB(DATE_SUB((select max(report_date) from daily_data),
INTERVAL 14 DAY), INTERVAL 14 DAY))";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_test as 'curr_fourtten_days_test', @nat_last_fourtten_days_test as 'last_fourtten_days__test',
round((@nat_curr_fourtten_days_test-@nat_last_fourtten_days_test),0) as 'Difference'";
                $getLast14DaysTestData = DB::select($getLast14DaysDataSql);

                /*death data*/
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_death:=(select sum(death_24_hrs)
from daily_data where report_date<=(select max(report_date)
from daily_data) and report_date>DATE_SUB((select max(report_date)
from daily_data), INTERVAL 14 DAY))";
                $getLast14DaysDeathData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_last_fourtten_days_infected_death:=(select sum(death_24_hrs) from daily_data where
report_date<=DATE_SUB((select max(report_date) from daily_data), INTERVAL 14 DAY) and
report_date>DATE_SUB(DATE_SUB((select max(report_date) from daily_data),
INTERVAL 14 DAY), INTERVAL 14 DAY))";
                $getLast14DaysDeathData = DB::select($getLast14DaysDataSql);
                $getLast14DaysDataSql = "select @nat_curr_fourtten_days_death as 'curr_fourtten_days_death', @nat_last_fourtten_days_infected_death as 'last_fourtten_days_infected_death',
round((@nat_curr_fourtten_days_death-@nat_last_fourtten_days_infected_death),0) as 'Difference'";
                $getLast14DaysDeathData = DB::select($getLast14DaysDataSql);

            }

        } catch (\Exception $exception) {
            Log::error('Get last 14 days data ' . json_encode($request->all()));
        }

        $data['getLast14DaysDeathData'] = $getLast14DaysDeathData;
        $data['getLast14DaysTestData'] = $getLast14DaysTestData;
        $data['getLast14DaysinfectedData'] = $getLast14DaysinfectedData;
        return $data;
    }

    private function nation_wise_14_days_infected()
    {
        $nation_wise_14_days_infected = DB::select(" select * from (
            SELECT
               a.report_date,
               a.infected_24_hrs,
               Round( ( SELECT SUM(b.infected_24_hrs) / COUNT(b.infected_24_hrs)
                        FROM daily_data AS b
                        WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 6
                      ), 2 ) AS 'seven_dayMovingAvg'
            FROM daily_data AS a
            ORDER BY a.report_date desc limit 14) T order by report_date ");

        return $nation_wise_14_days_infected;
    }

    private function nation_wise_14_days_death()
    {
        $nation_wise_14_days_death = DB::select(" select * from (
        SELECT
               a.date,
               a.no_of_death,
               Round( ( SELECT SUM(b.no_of_death) / COUNT(b.no_of_death)
                        FROM death_number AS b
                        WHERE DATEDIFF(a.date, b.date) BETWEEN 0 AND 6
                      ), 2 ) AS 'seven_dayMovingAvg'
             FROM death_number AS a
             ORDER BY a.date desc limit 14) T order by date ");

        return $nation_wise_14_days_death;
    }

    private function nation_wise_14_days_test_positivity()
    {
        $nation_wise_14_days_test_positivity = DB::select(" SELECT * FROM (
        SELECT
               a.date,
               a.test_positivity,
               ROUND( ( SELECT SUM(b.test_positivity) / COUNT(b.test_positivity)
                        FROM daily_test_positivity_natn AS b
                        WHERE DATEDIFF(a.date, b.date) BETWEEN 0 AND 6
                      ), 2 ) AS 'seven_dayMovingAvg'
             FROM daily_test_positivity_natn AS a
             ORDER BY a.date DESC LIMIT 14) T ORDER BY DATE ");

        return $nation_wise_14_days_test_positivity;
    }

    private function tests_per_case_country($country)
    {
        $country_component = str_replace(" ", "_", strtoupper($country));
        $seconds = 86400;
        $tests_per_case_country = cache()->remember('tests_per_case_country.' . $country_component, $seconds, function () use ($country) {
            return DB::select("select * from countries_tests_per_case
            where country = '" . $country . "'
            and date = (select max(date) from countries_tests_per_case where country = '" . $country . "')");

        });
        return $tests_per_case_country[0];
    }

    private function nation_wide_five_dayMovingAvgInfected($request)
    {
        $searchQuery = 'Where True';
        if ($request->has('from_date') && $request->from_date != '') {
            $searchQuery .= ' AND T.report_date >=' . "'" . $request->from_date . "'";
        }
        if ($request->has('to_date') && $request->to_date != '') {
            $searchQuery .= ' AND T.report_date <=' . "'" . $request->to_date . "'";
        }
        if ($request->has('division') && $request->division && $request->district == '') {

            $five_dayMovingAvgInfected = DB::select("select * from (
SELECT
       a.test_date as report_date,
       a.division,
       a.infected as infected_24_hrs,
       Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                FROM daily_infected_div AS b
                WHERE b.division= '$request->division' and DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 6
              ), 2 ) AS 'five_dayMovingAvgInfected'
     FROM daily_infected_div AS a WHERE a.division= '$request->division'
     and a.test_date >= '2020-03-08'
     ORDER BY a.test_date) T $searchQuery order by report_date");
        } elseif ($request->has('district') && $request->district) {
            $five_dayMovingAvgInfected = DB::select("select * from (
SELECT
       a.test_date as report_date,
       a.district,
       a.infected as infected_24_hrs,
       Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                FROM daily_infected_dist AS b
                WHERE b.district= '$request->district' and DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 6
              ), 2 ) AS 'five_dayMovingAvgInfected'
     FROM daily_infected_dist AS a WHERE a.district= '$request->district'
     and a.test_date >= '2020-03-08'
     ORDER BY a.test_date) T $searchQuery order by report_date");
        } else {
            $five_dayMovingAvgInfected = DB::select(" SELECT * FROM (
        SELECT
               a.report_date,
               a.infected_24_hrs,
               ROUND( ( SELECT SUM(b.infected_24_hrs) / COUNT(b.infected_24_hrs)
                       FROM daily_data AS b
            WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 6
                      ), 2 ) AS 'five_dayMovingAvgInfected'
             FROM daily_data AS a
             ORDER BY a.report_date) T $searchQuery ORDER BY report_date ");
        }

        // dd($five_dayMovingAvgInfected);

        return $five_dayMovingAvgInfected;
    }

    protected function getNationWiseTestsAndCases($request)
    {
        $dateQuery = ' Where TRUE';
        if ($request->has('from_date') && $request->from_date != '') {
            $dateQuery .= ' AND  T.report_date >=' . "'" . $request->from_date . "'";
        }
        if ($request->has('to_date') && $request->to_date != '') {
            $dateQuery .= ' AND T.report_date <=' . "'" . $request->to_date . "'";
        }
        $testDateQuery = ' Where TRUE';
        if ($request->has('from_date') && $request->from_date != '') {
            $testDateQuery .= ' AND T.test_date >=' . "'" . $request->from_date . "'";
        }
        if ($request->has('to_date') && $request->to_date != '') {
            if ($testDateQuery == '') {
                $testDateQuery .= ' AND T.test_date <= ' . "'" . $request->to_date . "'";
            } else {
                $testDateQuery .= ' AND T.test_date <=' . "'" . $request->to_date . "'";
            }
        }

        $dailyTests = $dailyCases = [];
        $dateRange = $totalTest = $totalCase = [];
        $categories = $totalTestData = $totalCaseData = [];
        if ($request->division && $request->district && $request->upazila) {
            $dailyTests = DB::select("select * from (
            SELECT a.date as report_date, a.division, a.district, a.upazila, a.NumberOfTest,
                   Round( ( SELECT SUM(b.NumberOfTest) / COUNT(b.NumberOfTest)
                            FROM div_dist_upz_test_number AS b
                            WHERE b.upazila= '" . $request->upazila . "' and date is not null and DATEDIFF(a.date, b.date) BETWEEN 0 AND 6
                          ), 2 ) AS 'fiveDayMovingAvgTest'
                 FROM div_dist_upz_test_number AS a WHERE a.upazila= '" . $request->upazila . "' and date is not null ORDER BY a.date) T  $dateQuery order by report_date");
            //Daily cases query
            $dailyCases = DB::select("select * from (
            SELECT
                   a.test_date, a.division, a.district, a.upazila, a.upz_code, a.infected,
                   Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                            FROM daily_infected_upz AS b
                            WHERE b.upazila= '" . $request->upazila . "' and test_date is not null and DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 6
                          ), 2 ) AS 'fiveDayMovingAvgInfected'
                 FROM daily_infected_upz AS a WHERE a.upazila= '" . $request->upazila . "' and test_date is not null
                 ORDER BY a.test_date) T $testDateQuery order by test_date");

        } elseif ($request->division && $request->district) {
            $dailyTests = DB::select("select * from (
            SELECT
                   a.date as report_date, a.division, a.district,  a.no_of_test,
                   Round( ( SELECT SUM(b.no_of_test) / COUNT(b.no_of_test)
                            FROM daily_test_number_dist AS b
                            WHERE b.district = '" . $request->district . "' and
                            date is not null and DATEDIFF(a.date, b.date) BETWEEN 0 AND 6
                        ), 2 ) AS 'fiveDayMovingAvgTest'
                 FROM daily_test_number_dist AS a where a.district = '" . $request->district . "' and date is not null
                  ORDER BY a.date) T $dateQuery order by report_date");
            $dailyCases = DB::select("select * from (
            SELECT
                   a.test_date, a.district, a.infected,
                   Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                            FROM daily_infected_dist AS b
                            WHERE b.district= '" . $request->district . "' and DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 6
                          ), 2 ) AS 'fiveDayMovingAvgInfected'
                 FROM daily_infected_dist AS a WHERE a.district= '" . $request->district . "'
                 ORDER BY a.test_date) T $testDateQuery order by test_date");

        } elseif ($request->division) {
            $dailyTests = DB::select("select * from (
            SELECT
                   a.date as report_date , a.division, a.no_of_test,
                   Round( ( SELECT SUM(b.no_of_test) / COUNT(b.no_of_test)
                            FROM daily_test_number_div AS b
                            WHERE b.division = '" . $request->division . "' and
                            date is not null and DATEDIFF(a.date, b.date) BETWEEN 0 AND 6
                        ), 2 ) AS 'fiveDayMovingAvgTest'
                 FROM daily_test_number_div AS a where a.division = '" . $request->division . "' and date is not null
                 and date >= '2020-03-08'
                  ORDER BY a.date) T $dateQuery order by report_date");
            //Daily cases query
            $dailyCases = DB::select("select * from (
            SELECT
                   a.test_date, a.division, a.infected,
                   Round( ( SELECT SUM(b.infected) / COUNT(b.infected)
                            FROM daily_infected_div AS b
                            WHERE b.division= '" . $request->division . "' and DATEDIFF(a.test_date, b.test_date) BETWEEN 0 AND 6
                          ), 2 ) AS 'fiveDayMovingAvgInfected'
                 FROM daily_infected_div AS a WHERE a.division= '" . $request->division . "'
                 and a.test_date >= '2020-03-08'
                 ORDER BY a.test_date) T $testDateQuery order by test_date");
//                        dd($dailyTests, $dailyCases);
        } else {
            $dailyTests = DB::select("select * from (
            SELECT
                   a.report_date,
                   a.test_24_hrs,
                   Round( ( SELECT SUM(b.test_24_hrs) / COUNT(b.test_24_hrs)
                           FROM daily_data AS b
                WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 6
                          ), 2 ) AS 'fiveDayMovingAvgTest'
                 FROM daily_data AS a
                 ORDER BY a.report_date) T  $dateQuery AND report_date>='2020-05-20' order by report_date ");
            //Daily cases query
            $dailyCases = DB::select("select * from (
                SELECT
                       a.report_date,
                       a.infected_24_hrs,
                       Round( ( SELECT SUM(b.infected_24_hrs) / COUNT(b.infected_24_hrs)
                               FROM daily_data AS b
                    WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 6
                              ), 2 ) AS 'fiveDayMovingAvgInfected'
                     FROM daily_data AS a
                     ORDER BY a.report_date) T $dateQuery  AND report_date>='2020-05-20' order by report_date");

        }

        foreach ($dailyTests as $dailyTest) {
//            $dateRange[] =  "'" .Carbon::parse($dailyTest->report_date)->format('d-M-Y'). "'" ;
            $categories[] = "'" . convertEnglishDateToBangla($dailyTest->report_date) . "'";
            $totalTestData[] = doubleval($dailyTest->fiveDayMovingAvgTest);
        }

        foreach ($dailyCases as $dailyCase) {
            $totalCaseData[] = doubleval($dailyCase->fiveDayMovingAvgInfected);
        }

        $dateRange = implode(",", $categories);
        $totalTest = implode(",", $totalTestData);
        $totalCase = implode(",", $totalCaseData);

        return [
            'totalTest' => $totalTest,
            'totalCase' => $totalCase,
            'dateRange' => $dateRange,
            'categories' => $categories,
            'totalTestData' => $totalTestData,
            'totalCaseData' => $totalCaseData,
        ];
    }

    protected function get_14days_infected($request)
    {

        $infected = $test_positivity = [];
        $dateRange = $total_infected = $total_test_positivity = [];
        $categories = $total_infectedData = $total_test_positivityData = [];
        $mdates = [];
        if ($request->division && $request->district) {
            $infected = DB::select(" select date as report_date, division_eng, district_city_eng, daily_cases as infected_24_hrs
            from district_wise_cases_covid where district_city_eng = '" . $request->district . "'
            order by date desc limit 14; ");

            $test_positivity = DB::select(" select a.date_of_test as report_date, a.division, a.district, a.pos, b.tot, (a.pos/b.tot)*100 as 'test_positivity' from
            (select date_of_test, division, district, count(id) as 'pos' from districts_test_positivity
            where test_result='Positive' and district = '" . $request->district . "'
            group by district,date_of_test order by date_of_test desc limit 14)
            as a inner join
            (select date_of_test, division, district, count(id) as 'tot' from districts_test_positivity
            where district = '" . $request->district . "'
            group by district, date_of_test order by date_of_test desc limit 14) as b using(district, date_of_test)
            order by a.date_of_test desc limit 14 ");

        } elseif ($request->division) {
            $infected = DB::select(" select date as report_date, division_eng, sum(daily_cases) as infected_24_hrs
                from district_wise_cases_covid where division_eng = '" . $request->division . "'
                group by division_eng, date
                order by date desc limit 14 ");

            $test_positivity = DB::select(" select a.date_of_test as report_date, a.division, a.pos, b.tot, (a.pos/b.tot)*100 as 'test_positivity' from
            (select date_of_test, division, count(id) as 'pos' from districts_test_positivity
            where test_result='Positive' and division = '" . $request->division . "'
            group by division,date_of_test order by date_of_test desc limit 14)
            as a inner join
            (select date_of_test, division, count(id) as 'tot' from districts_test_positivity
            where division = '" . $request->division . "'
            group by division, date_of_test order by date_of_test desc limit 14) as b using(division, date_of_test)
            order by a.date_of_test desc limit 14 ");

        } else { // national level
            $dateQuery = ' Where TRUE';
            if ($request->has('from_date') && $request->from_date != '') {
                $dateQuery .= ' AND  report_date >=' . "'" . $request->from_date . "'";
            }
            if ($request->has('to_date') && $request->to_date != '') {
                $dateQuery .= ' AND report_date <=' . "'" . $request->to_date . "'";
            }

            $infected = DB::select(" SELECT * FROM (SELECT report_date, infected_24_hrs FROM daily_data $dateQuery ORDER BY report_date DESC LIMIT 14) a ORDER BY a.report_date ASC ");

            $test_positivity = DB::select(" SELECT * FROM (SELECT report_date, infected_24_hrs, test_24_hrs, (infected_24_hrs/test_24_hrs)*100 AS 'test_positivity'
            FROM daily_data $dateQuery ORDER BY report_date DESC LIMIT 14)a ORDER BY a.report_date ASC  ");

        }

        foreach ($infected as $row) {
            $categories[] = "'" . convertEnglishDateToBangla($row->report_date) . "'";
            $mdates[] = $row->report_date;
            $total_infectedData[] = doubleval($row->infected_24_hrs);
        }

        foreach ($test_positivity as $row) {
            $total_test_positivityData[] = doubleval($row->test_positivity);
        }

        $dateRange = implode(",", $categories);
        $total_infected = implode(",", $total_infectedData);
        $total_test_positivity = implode(",", $total_test_positivityData);

        return [
            'total_infected' => $total_infected,
            'total_test_positivity' => $total_test_positivity,
            'dateRange' => $dateRange,
            'categories' => $categories,
            'total_infectedData' => $total_infectedData,
            'total_test_positivityData' => $total_test_positivityData,
            'mdates' => $mdates,
        ];
    }

    private function description_insight_qry($component_code)
    {
        $component = str_replace(" ", "_", strtoupper($component_code));
        // $des= cache()->rememberForever('hpm_description_insight.'.$component,  function () use($component_name_eng) {
        //     return DB::select("select * from hpm_description_insight where component_name_eng='".$component_name_eng."' and date=(select max(date) from hpm_description_insight) ");
        // });
        // return $des[0];

        //$des= DB::select("select * from hpm_description_insight where component_name_eng='".$component_name_eng."' and date=(select max(date) from hpm_description_insight) ");
        $des = DB::select("select * from hpm_description_insight where component_id='" . $component_code . "' ");

        if (isset($des[0])) {
            return $des[0];
        } else {
            return null;
        }
    }

    private function description_insight_1()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Daily National Cases' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_2()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Daily New Cases by Region' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_3()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Total National Cases' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_4()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Daily Tests and Cases' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_5()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Tests vs Cases (Positivity Rate)' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_6()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Risk Map by District (14 Days)' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_7()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Total Tests Per Case in Neighboring Countries' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_8()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Movement of districts in terms of risk comparing current 14 days and previous 14 days' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_9()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Age cohort vs cases and death' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function description_insight_10()
    {
        $des = DB::select("select * from hpm_description_insight where component_name_eng='Capacity & Resource' and date=(select max(date) from hpm_description_insight) ");
        return $des[0];
    }

    private function first_week()
    {
        $first_week = DB::select("select distinct DATE_SUB(curdate(), interval 7 day) as 'first_2_weeks_start',
DATE_SUB(DATE_SUB(curdate(), interval 7 day), INTERVAL 13 DAY)
as 'first_2_weeks_end' from lab_clean_data ");
        return $first_week[0];
    }

    private function last_week()
    {
        $last_week = DB::select("select distinct DATE_SUB(DATE_SUB(curdate(), interval 7 day), INTERVAL 14 DAY)
as 'last_2_weeks_start',
DATE_SUB(DATE_SUB(DATE_SUB(curdate(), interval 7 day), INTERVAL 14 DAY), INTERVAL 13 DAY)
as 'last_2_weeks_ends' from test_positivity_rate_district ");
        return $last_week[0];
    }

    public function getRiskMatricData(Request $request)
    {
        $data['status'] = 'failed';
        try {

            $testCount = $request->input('test_count');
            $test_positive_data_rate = explode(",", $request->input('test_positive_data_rate'));
            $test_positive_min = 0;
            $test_positive_max = 0;
            if (is_array($test_positive_data_rate) && count($test_positive_data_rate) == 2) {
                $test_positive_min = $test_positive_data_rate[0];
                $test_positive_max = $test_positive_data_rate[1];
            }

            $result['low_to_high'] = $this->risk_matrix_1($testCount, $test_positive_min, $test_positive_max)->low_to_high ?? 0;
            $result['low_to_medium'] = $this->risk_matrix_2($testCount, $test_positive_min, $test_positive_max)->low_to_medium ?? 0;
            $result['low_to_low'] = $this->risk_matrix_3($testCount, $test_positive_min, $test_positive_max)->low_to_low ?? 0;
            $result['medium_to_high'] = $this->risk_matrix_4($testCount, $test_positive_min, $test_positive_max)->medium_to_high ?? 0;
            $result['medium_to_medium'] = $this->risk_matrix_5($testCount, $test_positive_min, $test_positive_max)->medium_to_medium ?? 0;
            $result['medium_to_low'] = $this->risk_matrix_6($testCount, $test_positive_min, $test_positive_max)->medium_to_low ?? 0;
            $result['high_to_high'] = $this->risk_matrix_7($testCount, $test_positive_min, $test_positive_max)->high_to_high ?? 0;
            $result['high_to_medium'] = $this->risk_matrix_8($testCount, $test_positive_min, $test_positive_max)->high_to_medium ?? 0;
            $result['high_to_low'] = $this->risk_matrix_9($testCount, $test_positive_min, $test_positive_max)->high_to_low ?? 0;
            $data['result_data'] = $result;
            $data['risk_matrix_data'] = $this->getRiskMatrixModalData($testCount, $test_positive_min, $test_positive_max);

            $data['status'] = 'success';
        } catch (\Exception $exception) {

        }
        return $data;
    }

    public function getRiskMatrixModalData($testCount = 200, $test_positive_min = 5, $test_positive_max = 12)
    {
        $high_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from
(select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district where test_positivity>=$test_positive_max) as l
inner join
(select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district where test_positivity>=$test_positive_max and total_tests>$testCount) as r
using(district) ORDER BY r.test_positivity DESC");
        $data['high_to_high_district_name'] = $this->getRiskDistrictName($high_to_high_table_contentData);
        $data['high_to_high_table_contentData'] = $this->riskMatrichtmlProcess($high_to_high_table_contentData);
        $medium_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from
(select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max) as l
inner join
(select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district where test_positivity>=$test_positive_max and total_tests>$testCount) as r
using(district) ORDER BY r.test_positivity DESC");
        $data['medium_to_high_district_name'] = $this->getRiskDistrictName($medium_to_high_table_contentData);
        $data['medium_to_high_table_contentData'] = $this->riskMatrichtmlProcess($medium_to_high_table_contentData);
        $low_to_high_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from
(select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district where test_positivity<$test_positive_min) as l
inner join
(select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district where test_positivity>=$test_positive_max and total_tests>$testCount) as r
using(district) ORDER BY r.test_positivity DESC");
        $data['low_to_high_district_name'] = $this->getRiskDistrictName($low_to_high_table_contentData);
        $data['low_to_high_table_contentData'] = $this->riskMatrichtmlProcess($low_to_high_table_contentData);
        $high_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from
(select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district where test_positivity>=$test_positive_max) as l
inner join
(select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max and total_tests>$testCount) as r
using(district) ORDER BY r.test_positivity DESC");
        $data['high_to_medium_district_name'] = $this->getRiskDistrictName($high_to_medium_table_contentData);
        $data['high_to_medium_table_contentData'] = $this->riskMatrichtmlProcess($high_to_medium_table_contentData);
        $medium_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from
(select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max) as l
inner join
(select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max and total_tests>$testCount) as r
using(district) ORDER BY r.test_positivity DESC");
        $data['medium_to_medium_district_name'] = $this->getRiskDistrictName($medium_to_medium_table_contentData);
        $data['medium_to_medium_table_contentData'] = $this->riskMatrichtmlProcess($medium_to_medium_table_contentData);
        $low_to_medium_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from
(select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district where test_positivity<$test_positive_min) as l
inner join
(select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max and total_tests>$testCount) as r
using(district) ORDER BY r.test_positivity DESC");
        $data['low_to_medium_district_name'] = $this->getRiskDistrictName($low_to_medium_table_contentData);
        $data['low_to_medium_table_contentData'] = $this->riskMatrichtmlProcess($low_to_medium_table_contentData);
        $high_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from
(select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district where test_positivity>=$test_positive_max) as l
inner join
(select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district where test_positivity<$test_positive_min AND total_tests>$testCount) as r
using(district) ORDER BY r.test_positivity DESC");
        $data['high_to_low_district_name'] = $this->getRiskDistrictName($high_to_low_table_contentData);
        $data['high_to_low_table_contentData'] = $this->riskMatrichtmlProcess($high_to_low_table_contentData);
        $medium_to_low_table_contentData = \Illuminate\Support\Facades\DB::select("SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity' from
(select district, positive_tests, total_tests, test_positivity from last_14_days_test_positivity_district where test_positivity>=$test_positive_min and test_positivity<$test_positive_max) as l
inner join
(select district, positive_tests, total_tests, test_positivity from recent_14_days_test_positivity_district where test_positivity<$test_positive_min and total_tests>$testCount) as r
using(district) ORDER BY r.test_positivity DESC");
        $data['medium_to_low_district_name'] = $this->getRiskDistrictName($medium_to_low_table_contentData);
        $data['medium_to_low_table_contentData'] = $this->riskMatrichtmlProcess($medium_to_low_table_contentData);
        $low_to_low_table_contentData = \Illuminate\Support\Facades\DB::select(" SELECT l.district as 'district', l.positive_tests AS 'l_positive', l.total_tests AS 'l_total_test', l.test_positivity as 'last_test_positivity', r.positive_tests AS 'r_positive', r.total_tests AS 'r_total_test', r.test_positivity as 'recent_test_positivity'  from
    (select district, test_positivity from last_14_days_test_positivity_district where test_positivity<$test_positive_min) as l
    inner join
    (select district, test_positivity from recent_14_days_test_positivity_district where test_positivity<$test_positive_min
    and total_tests>$testCount) as r
    using(district) ORDER BY r.test_positivity DESC");
        $data['low_to_low_district_name'] = $this->getRiskDistrictName($low_to_low_table_contentData);
        $data['low_to_low_table_contentData'] = $this->riskMatrichtmlProcess($low_to_low_table_contentData);
        return $data;
    }

    public function riskMatrichtmlProcess($items)
    {
        $html = "";
        if (count($items)) {
            foreach ($items as $key => $item) {
                $html .= '<tr class="b1">';
                $html .= "<td >" . en2bnTranslation($item->district) . "</td>";
                $html .= "<td>" . convertEnglishDigitToBangla($item->recent_test_positivity) . "</td>";
                $html .= "<td>" . convertEnglishDigitToBangla($item->r_positive) . "</td>";
                $html .= "<td>" . convertEnglishDigitToBangla($item->r_total_test) . "</td>";
                $html .= "<td>" . convertEnglishDigitToBangla($item->last_test_positivity) . "</td>";
                $html .= "<td>" . convertEnglishDigitToBangla($item->l_positive) . "</td>";
                $html .= "<td>" . convertEnglishDigitToBangla($item->l_total_test) . "</td>";
                $html .= "</tr>";
            }
        }

        return $html;
    }

    public function getRiskDistrictName($items)
    {
        $arrayData = array();
        foreach ($items as $item) {
            $arrayData[] = rtrim(en2bnTranslation($item->district), " ");
        }
        $districtName = implode(", ", $arrayData);
        return $districtName;
    }

    public function getNationalDailyInfectedData(Request $request)
    {
        $data['status'] = 'failed';
        try {
            $nation_wide_MovingAvgInfected = $this->nation_wide_five_dayMovingAvgInfected($request);
            $date_arr = $infected_arr = $avg_arr = array();

            foreach ($nation_wide_MovingAvgInfected as $row) {
                $date_arr[] = convertEnglishDateToBangla($row->report_date);
                $infected_arr[] = doubleval($row->infected_24_hrs);
                $avg_arr[] = doubleval($row->five_dayMovingAvgInfected);
            }
            $infected = implode(",", $infected_arr);
            $avg = implode(",", $avg_arr);
            $data['infected'] = json_encode($infected_arr);
            $data['avg'] = json_encode($avg_arr);
            $data['categories'] = json_encode($date_arr);
            /*$data['infected'] = $districtData;
            $data['upazillaData'] = $upzillaData;*/
            $data['status'] = 'success';
        } catch (\Exception $exception) {

        }
        return $data;
    }

    public function getNationalInfectedData(Request $request)
    {
        $data['status'] = 'failed';
        try {
            $cumulativeInfection = $this->getCumulativeInfectionData($request);
            $data['categories'] = json_encode($cumulativeInfection['dateBangla']);
            $data['row1_left_trend_infected_data'] = json_encode($cumulativeInfection['infected_person_date']);
            $data['status'] = 'success';
        } catch (\Exception $exception) {

        }
        return $data;
    }

    public function getNationalTestVsInfectedTrend(Request $request)
    {
        $data['status'] = 'failed';
        try {
            $testsVsCases = $this->getNationWiseTestsAndCases($request);
            $data['categories'] = json_encode($testsVsCases['categories']);
            $data['total_test'] = json_encode($testsVsCases['totalTestData']);
            $data['total_case'] = json_encode($testsVsCases['totalCaseData']);
            $data['status'] = 'success';
        } catch (\Exception $exception) {

        }
        return $data;
    }

    public function getTestPositivityRateTrend(Request $request)
    {
        $data['status'] = 'failed';
        try {
            $cumulativeInfectedPerson_onlyDhaka = $this->cumulativeInfectedPerson_dhaka($request);
            $k = 0;
            $dhk_divisionlist = [];
            $dhk_seriesData = [];
            if (count($cumulativeInfectedPerson_onlyDhaka['division_data'])) {
                foreach ($cumulativeInfectedPerson_onlyDhaka['division_data'] as $key => $dist) {
                    $dhk_seriesData[$k]['type'] = 'spline';
                    $dhk_seriesData[$k]['name'] = en2bnTranslation($key);
                    $dhk_seriesData[$k]['data'] = $dist ?? [];
                    $dhk_seriesData[$k]['marker']['enabled'] = false;
                    $dhk_seriesData[$k]['marker']['symbol'] = 'circle';
                    $dhk_divisionlist[] = $key;
                    $k++;
                }
            }
            $data['series_data_dhk'] = json_encode($dhk_seriesData);
            $data['categories_dhk'] = json_encode($cumulativeInfectedPerson_onlyDhaka['categories']) ?? [];
            $data['status'] = 'success';
        } catch (\Exception $exception) {

        }
        return $data;
    }

    public function getWeeklyDifferenceData(Request $request)
    {
        $data['status'] = 'failed';
        try {

            $forteen_day_infected = $this->get_14days_infected($request);
            $data['categories'] = json_encode($forteen_day_infected['categories']);
            $data['total_infectedData'] = json_encode($forteen_day_infected['total_infectedData']);
            $data['total_test_positivityData'] = json_encode($forteen_day_infected['total_test_positivityData']);
            $data['status'] = 'success';
        } catch (\Exception $exception) {

        }
        return $data;
    }

    public function login()
    {
        return view('xpm.login');
    }

    public function getAsiaTestedData()
    {
        $sql = "SELECT
                    owid_covid_data.date
                FROM
                    owid_covid_data
                WHERE

                 location IN (
                'Bangladesh',
                'Nepal',
                'India',
                'Myanmar',
                'Pakistan',
                'Vietnam',
                'Sri Lanka'
                )
                AND owid_covid_data.date>'2020-05-19'
                GROUP BY owid_covid_data.date ORDER BY owid_covid_data.date ASC ";

        try {
            $dates = DB::select(DB::raw($sql));
            $countries = array(
                'Bangladesh' => 'বাংলাদেশ',
                'Nepal' => 'নেপাল',
                'India' => 'ভারত',
                'Myanmar' => 'মায়ানমার',
                'Pakistan' => 'পাকিস্তান',
                'Vietnam' => 'ভিয়েতনাম',
                'Sri Lanka' => 'শ্রীলংকা',

            );
            $data = [];
            $days = [];
            foreach ($dates as $d) {
                $date = $d->date;

                $sql = "SELECT location as country,CASE WHEN total_tests_per_thousand IS NOT NULL
                       THEN total_tests_per_thousand
                       ELSE 0
                END as count  from owid_covid_data where date = '$date'
                    AND location IN
                ( 'Bangladesh',
                'Nepal',
                'India',
                'Myanmar',
                'Pakistan',
                'Vietnam',
                'Sri Lanka') ";
                $info = DB::select($sql);
                foreach ($info as $c) {
                    $c->country = $countries[$c->country];
                }
                $data[date('M d', strtotime($d->date))] = $info;
                $days[] = date('M d', strtotime($d->date));
            }
            return response()->json(['days' => $days, 'data' => $data]);
        } catch (\Exception $exception) {
            return response()->json([]);
        }

    }

    /**
     * Get Dhaka Division Positive Rate
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDhakaPositiveRateData(Request $request)
    {
        $data = [];
        $axis = [];

        $districts = $request->districts;
        $weeklyOrDaily = $request->weeklyOrDaily;

        if ($districts && count($districts) > 0) {
            $data['axis'] = $districts;
            $axis[] = ['en' => 'National', 'bn' => 'জাতীয় পর্যায়ে সনাক্ত বিবেচনায় আক্রান্তের হার'];
            foreach ($districts as $div) {
                $axis[] = ['en' => $div, 'bn' => en2bnTranslation($div)];

                /* get select district data */
                $sql = "";
                if ($weeklyOrDaily == 1) {
                    $sql = "SELECT dv.date_of_test, dv.district, dv.test_positivity from districts_test_positivity_view AS dv where dv.district = \"$div\"";
                } else {
                    $sql = "SELECT a.date_of_test, a.district,
                    Round( ( SELECT SUM(b.test_positivity) / COUNT(b.test_positivity)
                    FROM districts_test_positivity_view AS b
                    WHERE DATEDIFF(a.date_of_test, b.date_of_test) BETWEEN 0 AND 6 and b.district = \"$div\"
                    ), 2 ) AS 'test_positivity'
                    from districts_test_positivity_view AS a where a.district = \"$div\"";
                }

                $dataResult[] = DB::select(DB::raw($sql));
            }

            /* get national level data */
            /* weekly or daily */
            if ($weeklyOrDaily == 1) {
            $dataResult[] = DB::select(DB::raw("SELECT
                dd.report_date as date_of_test,
                (SELECT 'National') AS district,
                (dd.infected_24_hrs/dd.test_24_hrs)*100 as 'test_positivity'
                from daily_data AS dd order by dd.report_date"));
            }
            else{
                $dataResult[] = DB::select(DB::raw("SELECT a.report_date as date_of_test, (SELECT 'National') AS district, Round( ( SELECT SUM((b.infected_24_hrs/b.test_24_hrs)*100) / COUNT((b.infected_24_hrs/b.test_24_hrs)*100) FROM daily_data AS b WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 6 ), 2 ) AS 'test_positivity' from daily_data as a order by a.report_date"));
            }
        }

        try {

            /* make all data into one array */
            $formatData = [];
            foreach ($dataResult as $k => $row) {
                foreach ($row as $key => $r) {
                    $formatData[] = [
                        "date" => $r->date_of_test,
                        'district' => $r->district,
                        'test_positivity' => $r->test_positivity,
                    ];
                }
            }

            $formateDataResult = $this->dateArrayList($formatData, $weeklyOrDaily);

            $data['axis'] = $axis;
            $data['data'] = $formateDataResult;

        } catch (\Exception $exception) {
            $data['data'] = [];
        }
        return $data;
    }

    // Function to get all the dates in given range
    public function getDatesFromRange($flag)
    {
        $Date1 = '20-05-2020';
        $Date2 = date("Y-m-d", strtotime('-7 day'));

        // Declare an empty array
        $array = array();

        // Use strtotime function
        $Variable1 = strtotime($Date1);
        $Variable2 = strtotime($Date2);

        // Use for loop to store dates into array
        // 86400 sec = 24 hrs = 60*60*24 = 1 day
        for ($currentDate = $Variable1; $currentDate <= $Variable2;
            $currentDate += (86400)) {

            /* weekly or daily */    
            if($flag != 1){
                /* Check specific day in week */ 
                $carbon = Carbon::createFromTimestamp($currentDate);
                if ($carbon->dayOfWeek == Carbon::SATURDAY) {
                    $array[] = date('Y-m-d', $currentDate);
                }
            }else{
                $array[] = date('Y-m-d', $currentDate);
            }   
        
        }

        return $array;
    }

    /* Data format */
    public function dateArrayList($formatData, $weeklyOrDaily)
    {

        $datesList = $this->getDatesFromRange($weeklyOrDaily);
        
        $newDistrict = array();

        /* $name = array_column($formatData, 'date');
        $filteredKeys = array_unique($name);
        foreach($filteredKeys as $key=>$date){ */

        foreach ($datesList as $key => $date) {
            foreach ($formatData as $k => $arrays) {
                $newDistrict['date'] = $date;
                if (in_array($date, $arrays)) {
                    $newDistrict[$arrays['district']] = $arrays['test_positivity'];
                }
            }
            $filtered[] = $newDistrict;
        }

        return $filtered;
    }

    public function getNationLevelTestPositivityData(Request $request)
    {
        try {
            $sql = "SELECT a.report_date as date_of_test, (SELECT 'National') AS district, Round( ( SELECT SUM((b.infected_24_hrs/b.test_24_hrs)*100) / COUNT((b.infected_24_hrs/b.test_24_hrs)*100) FROM daily_data AS b WHERE DATEDIFF(a.report_date, b.report_date) BETWEEN 0 AND 6 ), 2 ) AS 'test_positivity' from daily_data as a order by a.report_date";
        
            $dataResult = DB::select(DB::raw($sql));


            $formatData = [];
            foreach ($dataResult as $k => $row) {
                $formatData[] = [
                    "date" => $row->date_of_test,
                    'district' => $row->district,
                    'test_positivity' => $row->test_positivity,
                ];
                
            }

            $result = $this->dateArrayList($formatData, 2);

            return response()->json($result);
        } catch (\Exception $exception) {
            return response()->json([]);
        }
    }

    public function upoladSouthAsiaData()
    {
        return view('xpm.upload-south-asia-data');
    }

    public function uploadData(Request $request)
    {
        $file = $request->file('data_file');

        if ($request->hasFile('data_file')) {

            Storage::putFileAs('public', $file, $request->data_file->getCligetDhakaPositiveRateDataentOriginalName());

            $path = storage_path() . "/app/public/south-asia-data.json";
            $json = file_get_contents($path);
            $json = json_decode($json, true);
            $a = $json['date'];
            $b = json_encode($json['data']);
            $current_time = date('Y-m-d h:m:i');

            $sql = "INSERT INTO south_asia_data VALUES('$a','$b','$current_time')";

            DB::insert(DB::raw($sql));

            return redirect()->back()->with(['success' => 'সাফল্যের সাথে আপলোড করা হয়েছে।']);
        }
        return redirect()->back()->with(['error' => 'ফাইল আপলোড করতে ব্যর্থ। ত্রুটি ঘটেছে']);
    }

    public function getSouthAsiaData()
    {
        try {
            $path = storage_path() . "/app/public/south-asia-data.json";
            $json = file_get_contents($path);
            $json = json_decode($json, true);
            return response()->json($json);
        } catch (\Exception $exception) {
            return response()->json([]);
        }
    }

    public function divisionCompareFilter(Request $request)
    {
        $data = [];
        $axis = [];
        $divisions = $request->divisions;
        $districts = $request->districts;

        $sql = "";

        if ($divisions && count($divisions) > 0) {
            $allDivision = ['dhk' => 'DHAKA', 'ctg' => 'CHITTAGONG', 'khu' => 'KHULNA', 'mym' => 'MYMENSINGH', 'raj' => 'RAJSHAHI', 'ran' => 'RANGPUR', 'bar' => 'BARISAL', 'syl' => 'SYLHET'];
            $params = array_intersect($allDivision, $divisions);
            $first_key = array_key_first($params);
            $firstField = $params[$first_key];
            $last_key = array_key_last($params);
            $comma = "";
            $logicalOpetator = "";

            /* select fileds */
            $sql = "SELECT $firstField.thedate AS date, ";
            foreach ($params as $select => $selectValue) {
                $axis[] = ['en' => $selectValue, 'bn' => en2bnTranslation($selectValue)];
                if ($select == $last_key) {
                    $comma = "";
                } else {
                    $comma = ",";
                }
                $sql .= " $selectValue.$select AS $selectValue $comma";
            }

            $sql .= " FROM ";
            foreach ($params as $select => $selectValue) {
                if ($select == $last_key) {
                    $comma = "";
                } else {
                    $comma = ",";
                }

                $sql .= " ( SELECT
                a.thedate,
                Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                         FROM
                         (SELECT thedate, division,
                COALESCE(daily_cases, 0) AS daily_cases FROM
                (SELECT thedate, division, daily_cases from
                (SELECT thedate from calendardate where thedate >= '2020-05-20'
                and thedate <= (date_sub((SELECT max(date_of_test) from
                division_infected where division = '$selectValue'), interval 7 day))) as T1
                left join
                (SELECT date_of_test, division, daily_cases from  division_infected
                where division = '$selectValue') as T2 on T1.thedate=T2.date_of_test) as R) AS b
                                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 6
                            ), 2 ) AS '$select'
                FROM
                (SELECT thedate, division,
                COALESCE(daily_cases, 0) AS daily_cases FROM
                (SELECT thedate, division, daily_cases from
                (SELECT thedate from calendardate where thedate >= '2020-05-20'
                and thedate <= (date_sub((SELECT max(date_of_test) from
                division_infected where division = '$selectValue'), interval 7 day))) as T1
                left join
                (select date_of_test, division, daily_cases from  division_infected
                where division = '$selectValue') as T2 on T1.thedate=T2.date_of_test) as Q) as a) AS $selectValue $comma";
            }

            $sql .= " WHERE";

            /* where clause */
            foreach ($params as $select => $selectValue) {
                if ($select == $last_key) {
                    $logicalOpetator = "";
                } else {
                    $logicalOpetator = " and ";
                }
                $sql .= " $firstField.thedate = $selectValue.thedate $logicalOpetator";
            }

        }

        if ($districts && count($districts) > 0) {
            $allDistrict = DB::table('div_dist')->get()->pluck('district')->toArray();

            $params = array_intersect($allDistrict, $districts);
            $first_key = array_key_first($params);
            $firstField = $params[$first_key];
            $last_key = array_key_last($params);
            $comma = "";
            $logicalOpetator = "";

            /* select fileds */
            $sql = "SELECT `$firstField`.thedate AS date, ";
            foreach ($params as $select => $selectValue) {
                $axis[] = ['en' => $selectValue, 'bn' => en2bnTranslation($selectValue)];
                if ($select == $last_key) {
                    $comma = "";
                } else {
                    $comma = ",";
                }
                $sql .= " `$selectValue`.column$select AS `$selectValue` $comma";
            }

            $sql .= " FROM ";
            foreach ($params as $select => $selectValue) {
                if ($select == $last_key) {
                    $comma = "";
                } else {
                    $comma = ",";
                }

                $sql .= " ( select
                a.thedate,
                a.division,
                a.district,
                a.daily_cases,
                Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
                         FROM
                         (select thedate, division, district,
                COALESCE(daily_cases, 0) AS daily_cases FROM
                (select thedate, division, district, daily_cases from
                (select thedate from calendardate where thedate >= '2020-05-20'
                and thedate <= (date_sub((select max(date_of_test) from
                division_district_infected where district = \"$selectValue\"), interval 7 day))) as T1
                left join
                (select date_of_test, division, district, daily_cases from  division_district_infected
                where district = \"$selectValue\") as T2 on T1.thedate=T2.date_of_test) as R) AS b
                                where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 6
                            ), 2 ) AS 'column$select'
                FROM
                (select thedate, division, district,
                COALESCE(daily_cases, 0) AS daily_cases FROM
                (select thedate, division, district, daily_cases from
                (select thedate from calendardate where thedate >= '2020-05-20'
                and thedate <= (date_sub((select max(date_of_test) from
                division_district_infected where district = \"$selectValue\"), interval 7 day))) as T1
                left join
                (select date_of_test, division, district, daily_cases from  division_district_infected
                where district = \"$selectValue\") as T2 on T1.thedate=T2.date_of_test) as Q) as a) AS `$selectValue` $comma";
            }

            $sql .= " WHERE";

            /* where clause */
            foreach ($params as $select => $selectValue) {
                if ($select == $last_key) {
                    $logicalOpetator = "";
                } else {
                    $logicalOpetator = " and ";
                }
                $sql .= " `$firstField`.thedate = `$selectValue`.thedate $logicalOpetator";
            }
            // return $sql;

        }

        try {
            $data['axis'] = $axis;
            $data['data'] = DB::select(DB::raw($sql));

        } catch (\Exception $exception) {
            $data['data'] = [];
        }
        return $data;

    }

    public function getHospitalNames()
    {
        $sql = "SELECT
                    hospitalName AS name,
                    hospitalNameBn AS name_bn
                FROM
                    hospitaltemporarydata
                WHERE
                    hospitalNameBn  NOT IN (
                        'বসুন্ধরা মেডিকেল কলেজ হাসপাতাল',
                        'ঢাকা মহানগর জেনারেল হাসপাতাল',
                        'হলি ফ্যামিলি রেড ক্রিসেন্ট মেডিকেল কলেজ হাসপাতাল',
                        'লালকুঠি হাসপাতাল',
                        'রেলওয়ে হাসপাতাল',
                        'সারা দেশ'
                            )
                GROUP BY
                    hospitalNameBn
                ORDER BY
                    hospitalName ASC";

        try {

            return DB::select(DB::raw($sql));

        } catch (\Exception $exception) {
            return [];
        }

    }

    public function getHospitalData(Request $request)
    {
        $condition = '';
        if ($request->hospital == 'All' || $request->text == 'ঢাকা শহর' || $request->text == 'চট্টগ্রাম শহর' || $request->text == 'অন্যান্য') {
            $status = ["All" => "Country", "Dhaka" => "Dhaka", "Chittagong" => "Chittagong", "Others" => "Others"];
            $text = $status[$request->hospital];
            $condition = "city = '$text'";
        } elseif ($request->hospital) {
            $condition = "hospitalName LIKE '%$request->hospital%'";
        }
        $sqlGeneral = "SELECT date, `alocatedGeneralBed` /* - `AdmittedGeneralBed` */ as 'total_bed', AdmittedGeneralBed as 'occupied_bed',
        round(generalBedOccupencyRate, 2) as 'occupency_rate'
        from hospitaltemporarydata

                WHERE
                    $condition
                GROUP BY
                    date
                ORDER BY
                    date";

        $sqlICU = "SELECT date, `alocatedICUBed` /* - `AdmittedICUBed` */  as 'total_bed', AdmittedICUBed as 'occupied_bed',
        round(ICUOccupencyRate, 2) as 'occupency_rate'
        from hospitaltemporarydata

                WHERE
                    $condition
                GROUP BY
                    date
                ORDER BY
                    date";

        try {

            $data['general'] = DB::select(DB::raw($sqlGeneral));
            $data['icu'] = DB::select(DB::raw($sqlICU));

            return $data;

        } catch (\Exception $exception) {
            return [];
        }

    }

    /*
     * Edge Graph
     * */
    public function edgeGraph()
    {
        return view('xpm.age-graph');
    }

    public function filterdailyInfectedChart(Request $request)
    {
        $districtArr = $request->all();
        // return $districtArr['districts'];
        $districts = implode(', ', array_map(function ($val) {return sprintf("'%s'", $val);}, $districtArr['districts']));

        $queryClause = "";
        if ($districts !== "'all'") {
            $queryClause .= " where district IN ({$districts})";
        }
        //return $districts;

        $nation_wide_MovingAvgInfected = DB::select("SELECT a.thedate, a.division, a.district, a.daily_cases,
        Round((SELECT SUM(b.daily_cases) / COUNT(b.daily_cases)
        FROM
        (select thedate, division, district,
        COALESCE(daily_cases, 0) AS daily_cases FROM
        (select thedate, division, district, daily_cases from
        (select thedate from calendardate where thedate >= '2020-05-20'
        and thedate <= (date_sub(curdate(), interval 7 day))) as T1
        left join
        (select date_of_test, division, district, daily_cases from  division_district_infected
        {$queryClause}) as T2 on T1.thedate=T2.date_of_test) as R) AS b
                        where DATEDIFF(a.thedate, b.thedate) BETWEEN 0 AND 6
                      ), 2 ) AS 'dayMovingAvg'
        FROM
        (select thedate, division, district,
        COALESCE(daily_cases, 0) AS daily_cases FROM
        (select thedate, division, district, daily_cases from
        (select thedate from calendardate where thedate >= '2020-05-20'
        and thedate <= (date_sub(curdate(), interval 7 day))) as T1
        left join
        (select date_of_test, division, district, daily_cases from  division_district_infected
        {$queryClause}) as T2 on T1.thedate=T2.date_of_test) as Q) as a");

        $mdata = array();
        foreach ($nation_wide_MovingAvgInfected as $k => $row) {
            $mdata[] = [
                "date" => $row->thedate,
                "infected" => $row->daily_cases,
                "avg" => $row->dayMovingAvg,
            ];
        }

        return json_encode($mdata);

    }

    public function dailyInfectedChart(Request $request)
    {

        $five_dayMovingAvgInfected = DB::connection('mysql2')->select("
                    SELECT
    a.date_of_test,
    SUM(a.total_positive) AS total_positive,
    ROUND(
        (
            SELECT
                sum(b.total_positive)/(count(b.date_of_test BETWEEN  (a.date_of_test - INTERVAL 4 DAY) AND a.date_of_test)/64)
            FROM
                daily_data_iedcr AS b
            WHERE
                b.date_of_test BETWEEN  (a.date_of_test - INTERVAL 4 DAY) AND a.date_of_test LIMIT 1
        ),
        2
    ) AS 'five_dayMovingAvgInfected'
FROM
    `daily_data_iedcr` AS a
GROUP BY
    a.date_of_test");

        if ($five_dayMovingAvgInfected) {
            $date_arr = $infected_arr = $avg_arr = array();
            $mdata = array();
            $sum = 0;
            $mdate = '';
            $xdate = '';
            $testsVsCases = $this->getNationWiseTestsAndCases($request);
            $cumulativeInfection = $this->getCumulativeInfectionData($request);
            $row1_left_trend_infected_data = $cumulativeInfection['infected_person_date'];
            foreach ($five_dayMovingAvgInfected as $k => $row) {
                $date_arr[] = convertEnglishDateToBangla($row->date_of_test);
                $infected_arr[] = $row->total_positive;
                $avg_arr[] = $row->five_dayMovingAvgInfected;
                $sum = $sum + $row->total_positive;
                $test_arr = explode(",", $testsVsCases['totalTest']);
                $case_arr = explode(",", $testsVsCases['totalCase']);
                $mdate = $row->date_of_test;

                $mdata[] = [
                    "date" => $row->date_of_test,
                    "infected" => $row->total_positive,
                    "avg" => $row->five_dayMovingAvgInfected,
                    "total_infected" => $row1_left_trend_infected_data[$k],
                    "tested" => $test_arr[$k],
                    "case" => $case_arr[$k],

                ];
            }
        }

        // return [];
        return json_encode($mdata);
    }

    public function infectedPercentage()
    {
        $infected = DB::select("SELECT
                        a.report_date,
                        infected_24_hrs AS 'infected_24_hrs',
                        ( infected_24_hrs / test_24_hrs )* 100 AS 'test_positivity'
                    FROM
                        daily_data a
                    GROUP BY
                        WEEK (
                        a.report_date)");

        foreach ($infected as $row) {
            $categories[] = "'" . convertEnglishDateToBangla($row->report_date) . "'";
            $mdates[] = $row->report_date;
            $total_infectedData[] = doubleval($row->infected_24_hrs);
            $total_test_positivityData[] = doubleval($row->test_positivity);
        }

        $dateRange = implode(",", $categories);
        $total_infected = implode(",", $total_infectedData);
        $total_test_positivity = implode(",", $total_test_positivityData);

        $xdata = array();
        $last_dates = explode(",", $dateRange);
        $last_dates = $mdates;
        $x = explode(",", $total_infected);
        $y = explode(",", $total_test_positivity);

        foreach ($last_dates as $k => $d) {
            $xdata[] = [
                "date" => $d,
                "infected" => $x[$k],
                "test_positive" => $y[$k],
            ];
            $xdate = $d;
        }
        return json_encode($xdata);
    }

    public function testData()
    {
        return view('xpm.iframe');
    }

}
