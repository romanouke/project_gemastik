<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('user/index');
    }

    public function services(){
        return view('user/services');
    }
    public function porter(){
        return view('porter/index');
    }
    public function userporter(){
        return view('porter/users-profile');
    }
}
