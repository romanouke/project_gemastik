<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('index');
        }
        return view('auth/login');        
    }

    public function loginPost(Request $request){
        $validator = Validator::make($request->all(), [
            'username'  => 'required',
            'password'  => 'required'
        ]);
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();

            return redirect()->route('login');
        }
        return redirect()->route('')->with('error', 'password salah!');
    }
    public function logout(Request $request){
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}
