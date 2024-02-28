<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{

  
    public function dashboard()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
  
        return redirect("login")->with('error', 'Please login to access the dashboard');
    }

      public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login')->with('message', 'You have logged out successfully!');;;
    }
}
