<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view ('admin.auth.login');
    }
    public function login_proses(Request $request){
        $request-> validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $data = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('staff.indexSoloEvent' );
        }
        else{
            return redirect()->route('login')->with('failed', 'Email atau password salah');
        };
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('succes','Anda berhasil logout');
    }
}
