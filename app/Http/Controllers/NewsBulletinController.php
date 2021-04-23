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
        
        
        
        set_time_limit(8000000);
        foreach($districtsArray as $key=>$value){    
            $pdfResults = '';
           
            $path = storage_path('app/public/dashboard/bulletin/'.$data_id.'/'.$key); //stor path 
            
            $uploadPathForPdf = asset("storage/dashboard/chart/$data_id/$key/"); //upload chart path for pdf
            $labelArray = $this->pdfDataPrepare($data_id, $value, $uploadPathForPdf);
            

            $pdf = PDF::loadView('superadmin.bulletin.bulletin-generator-template', compact('pdfResults', 'labelArray', 'uploadPathForPdf'));
            
            
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $fileName =  'dashboard' . '.' . 'pdf' ;
            // dd($path);
            $pdf->save($path . '/' . $fileName);

            $bolletin = new NewsBulletinLog;
            $bolletin->district_name = $value;
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
                <th>2 weeks ago<br>(Mar 28-Apr 03)</th>
                <th>Last Week<br>(Apr04-Apr-10)</th>
                <th>Change</th>
                <th>Dhaka Divison <br>(Last 2 weeks)</th>
                <th>National <br>(Last 2 weeks)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tests (Non-Traveller)</td>
                <td>62032</td>
                <td>70939</td>
                <td>+8907</td>
                <td>158141</td>
                <td>230453</td>
            </tr>
            <tr>
                <td>Tests (Traveller)</td>
                <td>10552</td>
                <td>10756</td>
                <td>+207</td>
                <td>45296</td>
                <td>133475</td>
            </tr>
            <tr>
                <td>Cases (Non-Traveller)</td>
                <td>22198</td>
                <td>23323</td>
                <td>+1125</td>
                <td>52108</td>
                <td>70118</td>
            </tr>
            <tr>
                <td>Cases (Traveller)</td>
                <td>1021</td>
                <td>867</td>
                <td>-154</td>
                <td>3381</td>
                <td>7814</td>
            </tr>
            <tr>
                <td>Test Positivity (Non-Traveller)</td>
                <td>35.78%</td>
                <td>32.88%</td>
                <td>-2.91%</td>
                <td>32.95%</td>
                <td>30.43%</td>
            </tr>
            <tr>
                <td>Test Positivity (Traveller)</td>
                <td>9.68%</td>
                <td>8.06%</td>
                <td>-1.62%</td>
                <td>7.46%</td>
                <td>5.85%</td>
            </tr>
            <tr>
                <td>Deaths</td>
                <td>138</td>
                <td>227</td>
                <td>+89</td>
                <td>476</td>
                <td>697</td>
            </tr>
            <tr>
                <td>Unused Hospital Beds (General)</td>
                <td>3541</td>
                <td>2966</td>
                <td>-575</td>
                <td>14405</td>
                <td>73332</td>
            </tr>
            <tr>
                <td>Unused Hospital Beds (ICU)</td>
                <td>25</td>
                <td>30</td>
                <td>+5</td>
                <td>102</td>
                <td>471</td>
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
        $to_email->district_name = $dist;
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
        dd('dd');
        $mailList = MailModel::whereIn('id', $request->userId)->get()->pluck('mail');
        //$pdf_file_path = storage_path('app/public/dashboard/pdf/' . $this->fileNameGenerate() . '.pdf');
        $pdf_file_path = storage_path('app/public/dashboard/source/dashboard.corona.gov.bd.pdf');
        $data = ['name' => 'khayrk hasan pdf'];
        $data2 = ['id' => '1195'];
        //PDF::loadView('emails.dashboard.hpm-pdf', $data)->save($pdf_file_path);
        if (count($mailList) > 0) {
            $users = $mailList;
            $this->sendMail($users, $data2, $pdf_file_path);
        }
        return redirect()->back();
        // unlink($my_pdf_path);
    }
    
}
