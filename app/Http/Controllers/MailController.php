<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use App\Jobs\SendEmailJob;
use App\Mail as MailModel;
use Illuminate\Http\Request;
use App\Mail\HpmDashboardMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
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
    public function index(Request $request)
    {
        $mails = MailModel::simplePaginate(10);
        return view("superadmin.mail.index", compact('mails'));
    }

    /**
     * Create mail
     *
     * @return void
     */
    public function createForm()
    {

        return view("superadmin.mail.create");
    }

    /**
     * Save mail
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'mail' => 'required|string|min:3',
        ]);

        try {
            DB::begintransaction();
            $mail = new MailModel();
            $mail->first_name = $request->first_name;
            $mail->last_name = $request->last_name;
            $mail->designation = $request->designation;
            $mail->location = $request->location;
            $mail->phone = $request->phone;
            $mail->mail = $request->mail;
            $mail->is_active = $request->is_active;
            $mail->save();
            DB::commit();
            return redirect()->route('all-mail')->with("success", "User Create Successfully");
        } catch (\Exception $ex) {
            dd($ex);
            DB::rollback();
            Log::error('[Class => ' . __CLASS__ . ", function => " . __FUNCTION__ . " ]" . " @ " . $ex->getFile() . " " . $ex->getLine() . " " . $ex->getMessage());
            return redirect()->back()->withErrors('Something went wrong. Please try again')->withInput();
        }
    }

    /**
     * Edit user mail
     *
     * @param [type] $id
     * @return void
     */
    public function editForm($id)
    {
        $mail = MailModel::find($id);
        return view("superadmin.mail.edit", compact('mail'));
    }

    /**
     * mail list
     *
     * @param [type] $id
     * @param Request $request
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'mail' => 'required|string|min:3',
        ]);

        try {
            DB::begintransaction();
            $mail = MailModel::find($id);
            $mail->first_name = $request->first_name;
            $mail->last_name = $request->last_name;
            $mail->designation = $request->designation;
            $mail->location = $request->location;
            $mail->phone = $request->phone;
            $mail->mail = $request->mail;
            $mail->is_active = ($request->is_active == '1') ? 1:0;
            $mail->save();
            DB::commit();

            return redirect()->route('all-mail')->with("success", "Mail Successfully Updated");
        } catch (\Exception $ex) {
            DB::rollback();
            Log::error('[Class => ' . __CLASS__ . ", function => " . __FUNCTION__ . " ]" . " @ " . $ex->getFile() . " " . $ex->getLine() . " " . $ex->getMessage());
            return redirect()->back()->withErrors('Something went wrong. Please try again')->withInput();
        }
    }

    /**
     * Mail received to user list
     *
     * @return void
     */
    public function sendingEmail()
    {
        $mails = MailModel::where('is_active', 1)->get();
        return view("superadmin.mail.sending", compact('mails'));
    }

    /**
     * Trigger to mail for sending
     *
     * @param Request $request
     * @return void
     */
    public function sendingEmailTriggered(Request $request)
    {
        
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

    /**
     * sending email to user
     *
     * @param string $emails
     * @param obj $data2
     * @param filePath $pdf
     * @return void
     */
    public function sendMail($emails, $data2, $pdf)
    {
        foreach ($emails as $email) {
            //dispatch(new SendEmailJob($email, $data2, $pdf)); // for queue job
            Mail::to($email)->send(new HpmDashboardMail($data2, $pdf));
        }

    }

    /**
     * Generate number for file name
     *
     * @return void
     */
    public function fileNameGenerate()
    {
        $count = time();
        return date("ymd") . str_pad($count, 6, "0", STR_PAD_LEFT) . rand(100, 1000);
    }


    function mailPdf()
    {
        return view("superadmin.mail.pdf-upload");
    }

    public function mailPdfUpload(Request $request)
    {
        request()->validate([
            'hpm_pdf'  => 'required|mimes:pdf|max:1048',
        ]);
    
          if ($files = $request->file('hpm_pdf')) {
              $existFile = storage_path('app/public/dashboard/source/dashboard.corona.gov.bd.pdf');
              Storage::delete($existFile);
              $destinationPath = storage_path('app/public/dashboard/source/'); // upload path
              $fileName = "dashboard.corona.gov.bd.pdf";
              $files->move($destinationPath, $fileName);
              return redirect()->back()
              ->withSuccess('Great! file has been successfully uploaded.');
           }
    }
}
