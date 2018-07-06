<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Accounts;
use APP\Transactions;
use Auth;
use DB;

class SystemUsersController extends Controller
{
    

       public function get_all_system_users()
		    {
		        
		        $all_system_users_from_db = User::all()->where('id', '<>', Auth::user()->id)->where('created_by', '=', '')->toArray();
		       
		        return view('adminpages.systemUsers',compact('all_system_users_from_db'));
		    }


	   public function get_all_details_for_selected_user($id)
		    {
		        
		        $selected_user_contact_list = User::all()
		                                      ->where('created_by', '=', $id)
		                                      ->toArray();

		        $selected_user_details = User::all()
		                                 ->where('id', '=', $id)
		                                 ->toArray();

		        $accounts_owned_by_selected_user =  Accounts::all()
		                                            ->where('user_id', '=', $id)
		                                            ->toArray();

		        $selected_user_transactions = DB::table('users')
		                                      ->where('created_by', '=', $id)
		                                      ->join('accounts',   'accounts.user_id',  '=', 'users.id')
		                                      ->join('transactions',   'accounts.id',  '=', 'transactions.reciever_account')
		                                      ->select('users.id','users.fname','users.lname', 'accounts.account_name','accounts.account_number','accounts.account_type','accounts.id as accountId','transactions.amount','transactions.created_at')
		                                      ->get()->toArray();

		        return view('adminpages.selectedUserDetails',compact('selected_user_contact_list','selected_user_details','accounts_owned_by_selected_user','id','selected_user_transactions'));
		    }
 

        public function block_selected_user($id)
		    {
		        
		        $selected_user = User::find($id);
		        $selected_user->is_active = 0;
                $selected_user->save();

		     
		     return $this->get_all_details_for_selected_user($id)
		               
		                 ->with('success', 'User successfully blocked');
		     
		    }

	     public function get_all_accounts_for_selected_contact($id)
		    {
		        
		        $selected_contact_account_details =  Accounts::all()
		                                             ->where('user_id', '=', $id)
		                                             ->toArray();

		        $selected_contact_details = User::all()
		                                    ->where('id', '=', $id)
		                                    ->toArray();
		     
		     return view('adminpages.selectedContactDetails',compact('selected_contact_account_details','selected_contact_details'));
		     
		    }




}
