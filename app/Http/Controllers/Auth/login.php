<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class login extends Controller
{
    //
    public function index_login()
    {
        return(view('auth.login'));
    }

    public function login_action(Request $detail)
    {
       
        $email = $detail->email;
        $password = $detail->password;

        $credentials = $detail->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $detail->session()->regenerate();

            return redirect()->intended('dashboard');
        }else{
            return back()->with('error', 'The provided credentials do not match our records.');
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',

        // ]);

        // $save = new User;
        // $save->name = 'Detty Establishment';
        // $save->email = $email;
        // $save->password = Hash::make($password);
        // $save->save();
        // return back()->with('error', 'The provided credentials do not match our records.');
    }
}
?>