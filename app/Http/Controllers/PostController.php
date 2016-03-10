<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $postModel)
	{	
		$posts = $postModel -> getPublishedPosts();
		
		return view('post/index', ['posts' => $posts]);
	}
	
	public function getUnPublishedPosts(Post $postModel)
	{
		$posts = $postModel -> getUnPublishedPosts();
		
		return view('post/index', ['posts' => $posts]);
	}
	
	public function store(Post $postModel, Request $request)
	{
		//dd($request -> all());
		$postModel -> create($request -> all());
		return redirect() -> route('posts');
	}
	
	public function create()
	{
		return view('post/create');
	}
	
	public function destroy()
	{
		
	}
	
	public function update()
	{
		
	}
	
	public function show()
	{
		
	}
	
	public function edit()
	{
		
	}

}