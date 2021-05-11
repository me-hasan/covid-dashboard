<?php

namespace App\Http\Controllers;

use App\CcEmail;
use App\ChartUploadLog;
use App\EmailMapping;
use DB;
use File;
use App\Jobs\SendEmailJob;
use App\Mail as MailModel;
use Illuminate\Http\Request;
use App\Mail\HpmDashboardMail;
use App\NewsBulletinLog;
use App\WeeklyDate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class NewsBulletinController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newsBulletinHistory(Request $request)
    {
        $bolletins= NewsBulletinLog::with('weeklyDate')->get();
        // dd($bolletins);
        return view("superadmin.bulletin.index", compact('bolletins'));
    }

    public function newsBulletinCreate(){
        $districts =  DB::table('div_dist')->get()->map(function($dist) {
            return ['clean' => $this->cleanDistricName($dist->district), 'original'=> en2bnTranslation($dist->district)];
        })->pluck('original', 'clean');
        $calendar = WeeklyDate::doesnthave('notGenerated')->orderBy('date_id', 'DESC')->get()->pluck('date_ban', 'date_id');
        
        return view("superadmin.bulletin.create-bolletin", compact('calendar', 'districts'));
    }

    public function newsBulletinGenerate(Request $request){
        request()->validate([
            'calendar_date'  => 'required',
            'district_name'  => 'required',
        ]);
        $selecteDistrictsArray = $request->district_name;
        $data_id = $request->calendar_date;

        $districtsArray =  DB::table('div_dist')->get()->map(function($dist)use($selecteDistrictsArray) {
            $index = $this->cleanDistricName($dist->district);
            
                if(in_array($index, $selecteDistrictsArray))
                return ['clean' => $index, 'original'=>$dist->district];
            
        })->pluck('original', 'clean')->filter(function($value){
            return !is_null($value); // remove null value
        })->toArray();
        
        
        //set_time_limit(8000000);
        foreach($districtsArray as $key=>$value){    
            $pdfResults = '';
           
            $path = storage_path('app/public/dashboard/bulletin/'.$data_id.'/'.$key); //stor path 
            
            $uploadPathForPdf = storage_path("app/public/dashboard/chart/$data_id/$key/"); //upload chart path for pdf
            $labelArray = $this->pdfDataPrepare($data_id, $value, $uploadPathForPdf);
            

            $pdf = PDF::loadView('superadmin.bulletin.bulletin-generator-template', compact('pdfResults', 'labelArray', 'uploadPathForPdf'));
            
            
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $fileName =  'dashboard' . '.' . 'pdf' ;
            // dd($path);
            $pdf->save($path . '/' . $fileName);

            $bolletin = new NewsBulletinLog;
            $bolletin->district_name = $key;
            $bolletin->date_id = $data_id;
            $bolletin->status = 0;
            $bolletin->count = 0;
            $bolletin->created_by = Auth::user()->id;
            $bolletin->ip_address = '';
            $bolletin->save();

            ChartUploadLog::where('date_id', $data_id)->where('district_name', $value)->update(['status'=> 0]);
            
        }

        return redirect()->route('news-bulletin-history');
    }

    function pdfDataPrepare($date_id, $dist, $path){
        $lebelInfo = WeeklyDate::where('date_id', $date_id)->first();
        $_district_name = $dist;
        return [
            'district_name'=> $_district_name,
            'date'=> $lebelInfo->date_eng,
            'recent'=>'Last Week ('.$lebelInfo->recent_weekly_date.')',
            'last'=>'2 Week Age ('.$lebelInfo->last_weekly_date.')',
            'first_chart'=> ['title'=>"Weekly Analysis of COVID-19 Indicators in {$_district_name} District", 'table'=> $this->indicatorsDataPrepare($dist, $date_id)],
            'second_chart'=> ['title'=> "Daily Reported of Covid-19 Cases in {$_district_name} District", 'path'=> $path.'/chart1.png'],
            'third_chart'=> ['title'=> "Daily Non-Traveller Positivity Rate Comparison Between {$_district_name} District, {$_district_name} Division and National(Since February)", 'path'=> $path.'/chart2.png'],
            'fourth_chart'=> ['title'=> "Location of Active Covid-19 Cases in {$_district_name} District and {$_district_name} City", 'path'=> $path.'/chart3.png'],
        ];

    }

    

    public function indicatorsDataPrepare($dist, $date_id){
        $dateData = DB::select("SELECT l.from_date as l_from_date, l.to_date as l_to_date, r.from_date as r_from_date, r.to_date as r_to_date FROM tp_matrix_last as l LEFT JOIN tp_matrix_recent r ON r.date_id = l.date_id limit 1");
        $date = [];
        foreach($dateData as $d){
            $date['l_from_date'] = $d->l_from_date;
            $date['l_to_date'] = $d->l_to_date;
            $date['r_from_date'] = $d->r_from_date;
            $date['r_to_date'] = $d->r_to_date;
        }
       /**=======================case start============================================= */
        /*cases last*/
        $casesNonTravelersLastWeek = DB::select("SELECT count(*) as 'Infected_person_Non_travelers' from infected_person
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['l_to_date']}'
        and district=\"$dist\" and passport_no=''")[0]->Infected_person_Non_travelers;

        $casesTravelersLastWeek = DB::select("SELECT count(*) as 'Infected_person_travelers' from infected_person
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['l_to_date']}'
        and passport_no<>'' and district=\"$dist\" ")[0]->Infected_person_travelers;

        $casesTotalLastWeek = $casesNonTravelersLastWeek + $casesTravelersLastWeek;

        /*cases recent*/
        $casesNonTravelersRecentWeek = DB::select("SELECT count(*) as 'Infected_person_Non_travelers' from infected_person
        where date_of_test >='{$date['r_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and district=\"$dist\" and passport_no=''")[0]->Infected_person_Non_travelers;

        $casesTravelersRecentWeek = DB::select("SELECT count(*) as 'Infected_person_travelers' from infected_person
        where date_of_test >='{$date['r_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and passport_no<>'' and district=\"$dist\" ")[0]->Infected_person_travelers;

        $casesTotalRecentWeek = $casesNonTravelersRecentWeek + $casesTravelersRecentWeek;

        /*cases change*/
        $casesNonTravelersChange =  $casesNonTravelersRecentWeek - $casesNonTravelersLastWeek;
        $casesTravelersChange =  $casesTravelersLastWeek - $casesTravelersRecentWeek;
        $casesChange =  $casesTotalLastWeek + $casesTotalRecentWeek;

        /*division cases*/
        $disvisionCasesNonTravelersLastWeek = DB::select("SELECT count(*) as 'divison_last_2_weeks_non_travelers' from infected_person
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and division='Dhaka' and passport_no=''")[0]->divison_last_2_weeks_non_travelers;

        $disvisionCasesTravelersLastWeek = DB::select("SELECT count(*) as 'divison_last_2_weeks_travelers' from infected_person
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and division='Dhaka' and passport_no!=''")[0]->divison_last_2_weeks_travelers;

        $disvisionCasesTotalLastWeek = $disvisionCasesNonTravelersLastWeek + $disvisionCasesTravelersLastWeek;

        /*national cases*/
        $nationalCasesNonTravelersLastWeek = DB::select("SELECT count(*) as 'national_last_2_weeks_total_non_travelers' from infected_person
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='2021-04-06'
        and passport_no=''")[0]->national_last_2_weeks_total_non_travelers;

        $nationalCasesTravelersLastWeek = DB::select("SELECT count(*) as 'national_last_2_weeks_total_travelers' from infected_person
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and passport_no!=''")[0]->national_last_2_weeks_total_travelers;

        $nationalCasesTotalLastWeek = $nationalCasesNonTravelersLastWeek + $nationalCasesTravelersLastWeek;
        /**=======================case end============================================= */


        /**=======================test start============================================= */
        /*test last*/
        $testNonTravelersLastWeek = DB::select("SELECT count(test_result) as 'total_covid_19_test_non_travelers' from lab_clean_data
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['l_to_date']}'
        and district=\"$dist\" and passport_no=''")[0]->total_covid_19_test_non_travelers;

        $testTravelersLastWeek = DB::select("SELECT count(test_result) as 'total_covid_19_test_travelers' from lab_clean_data
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['l_to_date']}'
        and district=\"$dist\" and passport_no!=''")[0]->total_covid_19_test_travelers;

        $testTotalLastWeek = $testNonTravelersLastWeek + $testTravelersLastWeek;

        /*test recent*/
        $testNonTravelersRecentWeek = DB::select("SELECT count(test_result) as 'total_covid_19_test_non_travelers' from lab_clean_data
        where date_of_test >='{$date['r_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and district=\"$dist\" and passport_no=''")[0]->total_covid_19_test_non_travelers;

        $testTraverRecentWeek = DB::select("SELECT count(test_result) as 'total_covid_19_test_travelers' from lab_clean_data
        where date_of_test >='{$date['r_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and district=\"$dist\" and passport_no!=''")[0]->total_covid_19_test_travelers;

        $testTotalRecentWeek = $testNonTravelersRecentWeek + $testTraverRecentWeek;

        /*test change*/
        $testNonTravelersChange =  $testNonTravelersRecentWeek - $testNonTravelersLastWeek;
        $testTravelersChange =  $testTraverRecentWeek - $testTravelersLastWeek;
        $testChange =  $testTotalLastWeek + $testTotalRecentWeek;

        /*division test*/
        $disvisionTestNonTravelersLastWeek = DB::select("SELECT count(*) as 'divison_last_2_weeks_non_travelers' from lab_clean_data
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and division='DHAKA' and passport_no=''")[0]->divison_last_2_weeks_non_travelers;

        $disvisionTestTravelersLastWeek = DB::select("SELECT count(*) as 'divison_last_2_weeks_travelers' from lab_clean_data
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and division='DHAKA' and passport_no!=''")[0]->divison_last_2_weeks_travelers;

        $disvisionTestTotalLastWeek = $disvisionTestNonTravelersLastWeek + $disvisionTestTravelersLastWeek;

        /*national test*/
        $nationalTestNonTravelersLastWeek = DB::select("SELECT count(*) as 'national_last_2_weeks__non_travelers' from lab_clean_data
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and passport_no=''")[0]->national_last_2_weeks__non_travelers;

        $nationalTestTravelersLastWeek = DB::select("SELECT count(*) as 'national_last_2_weeks__travelers' from lab_clean_data
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and passport_no!=''")[0]->national_last_2_weeks__travelers;

        $nationalTestTotalLastWeek = $nationalTestNonTravelersLastWeek + $nationalTestTravelersLastWeek;
        /**=======================test start============================================= */


        /**=======================positivity start============================================= */
        /*positivity last*/
        $positivityNonTravelersLastWeek = DB::select("SELECT round((a.positive_tests/a.total_tests)*100, 2) 
        as 'test_positivity_non_travelers'
         from
        (select count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data 
        WHERE date_of_test<='{$date['l_to_date']}'
        and date_of_test>='{$date['l_from_date']}' and district=\"$dist\" and passport_no='')as a")[0]->test_positivity_non_travelers;

        $positivityTravelersLastWeek = DB::select("SELECT  round((a.positive_tests/a.total_tests)*100, 2) 
        as 'test_positivity_travelers'
         from
        (select count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data 
        WHERE date_of_test<='{$date['l_to_date']}'
        and date_of_test>='{$date['l_from_date']}' and district= \"$dist\" and passport_no!='')as a")[0]->test_positivity_travelers;

        $positivityTotalLastWeek = $positivityNonTravelersLastWeek + $positivityTravelersLastWeek;

        /*positivity recent*/
        $positivityNonTravelersRecentWeek = DB::select("SELECT round((a.positive_tests/a.total_tests)*100, 2) 
        as 'test_positivity_non_travelers'
         from
        (select count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data 
        WHERE date_of_test<='{$date['r_to_date']}'
        and date_of_test>='{$date['r_from_date']}' and district=\"$dist\" and passport_no='')as a")[0]->test_positivity_non_travelers;

        $positivityTraverRecentWeek = DB::select("SELECT  round((a.positive_tests/a.total_tests)*100, 2) 
        as 'test_positivity_travelers'
         from
        (select count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data 
        WHERE date_of_test<='{$date['r_to_date']}'
        and date_of_test>='{$date['r_from_date']}' and district=\"$dist\" and passport_no!='')as a")[0]->test_positivity_travelers;

        $positivityTotalRecentWeek = $positivityNonTravelersRecentWeek + $positivityTraverRecentWeek;

        /*positivity change*/
        $positivityNonTravelersChange =  $positivityNonTravelersRecentWeek - $positivityNonTravelersLastWeek;
        $positivityTravelersChange =  $positivityTraverRecentWeek - $positivityTravelersLastWeek;
        $positivityChange =  $positivityTotalLastWeek + $positivityTotalRecentWeek;

        /*division positivity*/
        $disvisionPositivityNonTravelersLastWeek = DB::select("SELECT round((a.positive_tests/a.total_tests)*100, 2) 
        as 'Division_test_positivity_total_non_traveler'
         from
        (select count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data 
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and division='DHAKA' and passport_no='')as a")[0]->Division_test_positivity_total_non_traveler;

        $disvisionPositivityTravelersLastWeek = DB::select("SELECT  round((a.positive_tests/a.total_tests)*100, 2) 
        as 'Division_test_positivity_total_traveler'
         from
        (select count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data 
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and division='DHAKA' and passport_no!='')as a")[0]->Division_test_positivity_total_traveler;

        $disvisionPositivityTotalLastWeek = $disvisionPositivityNonTravelersLastWeek + $disvisionPositivityTravelersLastWeek;

        /*national positivity*/
        $nationalPositivityNonTravelersLastWeek = DB::select("SELECT round((a.positive_tests/a.total_tests)*100, 2) 
        as 'national_test_positivity_non_traveler'
         from
        (select count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data 
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and passport_no='')as a")[0]->national_test_positivity_non_traveler;

        $nationalPositivityTravelersLastWeek = DB::select("SELECT round((a.positive_tests/a.total_tests)*100, 2) 
        as 'national_test_positivity_traveler'
         from
        (select count(*) as total_tests,
        sum(test_result LIKE 'positive') as positive_tests FROM lab_clean_data 
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and passport_no!='')as a")[0]->national_test_positivity_traveler;

        $nationalPositivityTotalLastWeek = $nationalPositivityNonTravelersLastWeek + $nationalPositivityTravelersLastWeek;
        /**=======================positivity start============================================= */


        /**=======================hospitalization start============================================= */
        /*test last*/
        $hospitalizationGeneralLastWeek = DB::select("SELECT (sum(alocatedGeneralBed)-sum(AdmittedGeneralBed)) as 'Dhaka_Unused_generel_bed' from hospitaltemporarydata
        WHERE date<='{$date['l_to_date']}'
        and date>='{$date['l_from_date']}'
        and city=\"$dist\"")[0]->Dhaka_Unused_generel_bed;

        $hospitalizationIcuLastWeek = DB::select("SELECT (sum(alocatedICUBed)-sum(AdmittedICUBed)) as 'Dhaka_Unused_ICU_bed' from hospitaltemporarydata
        WHERE date<='{$date['l_to_date']}'
        and date>='{$date['l_from_date']}'
        and city=\"$dist\"")[0]->Dhaka_Unused_ICU_bed;

        

        /*test recent*/
        $hospitalizationGeneralRecentWeek = DB::select("SELECT (sum(alocatedGeneralBed)-sum(AdmittedGeneralBed)) as 'Dhaka_Unused_generel_bed' from hospitaltemporarydata
        WHERE date<='{$date['r_to_date']}'
        and date>='{$date['r_from_date']}'
        and city=\"$dist\"")[0]->Dhaka_Unused_generel_bed;

        $hospitalizationIcuRecentWeek = DB::select("SELECT (sum(alocatedICUBed)-sum(AdmittedICUBed)) as 'Dhaka_Unused_ICU_bed' from hospitaltemporarydata
        WHERE date<='{$date['r_to_date']}'
        and date>='{$date['r_from_date']}'
        and city=\"$dist\"")[0]->Dhaka_Unused_ICU_bed;

        

        /*test change*/
        $hospitalizationGeneralChange =  $hospitalizationGeneralRecentWeek - $hospitalizationGeneralLastWeek;
        $hospitalizationIcuChange =  $hospitalizationIcuRecentWeek - $hospitalizationIcuLastWeek;
        

        /*division test*/
        /*$disvisionHospitalizationNonTravelersLastWeek = DB::select("SELECT count(*) as 'divison_last_2_weeks_non_travelers' from lab_clean_data
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and division='DHAKA' and passport_no=''")[0]->divison_last_2_weeks_non_travelers;

        $disvisionHospitalizationTravelersLastWeek = DB::select("SELECT count(*) as 'divison_last_2_weeks_travelers' from lab_clean_data
        where date_of_test >='{$date['l_from_date']}' and date_of_test <='{$date['r_to_date']}'
        and division='DHAKA' and passport_no!=''")[0]->divison_last_2_weeks_travelers;

        $disvisionHospitalizationTotalLastWeek = $disvisionHospitalizationNonTravelersLastWeek + $disvisionHospitalizationTravelersLastWeek;*/

        /*national test*/
        $nationalHospitalizationGeneralLastWeek = DB::select("SELECT (sum(alocatedGeneralBed)-sum(AdmittedGeneralBed)) as 'Total_Unused_generel_bed' from hospitaltemporarydata
        WHERE date<='{$date['r_to_date']}'
        and date>='{$date['l_from_date']}'")[0]->Total_Unused_generel_bed;

        $nationalHospitalizationIcuLastWeek = DB::select("SELECT (sum(alocatedICUBed)-sum(AdmittedICUBed)) as 'Total_ICU_bed' from hospitaltemporarydata
        WHERE date<='{$date['r_to_date']}'
        and date>='{$date['l_from_date']}'")[0]->Total_ICU_bed;

        
        /**=======================hospitalization start============================================= */
        


        //dd($date);
        //     $data =  DB::connection('mysql2')->select('SELECT 
        //     date_of_test,
        //     sum(passport_no = "") as "Tests (Non-Traveller)",
        //     sum(passport_no != "") as "Tests (Traveller)",
        //     sum(passport_no = "" AND test_result = "Positive") as "Cases (Non-Traveller)", 
        //     sum(passport_no != "" AND test_result = "Positive") as "Cases (Traveller)",
        //     district as District,
        //     division as Division
        // FROM lab_clean_data 
        // WHERE date_of_test > "2020-11-06 00:00:00" AND date_of_test <= "2020-11-17 00:00:00"
        // GROUP BY date_of_test, District, Division
        // ');
        // dd($data);
        return '<table style="border-collapse: collapse; border-spacing: 0; margin : 80px auto 0px auto;">
        <thead>
            <tr>
                <th>Covid-19 Indicators</th>
                <th>2 weeks ago<br>('.$date['l_from_date'].'-'.$date['l_to_date'].')</th>
                <th>Last Week<br>('.$date['r_from_date'].'-'.$date['r_to_date'].')</th>
                <th>Change</th>
                <th>Dhaka Divison <br>(Last 2 weeks)</th>
                <th>National <br>(Last 2 weeks)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tests (Non-Traveller)</td>
                <td>'.$casesNonTravelersLastWeek.'</td>
                <td>'.$casesNonTravelersRecentWeek.'</td>
                <td>'.$casesNonTravelersChange.'</td>
                <td></td>
                <td>'.$nationalCasesNonTravelersLastWeek.'</td>
            </tr>
            <tr>
                <td>Tests (Traveller)</td>
                <td>'.$casesTravelersLastWeek.'</td>
                <td>'.$casesTravelersRecentWeek.'</td>
                <td>'.$casesTravelersChange.'</td>
                <td></td>
                <td>'.$nationalCasesTravelersLastWeek.'</td>
            </tr>
            <tr>
                <td>Cases (Non-Traveller)</td>
                <td>'.$testNonTravelersLastWeek.'</td>
                <td>'.$testNonTravelersRecentWeek.'</td>
                <td>'.$testNonTravelersChange.'</td>
                <td></td>
                <td>'.$nationalTestNonTravelersLastWeek.'</td>
            </tr>
            <tr>
                <td>Cases (Traveller)</td>
                <td>'.$testTravelersLastWeek.'</td>
                <td>'.$testTraverRecentWeek.'</td>
                <td>'.$testTravelersChange.'</td>
                <td></td>
                <td>'.$nationalTestTravelersLastWeek.'</td>
            </tr>
            <tr>
                <td>Test Positivity (Non-Traveller)</td>
                <td>'.$positivityNonTravelersLastWeek.'</td>
                <td>'.$positivityNonTravelersRecentWeek.'</td>
                <td>'.$positivityNonTravelersChange.'</td>
                <td></td>
                <td>'.$nationalPositivityNonTravelersLastWeek.'</td>
            </tr>
            <tr>
                <td>Test Positivity (Traveller)</td>
                <td>'.$positivityTravelersLastWeek.'</td>
                <td>'.$positivityTraverRecentWeek.'</td>
                <td>'.$positivityNonTravelersChange.'</td>
                <td></td>
                <td>'.$nationalPositivityNonTravelersLastWeek.'</td>
            </tr>
            <tr>
                <td>Unused Hospital Beds (General)</td>
                <td>'.$hospitalizationGeneralLastWeek.'</td>
                <td>'.$hospitalizationGeneralRecentWeek.'</td>
                <td>'.$hospitalizationGeneralChange.'</td>
                <td></td>
                <td>'.$nationalHospitalizationGeneralLastWeek.'</td>
            </tr>
            <tr>
                <td>Unused Hospital Beds (ICU)</td>
                <td>'.$hospitalizationIcuLastWeek.'</td>
                <td>'.$hospitalizationIcuRecentWeek.'</td>
                <td>'.$hospitalizationIcuChange.'</td>
                <td></td>
                <td>'.$nationalHospitalizationIcuLastWeek.'</td>
            </tr>
        </tbody>
    </table>';
    }



    public function cleanDistricName($dist){
        return strtolower(str_replace(' ', '_', str_replace("'", '', $dist)));
    }


    public function newsBulletinPdfView($id, $name){
        return response()->file('storage/dashboard/bulletin/'.$id.'/'.$name.'/dashboard.pdf');
    }

    public function newsBulletinPdfDownload($id, $name){
        $file= storage_path(). 'storage/dashboard/bulletin/'.$id.'/'.$name.'/dashboard.pdf';

        $headers = array(
              'Content-Type: application/pdf',
            );
            return response()->download($file); 
    }

    public function chartHistory(Request $request)
    {
        $charts= ChartUploadLog::get();
        // dd($charts);
        return view("superadmin.bulletin.chart-history", compact('charts'));
    }


    function bulletinChart()
    {
        $districts =  DB::table('div_dist')->get()->map(function($dist) {
            return ['clean' => $this->cleanDistricName($dist->district), 'original'=> en2bnTranslation($dist->district)];
        })->pluck('original', 'clean');
        $calendar = WeeklyDate::doesnthave('notGenerated')->orderBy('date_id', 'DESC')->get()->pluck('date_ban', 'date_id');
        return view("superadmin.bulletin.chart-upload", compact('calendar', 'districts'));
    }

    public function bulletinChartViewAndEdit($id){
        $districts =  DB::table('div_dist')->get()->map(function($dist) {
            return ['clean' => $this->cleanDistricName($dist->district), 'original'=> en2bnTranslation($dist->district)];
        })->pluck('original', 'clean');
        $calendar = WeeklyDate::doesnthave('notGenerated')->orderBy('date_id', 'DESC')->get()->pluck('date_ban', 'date_id');
        $exitsData = ChartUploadLog::find($id);
        return view("superadmin.bulletin.chart-upload-update", compact('calendar', 'districts', 'exitsData'));
    }

    function bulletinChartUpload(Request $request){
        
        request()->validate([
            'calendar_date'  => 'required',
            'district_name'  => 'required',
            'daily_effected'  => 'required|mimes:jpg,png|max:1048',
            'district_chart'  => 'required|mimes:jpg,png|max:1048',
            'map'  => 'required|mimes:jpg,png|max:1048',
        ],[
            'calendar_date.required'  => '* তারিখ আবশ্যক',
            'district_name.required'  => '* জেলার নাম আবশ্যক',
            'daily_effected.required'  => '১. দৈনিক সনাক্তের সংখ্যার ফাইল আবশ্যক',
            'daily_effected.mimes'  => '১. দৈনিক সনাক্তের সংখ্যার ফাইল ধরণ [ jpg, png ] আবশ্যক',
            'district_chart.required'  => '২. জেলা ভিত্তিক দৈনিক পরীক্ষা বিবেচনায় সনাক্তের হারের ফাইল আবশ্যক',
            'district_chart.mimes'  => '২. জেলা ভিত্তিক দৈনিক পরীক্ষা বিবেচনায় সনাক্তের হারের ফাইল ধরণ [ jpg, png ] আবশ্যক',
            'map.required'  => '৩. মাপের ফাইল আবশ্যক',
            'map.mimes'  => '৩. মাপের ফাইল ধরণ [ jpg, png ] আবশ্যক',
        ]);

        $calendarDate = $request->calendar_date;
        $districtName = $request->district_name;
        list($file1, $file2, $file3)=[$request->file('daily_effected'), $request->file('district_chart'), $file3 = $request->file('map')];    
        if ($file1 && $file2 && $file3) {
            $path = storage_path('app/public/dashboard/chart/'.$calendarDate.'/'.$districtName);
            
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            
              $fileName1 = 'chart1.png';
              $fileName2 = 'chart2.png';;
              $fileName3 = 'chart3.png';;
              $file1->move($path, $fileName1);
              $file2->move($path, $fileName2);
              $file3->move($path, $fileName3);

              $alreadyExistData = ChartUploadLog::where('district_name', $districtName)->where('date_id', $calendarDate)->first();
              if(empty($alreadyExistData)){
                  $chart = new ChartUploadLog;
                  $chart->district_name = $districtName;
                  $chart->date_id = $calendarDate;
                  $chart->status = 1;
                  $chart->save();
              }  

              return redirect()->back()
              ->withSuccess('Great! file has been successfully uploaded.');
           }
    }

    public function checkBulletinChartUpload(Request $request){

       $date_id = $request->date_id;
       $selectedArray = $request->district_name;
       $existArray  = ChartUploadLog::where('date_id', $date_id)->whereIn('district_name', $selectedArray)->get()->pluck('district_name')->toArray();

       $checkList = array_merge(array_diff($selectedArray, $existArray), array_diff($existArray, $selectedArray));
   
       $html = '';
       $ul = '';
       foreach($checkList as $key=>$value){
            $ul .= '<span class="badge badge-warning" style="font-weight:bolder"> '.en2bnTranslation($value).' </span>&nbsp;';
       }
       
   
       
       $html .= '<div class="color-box space alert alert-success" style="color: #fff;background-color: #3f5b4e;border-color: #38cb89;">
                    <div class="shadow">
                        <div class="info-tab tip-icon" title="Useful Tips"><i></i></div>
                        <div class="tip-box">
                            <p><strong>সতর্কতা :</strong> আপানকে যদি বুলেটিন তৈরী করতে চান, তাহলে প্রথমে নিন্মোক্ত জেলা সমূহের চার্ট গুলো আপলোড করে আসতে হবে|</p>
                            '.$ul.'
                        </div>
                    </div>
                </div>';
        $html2 = '<div class="col-8"><button style="margin: 50px auto" type="submit" class="btn btn-primary align-center"> তৈরী করুন</button></div>';        
        if(count($checkList) > 0 || !empty($checkList)){
            return $html;
        }else{
            return $html2;
        }
        
    }


    public function emailMappingHistory(Request $request)
    {
        $emails= EmailMapping::with('ccEmail')->get();
        // dd($emails);
        return view("superadmin.bulletin.email-mapping-history", compact('emails'));
    }


    function addEmailMapping()
    {
        $districts =  DB::table('div_dist')->get()->map(function($dist) {
            return ['clean' => $this->cleanDistricName($dist->district), 'original'=> en2bnTranslation($dist->district)];
        })->pluck('original', 'clean');
        $calendar = WeeklyDate::doesnthave('notGenerated')->orderBy('date_id', 'DESC')->get()->pluck('date_ban', 'date_id');
        return view("superadmin.bulletin.add-email-mapping", compact('calendar', 'districts'));
    }

    function saveEmailMapping(Request $request)
    {
        request()->validate([
            'district_name'  => ['required', 'unique:email_mappings,district_name,null',],
            'to_address'  => 'required',
        ],[
            'district_name.required'  => '* টু ইমেইল এড্রেস আবশ্যক',
            'district_name.required'  => '* জেলার নাম আবশ্যক'
        ]);

        $to_addr = $request->to_address;
        $dist = $request->district_name;
        

        $to_email = new EmailMapping;
        $to_email->district_name = $dist;
        $to_email->to_address = $to_addr;
        $to_email->status = 1;
        $to_email->save();

       
        $cc_addr = $request->cc_address;
        if(!empty($cc_addr)){
            foreach($cc_addr as $key=>$addr){
                $cc_email = new CcEmail;
                $cc_email->to_addr_id = $to_email->id;
                $cc_email->cc_address = $addr;
                $cc_email->status = 1;
                $cc_email->save();
            }
        }

        return redirect()->back()->withSuccess('Great! file has been successfully uploaded.');

    }

    public function editEmailMapping($id)
    {
        $existData = EmailMapping::with('ccEmail')->where('id', $id)->first();
        // dd($existData);
        $districts =  DB::table('div_dist')->get()->map(function($dist) {
            return ['clean' => $this->cleanDistricName($dist->district), 'original'=> en2bnTranslation($dist->district)];
        })->pluck('original', 'clean');
        $calendar = WeeklyDate::doesnthave('notGenerated')->orderBy('date_id', 'DESC')->get()->pluck('date_ban', 'date_id');
        return view("superadmin.bulletin.edit-email-mapping", compact('calendar', 'districts', 'existData', 'id'));
    }

    public function updateEmailMapping(Request $request, $id){
        request()->validate([
            'to_address'  => 'required',
        ],[
            'district_name.required'  => '* টু ইমেইল এড্রেস আবশ্যক',
            'district_name.required'  => '* জেলার নাম আবশ্যক'
        ]);

        $to_addr = $request->to_address;
        $dist = $request->district_name;
        

        $to_email = EmailMapping::find($id);
        $to_email->to_address = $to_addr;
        $to_email->status = 1;
        $to_email->save();

       
        $cc_addr = $request->cc_address;
        if(!empty($cc_addr)){
            CcEmail::where('to_addr_id', $to_email->id)->delete();
            foreach($cc_addr as $key=>$addr){
                $cc_email = new CcEmail;
                $cc_email->to_addr_id = $to_email->id;
                $cc_email->cc_address = $addr;
                $cc_email->status = 1;
                $cc_email->save();
            }
        }

        return redirect()->back()->withSuccess('Great! file has been successfully uploaded.');
    }


    public function newsBulletinPdfSendEMail(Request $request, $date_id, $district)
    {
        $mailList = EmailMapping::with('ccEmail')->where('district_name', $district)->first();
        $toMailAddress = $mailList->to_address ?? '';
        $ccMailAddeess = (isset($mailList->ccEmail)) ? $mailList->ccEmail->map(function($q){ return $q->cc_address; })->toArray():'';
        if (empty($toMailAddress)) {
            return redirect()->back()->with('error','Opps! Did not set any email.');
        }

        //$pdf_file_path = storage_path('app/public/dashboard/pdf/' . $this->fileNameGenerate() . '.pdf');
        $pdf_file_path = storage_path("app/public/dashboard/bulletin/$date_id/$district/dashboard.pdf");
        //$data = ['name' => 'khayrk hasan pdf'];
        //$data2 = ['id' => '1195'];
        //PDF::loadView('emails.dashboard.hpm-pdf', $data)->save($pdf_file_path);
        if (!empty($toMailAddress)) {
            
            $this->sendMail($toMailAddress, $ccMailAddeess, $pdf_file_path);
        }
        NewsBulletinLog::where('date_id', $date_id)->where('district_name', $district)->update(['status'=> 1, 'count'=>1 ]);
        return redirect()->back()->with('success','Email sent successfully.');
        // unlink($my_pdf_path);
    }


     /**
     * sending email to user
     *
     * @param string $emails
     * @param obj $data2
     * @param filePath $pdf
     * @return void
     */
    public function sendMail($toEmails, $ccEmail, $pdf)
    {
       
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.dashboard.corona.gov.bd';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'newsletter@dashboard.corona.gov.bd';                     //SMTP username
            $mail->Password   = 'xWRo7gf9';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 25;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            // dd($mail);
            //Recipients
            $mail->setFrom('newsletter@dashboard.corona.gov.bd', 'জাতীয় কোভিড-১৯ ড্যাশবোর্ড');
            $mail->addAddress($toEmails);     //Add a recipient
            $mail->addReplyTo('newsletter@dashboard.corona.gov.bd', 'Information');

            foreach($ccEmail as $key=> $value){
                $mail->addCC($value);
            }
            
            //Attachments
            // dd($pdf);
            $mail->addAttachment($pdf);         //Add attachments
            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'জাতীয় কোভিড-১৯ ড্যাশবোর্ড সাপ্তাহিক বুলেটিন';
            $mail->Body    = '<p>সম্মানিত স্যার,</p>
            <p>এটুআই প্রোগ্রামের পক্ষ থেকে শুভেচ্ছা।</p>
            <p>বর্তমান কোভিড-১৯ পরিস্থিতিতে ডাটাভিত্তিক স্বাস্থ্যসেবা নিশ্চিত করা খুবই গুরুত্বপূর্ণ একটি বিষয়। সে লক্ষ্যে করোনা মহামারী পরিস্থিতিতে সর্বস্তরের নীতি নির্ধারকবর্গের ডাটাভিত্তিক সিদ্ধান্ত গ্রহণের মাধ্যমে স্বাস্থ্যসেবা নিশ্চিত করার নিমিত্ত &ldquo;জাতীয় কোভিড-১৯ ড্যাশবোর্ড&rdquo;-টি তৈরি করা হয়েছে। আপনার জেলার সাপ্তাহিক তথ্য-উপাত্ত বিশ্লেষণ করে নীতি প্রণয়ন ও নির্ধারণে সহায়তা করার লক্ষে এই ইমেইলে &ldquo;<b>জাতীয় কোভিড-১৯ ড্যাশবোর্ড&rdquo;-এর সাপ্তাহিক বুলেটিনটি সংযুক্ত করা হয়েছে। বুলেটিনটি দেখার জন্য অনুরোধ করা হল।</b></p>
            <p>&ldquo;জাতীয় কোভিড-১৯ ড্যাশবোর্ড&rdquo;-টি বিস্তারিত দেখতে নিম্মক্ত লিংকে ক্লিক করুন।</p>
            <p>লিংক: <a href="https://dashboard.corona.gov.bd/">https://dashboard.corona.gov.bd/</a><br />ইউজার আইডি: আপনার অফিসিয়াল ইমেইল <br />পাসওয়ার্ড: 123456</p>
            <p>ধন্যবাদ ও কৃতজ্ঞতাসহ,<br />নওমী জেসিকা<br />রিসার্চ অ্যাসিস্ট্যান্ট<br />এটুআই প্রোগ্রাম<br />মোবাইল নংঃ ০১৭৭৭৯৭৬৮২৫</p>';
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            
            //dd('dd');
            $mail->send();
            //echo 'Message has been sent';
            
        } catch (Exception $e) {
            dd($e);
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
            //dispatch(new SendEmailJob($email, $data2, $pdf)); // for queue job
            //Mail::to($toEmails)->cc($ccEmail)->send(new HpmDashboardMail($data2, $pdf));
       

    }
    
}
