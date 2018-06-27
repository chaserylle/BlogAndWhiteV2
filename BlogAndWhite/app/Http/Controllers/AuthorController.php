<?php 
namespace App\Http\Controllers;
use App\Models\TblPosts;
use App\Models\TblAccounts;

class AuthorController extends Controller {
	
	public function index(){
		$data=[];
		$data['posts']=TblPosts::posts_info();
		return view('author_createblog', $data);
	}

	public function manage_posts(){
		$data=[];
		$data['posts']=TblPosts::posts_info();
		return view('managePosts', $data);
	}

	public static function get_posts(){
		$posts=TblPosts::get_posts();
		echo(json_encode($posts));
	}

	public static function posts_info(){
		$posts=TblPosts::posts_info();
		echo(json_encode($posts));
	}

	public static function manage_accounts(){
		$data=[];
		$data['accounts']=TblAccounts::get_accounts();
		return view('manageAccounts', $data);
	}

}