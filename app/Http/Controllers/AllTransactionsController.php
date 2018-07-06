<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;
use DB;

class AllTransactionsController extends Controller
{
    
	public function	get_all_transactions(Request $request){


		$all_transactions = $this->find_transactions_between();

        return view('adminpages.allTransactions', compact('all_transactions'));
	}

    public function get_some_transactions(Request $request){

    	$all_transactions = $this->find_transactions_between($request->start_date, $request->end_date);

        return view('adminpages.allTransactions', compact('all_transactions'));

    }

     


    public function find_transactions_between( $start_date = '1970-01-01', $end_date = '2030-01-01' )
    {

		$all_transactions = DB::table('users')
							->join('accounts',   'accounts.user_id',  '=', 'users.id')
							->join('transactions',   'accounts.id',  '=', 'transactions.reciever_account')
							->select(
								'users.id','users.fname','users.lname', 
								'account_name','account_number as reciever_acct_number','account_type','accounts.id as accountId',
								'transactions.amount','transactions.created_at')
							->where([
								['transactions.created_at', '>', $start_date ],
								['transactions.created_at', '<', $end_date ]
							])
							->get();

        return $all_transactions;
    }

	

}
