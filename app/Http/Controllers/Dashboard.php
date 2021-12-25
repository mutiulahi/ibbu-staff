<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    // add staff index
    public function add_staff_index()
    {
        return view('add_staff');
    }

    // add staff action
    public function add_staff_action(Request $staff_details)
    {
        $staff_details->validate([
            'email' => 'required|unique:staff|email',
            'name' => 'required',
            'rank' => 'required',
            'department' => 'required',
            'pfn' => 'required|unique:staff',
            'sex' => 'required',
            'date_of_birth' => 'required',
            'state' => 'required',
            'local_government' => 'required',
            'qualification' => 'required',
            'nature' => 'required',
            'date_first_appoint' => 'required',
            'date_present_appoint' => 'required',
            'grade_step' => 'required',
            'station' => 'required',
        ]);
        $qualifications = '';
        foreach ($staff_details->qualification as $value) {
            $qualifications .= $value . ',';
        }


        $save_staff_details = new Staff;
        $save_staff_details->email = $staff_details->email;
        $save_staff_details->name = $staff_details->name;
        $save_staff_details->rank = $staff_details->rank;
        $save_staff_details->department = $staff_details->department;
        $save_staff_details->PFN = $staff_details->pfn;
        $save_staff_details->sex = $staff_details->sex;
        $save_staff_details->DOB = $staff_details->date_of_birth;
        $save_staff_details->state = $staff_details->state;
        $save_staff_details->LG = $staff_details->local_government;
        $save_staff_details->qualification = $qualifications;
        $save_staff_details->nature = $staff_details->nature;
        $save_staff_details->date_first_appoint = $staff_details->date_first_appoint;
        $save_staff_details->date_present_appoint = $staff_details->date_present_appoint;
        $save_staff_details->grade_step = $staff_details->grade_step;
        $save_staff_details->station = $staff_details->station;
        $save_staff_details->status = "active";
        $save_staff_details->save();

        return back()->with('success', 'Staff Successful Added.');
    }

    // view staff index 
    public function view_staff_index()
    {
        $fetch_staff = DB::table('staff')->get();

        return view('view_staff', ['fetch_staff' => $fetch_staff]);
    }
}
