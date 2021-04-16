<?php

namespace App\Http\Controllers;

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
        //$calendar = NewsBulletinLog::doesnthave('allReadyGenerate')->get();
        $calendar = WeeklyDate::doesnthave('notGenerated')->orderBy('date_id', 'DESC')->get()->pluck('date_ban', 'date_id');
        
        return view("superadmin.bulletin.create-bolletin", compact('calendar'));
    }

    public function newsBulletinGenerate(Request $request){
        request()->validate([
            'calendar_date'  => 'required',
        ]);

        $districts =  DB::table('div_dist')->get()->map(function($dist) {
            return ['clean' => $this->cleanDistricName($dist->district), 'original'=>$dist->district];
        })->pluck('original', 'clean');
        
        $data_id = $request->calendar_date;
        
        

        foreach($districts as $key=>$value){    
            $pdfResults = $this->preparedPdfData($value, $data_id);
            dd($pdfResults);
            $pdf = PDF::loadView('superadmin.bulletin.bulletin-generator-template', compact('pdfResults'));

            $path = storage_path('app/public/dashboard/bulletin/'.$data_id.'/'.$key);
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
            }
            $fileName =  'dashboard' . '.' . 'pdf' ;
            $pdf->save($path . '/' . $fileName);

            $bolletin = new NewsBulletinLog;
            $bolletin->district_name = $value;
            $bolletin->date_id = $data_id;
            $bolletin->status = 0;
            $bolletin->count = 0;
            $bolletin->created_by = Auth::user()->id;
            $bolletin->ip_address = '';
            $bolletin->save();
        }

        return redirect()->route('news-bulletin-history');
    }

    public function preparedPdfData($dist, $date_id){
        return $testNonTraveller = 'lll';
    }



    public function cleanDistricName($dist){
        return strtolower(str_replace(' ', '_', str_replace("'", '', $dist)));
    }


    public function newsBulletinPdfView($id, $name){
        return response()->file('storage/dashboard/bulletin/'.$id.'/'.$name.'/dashboard.pdf');
    }

    
    
}
