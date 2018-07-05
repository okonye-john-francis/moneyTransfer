<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class AllTransactionsController extends Controller
{
    
 
     public function get_range_of_requested_transactions()
		    {
		        
		        $all_system_users_from_db = User::all()->where('id', '<>', Auth::user()->id)->where('created_by', '=', '')->toArray();
		       
		        return view('adminpages.systemUsers',compact('all_system_users_from_db'));
		    }




}
