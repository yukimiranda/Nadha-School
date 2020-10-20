<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainCon extends Controller
{
    public function dashboard(Request $request)
    {
        if($request->session()->has('username')) {
            return view('home.dashboard');
        }else{
            return redirect('login');
        }
    }
}