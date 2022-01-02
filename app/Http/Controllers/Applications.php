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
            'pfn'=>'required|exists:applications,PFN',
        ]);

        $save_application = new Application();
        $save_application->session = $session;
        $save_application->status = 'pending';
        $save_application->application_number = $application_number;
        $save_application->PFN=$applicationDetails->pfn;
        $save_application->save();
    } 
    public function applied() 
    {
        $session = 2021;
        // $get_applications = DB::table('applications')->where('session',$session)->get();
        $get_applications = DB::table('applications')
                ->join('staff', 'applications.PFN', '=', 'staff.PFN')
                ->where('applications.session',$session)
                ->get();

        return view('applied', ['applications'=>$get_applications]);
    }   

    public function accept() 
    {
        $session = 2021;
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

        $grade_step_input = 'Grade'.$pfn_num->grade.'/Step'.$pfn_num->step;
       $approve_application = DB::table('applications')
                    ->where('PFN',$pfn_num->pfn)
                    ->update(['app_status' =>'accept']);

        $upgrade_application = DB::table('staff')
                    ->where('PFN',$pfn_num->pfn)
                    ->update(['grade_step' =>$grade_step_input]);


        return redirect()->route('applied')->with('success','Staff promotion successfully accepted');

    }
}
