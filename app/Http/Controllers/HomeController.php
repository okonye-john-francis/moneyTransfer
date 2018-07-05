<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $false = 0;
       if (Auth::User()->is_active == $false) {
           return view('userpages.blockedUser');
       }
       elseif (Auth::User()->email == 'admin@admin.com') {
           return view('layouts.adminindex');
       }
       elseif (Auth::User()->email != 'admin@admin.com') {
           return view('userpages.sendMoney');
       }
        
    }
}
