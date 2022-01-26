<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Applications extends Controller
{
    //

    public function application_index()
    { 
        return view('application_page');
    }

    public function application_action(Request $applicationDetails)
    { 
        $session = date('Y');
        $application_number = date('Ymd').rand(100,999); 

        $applicationDetails->validate([
            'pfn'=>'required|exists:staff|unique:applications',
        ]);

        $save_application = new Application();
        $save_application->session = $session;
        $save_application->app_status = 'pending';
        $save_application->application_number = $application_number;
        $save_application->PFN=$applicationDetails->pfn;
        $save_application->save();

        return back()->with('success', 'Your Application has been successfully submitted');
    } 
    public function applied() 
    {
        // $session = date('Y');
        // $session = 2021;
        // $get_applications = DB::table('applications')->where('session',$session)->get();
        $get_applications = DB::table('applications')
                ->join('staff', 'applications.PFN', '=', 'staff.PFN')
                // ->where('applications.session',$session)
                ->get();

        return view('applied', ['applications'=>$get_applications]);
    }   

    public function accept() 
    {
        $session = date('Y');
        $get_applications = DB::table('applications')
                ->join('staff', 'applications.PFN', '=', 'staff.PFN')
                ->where('applications.session',$session)
                ->where('applications.app_status','accept')
                ->get();

        return view('app_aproved', ['applications'=>$get_applications]);
    }   

    public function reject_app(Request $pfn_num)
    {
       $reject_application = DB::table('applications')
                    ->where('PFN',$pfn_num->pfn)
                    ->update(['app_status' =>'reject']);

        return redirect()->route('applied')->with('success','Staff promotion successfully rejected');

    }

    public function accept_app(Request $pfn_num)
    {
        if ($pfn_num->category == "academic") {
            $grade_step_input = 'CONUASS '.$pfn_num->grade;
        } else {
            $grade_step_input =  'CONTISS '.$pfn_num->grade;
        }
        $last_date = date('Y-m-d');

       $approve_application = DB::table('applications')
                    ->where('PFN',$pfn_num->pfn)
                    ->update(['app_status' =>'accept']);

        $upgrade_application = DB::table('staff')
                    ->where('PFN',$pfn_num->pfn)
                    ->update(['grade_step' =>$grade_step_input, 'step' => $pfn_num->step, 'rank' =>$pfn_num->rank, 'date_present_appoint'=>$last_date]);

        return redirect()->route('applied')->with('success','Staff promotion successfully accepted');

    }
}
