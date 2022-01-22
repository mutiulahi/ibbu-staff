<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Page;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index()
    {
        $select_me = DB::table('pages')->get();
        $total_app_prom = DB::table('applications')->count();
        $staff = DB::table('staff')->count();
        $total_app_accept = DB::table('applications')->where('app_status','accept')->count();
        $total_app_reject = DB::table('applications')->where('app_status','reject')->count();
        return view('dashboard',compact('select_me'),['staff'=>$staff,'total_app_prom'=>$total_app_prom, 'total_app_accept'=>$total_app_accept, 'total_app_reject'=>$total_app_reject]);

    }

    // add staff index
    public function add_staff_index()
    {
        return view('add_staff');
    }

    public function calendar()
    {
        return view('calendar');
    }

    // add staff action
    public function add_staff_action(Request $staff_details)
    {
        $staff_details->validate([
            // 'email' => 'required|unique:staff|email',
            'name' => 'required',
            'rank' => 'required',
            'department_or_unit' => 'required',
            'pfn' => 'required|unique:staff',
            'sex' => 'required',
            'date_of_birth' => 'required',
            'state' => 'required',
            'local_government' => 'required',
            'qualification' => 'required',
            'nature' => 'required',
            'date_first_appoint' => 'required',
            // 'date_last_appoint' => 'required', 
            'date_confirm_appoint' => 'required',
            'date_present_appoint' => 'required',
            'conuass_or_contiss' => 'required',
            'step' => 'required',
            'station' => 'required',
            'category' => 'required',
        ]); 

        if ($staff_details->category == 'academic') {
            $grade_steo_input = 'CONUASS '.$staff_details->conuass_or_contiss.' / STEP '.$staff_details->step;
        } else {
            $grade_steo_input = 'CONTISS '.$staff_details->conuass_or_contiss.' / STEP '.$staff_details->step;
        }
        
        


        $save_staff_details = new Staff;
        $save_staff_details->email = $staff_details->email;
        $save_staff_details->name = $staff_details->name;
        $save_staff_details->rank = $staff_details->rank;
        $save_staff_details->department = $staff_details->department_or_unit;
        $save_staff_details->PFN = $staff_details->pfn;
        $save_staff_details->sex = $staff_details->sex;
        $save_staff_details->DOB = $staff_details->date_of_birth;
        $save_staff_details->state = $staff_details->state;
        $save_staff_details->LG = $staff_details->local_government;
        $save_staff_details->qualification = $staff_details->qualification;
        $save_staff_details->nature = $staff_details->nature;
        $save_staff_details->date_first_appoint = $staff_details->date_first_appoint;
        $save_staff_details->date_present_appoint = $staff_details->date_present_appoint;
        $save_staff_details->date_confirm_appoint = $staff_details->date_confirm_appoint;
        $save_staff_details->grade_step = $grade_steo_input;
        $save_staff_details->station = $staff_details->station;
        $save_staff_details->category = $staff_details->category; 
        $save_staff_details->status = "1";
        $save_staff_details->save();

        return redirect()->back()->with('success', 'Staff Successful Added.');
    }

    // view active academic staff index 
    public function view_active_academic_staff_index()
    {
        $fetch_staff = DB::table('staff')
                        ->where('status','1')
                        ->where('category', 'academic')
                        ->get();

        return view('view_active_aca_staff', ['fetch_staff' => $fetch_staff]);
    }

    // view active non academic staff index 
    public function view_active_non_academic_staff_index()
    {
        $fetch_staff = DB::table('staff')
                        ->where('status','1')
                        ->where('category', 'non academic')
                        ->get();

        return view('view_active_non_aca_staff', ['fetch_staff' => $fetch_staff]);
    }


    // view non active staff index
    public function un_active_staff_index()
    {
        $fetch_staff = DB::table('staff')
                        ->where('status','2')
                        ->orWhere('status','3')
                        ->orWhere('status','4') 
                        ->get();

        return view('view_un_active_staff', ['fetch_staff' => $fetch_staff]);
    }

    //activate and deactivate promotion page
    public function promo_page(Request $page_status)
    {
        $status = $page_status->status;
        $select_me = DB::table('pages')->get();
        if (sizeof($select_me)>0) {
            $promotion_pages = DB::table('pages') 
                ->update(['promotion_page' =>$status]);

            // Page::where()
            //     ->update(['promotion_page' =>$status]);

        }else {
            $save_status = new Page;
            $save_status->promotion_page = $status;
            $save_status->save();
        }
        return redirect()->back();

    }

    // update staff status
    public function staff_status(Request $status) 
    {
        $new_status = $status->status; 
        $PFN = $status->pfn; 
        Staff::where('PFN',$PFN)
            ->update(['status' =>$new_status]);
        return redirect()->back()->with('success','Staff Status Successfully Updated');
    } 

    //  update staff record
    public function update_staff(Request $staff_details)
    {
        $id = $staff_details->id;

        // dd('kkk');
 
        if ($staff_details->category == 'academic') {
            $grade_steo_input = 'CONUASS '.$staff_details->conuass_or_contiss.' / STEP '.$staff_details->step;
        } else {
            $grade_steo_input = 'CONTISS '.$staff_details->conuass_or_contiss.' / STEP '.$staff_details->step;
        }

        Staff::where('id',$id)
            ->update([
                'email' => $staff_details->email,
                'name' => $staff_details->name,
                'rank' => $staff_details->rank,
                'department' => $staff_details->department,
                'PFN' => $staff_details->pfn,
                'sex' => $staff_details->sex,
                'DOB' => $staff_details->date_of_birth,
                'state' => $staff_details->state,
                'LG' => $staff_details->local_government,
                'qualification' => $staff_details->qualification,
                'nature' => $staff_details->nature,
                'date_first_appoint' => $staff_details->date_first_appoint,
                'date_confirm_appoint' => $staff_details->date_confirm_appoint,
                'date_present_appoint' => $staff_details->date_present_appoint,
                'grade_step' => $grade_steo_input,
                'station' => $staff_details->station,
                'category' => $staff_details->category, 
            ]);
        return back()->with('success','Staff Record Successfully Updated');
    } 
}
