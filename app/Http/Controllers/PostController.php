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
		
		return view('post.index', ['posts' => $posts]);
	}
	
	public function getUnPublishedPosts(Post $postModel)
	{
		$posts = $postModel -> getUnPublishedPosts();
		
		return view('post.index', ['posts' => $posts]);
	}
	
	public function store(Post $postModel, Request $request)
	{
		//dd($request -> all());
		$postModel -> create($request -> all());
		return redirect() -> route('posts');
	}
	
	public function create()
	{
		return view('post.create');
	}
	
	public function destroy(Post $postModel, $id)
	{
		$postModel -> destroy($id);
		return redirect() -> route('posts');
	}
	
	public function update()
	{
		
	}
	
	public function show(Post $postModel, $id)
	{
		$post = $postModel -> find($id);
		return view('post.show', ['post' => $post]);
	}
	
	public function edit()
	{
		
	}

}