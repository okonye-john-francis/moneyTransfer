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
         $all_system_users_from_db = User::all()->where('id', '<>', Auth::user()->id)->toArray();
        return view('layouts.adminIndex',compact('all_system_users_from_db'));
    }
}
