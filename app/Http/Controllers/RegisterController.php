<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('auth/register');
    }

    public function registerPost(Request $request){
        $user           = User::create([
            'nama'      => $request->nama,
            'username'  => $request->username,
            'no_hp'     => $request->no_hp,
            'jk'        => $request->jk,
            'alamat'    => $request->alamat,
            'role'      => $request->role,
            'password'  => Hash::make($request->password),
        ]);

        if($user){
            session()->flash('success', 'Registerasi berhasil');
            return redirect()->route('login');
        }else{
            session()->flash('error', 'Tolong di isi dengan benar');
            return back();
        }

    }
}
