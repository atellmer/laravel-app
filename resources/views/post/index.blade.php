@extends('app/index')

@section('content')

	@foreach($posts as $post)
		<article style="margin-top:30px;">
			<a href="post/{{$post -> id}}"><h2 style="margin:10px;">{{$post -> title}}</h2></a>
			<p style="margin:10px;">{!!$post -> excerpt!!}</p>
			<p style="margin:10px;">published: {{$post -> published_at}}</p>		
			{{Form::open(array('route' => array('post.edit', $post -> id), 'method' => 'get'))}}
        		<button type="submit" style="float:left; margin:10px;" class="btn btn-primary btn-mini">Edit</button>
        	{{Form::close()}}	
			{{Form::open(array('route' => array('post.destroy', $post -> id), 'method' => 'delete'))}}
        		<button type="submit" style="margin:10px;" class="btn btn-danger btn-mini">Delete</button>
        	{{Form::close()}}    
		</article>	
	@endforeach

@endsection