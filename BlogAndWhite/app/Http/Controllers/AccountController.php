<?php namespace App\Http\Controllers;
use App\Models\TblAccounts;

class AccountController extends Controller {
	
	public function index(){
		$data=[];
		$data['accounts']=TblAccounts::get_accounts();
		return view('blog', $data);
	}

	public static function get_accounts(){
		$posts=TblAccounts::get_accounts();
		echo(json_encode($posts));
	}

}