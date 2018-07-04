<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Accounts;
use Auth;

class SystemUsersController extends Controller
{
    

       public function get_all_system_users()
		    {
		        
		        $all_system_users_from_db = User::all()->where('id', '<>', Auth::user()->id)->where('created_by', '=', '')->toArray();
		       
		        return view('adminpages.systemUsers',compact('all_system_users_from_db'));
		    }


	   public function get_all_contacts_for_selected_user($id)
		    {
		        
		        $selected_user_contact_list = User::all()->where('created_by', '=', $id)->toArray();
		        $selected_user_details = User::all()->where('id', '=', $id)->toArray();
		        $accounts_owned_by_selected_user =  Accounts::all()->where('user_id', '=', $id)->toArray();
		       
		        return view('adminpages.selectedUserDetails',compact('selected_user_contact_list','selected_user_details','accounts_owned_by_selected_user'));
		    }



}
