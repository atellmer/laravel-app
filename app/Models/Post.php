<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
	protected $guarded = ['_token'];
    
	public function getPublishedPosts()
	{
		//$posts = Post::all();
		//dd($posts);
		//$posts = Post::latest('published_at')->get();
		
		/*
		$posts = Post::latest('published_at') 
			-> where('published_at', '<=', Carbon::now()) 
			-> get();
		*/
		
		$posts = $this
					-> latest('published_at')
					-> published()
					-> get();
		
		return $posts;
	}
	
	public function getUnPublishedPosts()
	{

		$posts = $this
					-> latest('published_at')
					-> unPublished()
					-> get();
		
		return $posts;
	}
	
	public function scopePublished($query)
	{
		$query 
			-> where('published_at', '<=', Carbon::now()) 
			-> where('published', '=', 1);
	}
	
	public function scopeUnPublished($query)
	{
		$query 
			-> where('published_at', '=>', Carbon::now()) 
			-> orWhere('published', '=', 0);
	}

}