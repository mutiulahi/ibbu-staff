<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function add_staff_index(Request $staff_details)
    {
        return view('add_staff');
    }
}
