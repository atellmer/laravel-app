@extends('app/index')

@section('content')

	@foreach($posts as $post)
		<article>
			<a href="post/{{$post -> id}}"><h2>{{$post -> title}}</h2></a>
			<p>{!!$post -> excerpt!!}</p>
			<p>published: {{$post -> published_at}}</p>			
			{{Form::open(array('route' => array('post.destroy', $post -> id), 'method' => 'delete'))}}
        		<button type="submit" class="btn btn-danger btn-mini">Delete</button>
        	{{Form::close()}}
		</article>	
	@endforeach

@endsection