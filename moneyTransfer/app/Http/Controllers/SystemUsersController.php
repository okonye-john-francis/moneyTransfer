<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class SystemUsersController extends Controller
{
    

       public function get_all_system_users()
		    {
		        
		        $all_system_users_from_db = User::all()->where('email', '<>', Auth::user()->email)->toArray();
		       
		        return view('layouts.adminIndex',compact('all_system_users_from_db'));
		    }



}
