<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $postModel)
	{	
		$posts = $postModel -> getPublishedPost();
		
		return view('post/index', ['posts' => $posts]);
	}

}