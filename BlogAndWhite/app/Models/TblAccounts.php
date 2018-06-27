<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblAccounts extends Model {

	public static function get_accounts(){
		$query = \DB::table('accounts AS a')
		return $query;
	}

	public static function get_enabled_accounts(){
		$query = \DB::table('accounts AS a')
				->where('status','=','1')
				->count();
		return $query;
	}	

	public static function get_disabled_accounts(){
		$query = \DB::table('accounts AS a')
				->where('status','=','0')
				->count();
		return $query;
	}
}
