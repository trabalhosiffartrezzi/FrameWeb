<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    public function index(){
    	$posts = Post::all();
    	return view('site.index', compact('posts'));
    }
public function post($id){
		$post= Post::find($id);

		return view('site.post', compact("post"));
	}
}
