<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TblComments extends Model {

	public static function get_comments(){
		$query = \DB::table('comments AS c')
				->leftJoin('posts AS p', 'p.post_id', '=', 'c.post_id')
				->select('c.name', 'p.title', 'c.comment_content', 'c.date_commented', 'c.status')
				->get();
		return $query;
	}
}
