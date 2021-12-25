<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

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
            'pfn'=>'required',
        ]);
        
        $save_application = new Application();
        $save_application->session = $session;
        $save_application->application_number = $application_number;
        $save_application->PFN=$applicationDetails->pfn;
        $save_application->save();
    }
}
