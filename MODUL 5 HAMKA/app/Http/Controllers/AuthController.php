<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session; 

class AuthController extends Controller
{
    public function LoginHamka(){
        return view('LoginHamka');
    }
    public function RegisterHamka(){
        return view('RegisterHamka');
    }
    public function cekLogin(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/HomeHamka');
        }
 
        

        Session::flash('status', 'failed');
        Session::flash('message', 'proses login gagal');
        return view('/LoginHamka');

    }
    public function Logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/LoginHamka');
    }
}
