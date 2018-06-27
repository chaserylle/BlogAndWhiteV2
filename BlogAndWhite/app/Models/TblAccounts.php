<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblAccounts extends Model {

	public static function get_accounts()
	{
		$query = \DB::table('accounts AS a')
				->get();
		return $query;
	}	
}
