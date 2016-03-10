@extends('app/index')

@section('content')
<div>
	<!--<a href="{!!route('posts')!!}">Publish</a>&nbsp;&nbsp;&nbsp;<a href="{!!route('posts.unpublished')!!}">Unpublish</a>-->
	{!!link_to_route('posts', 'Published')!!}&nbsp;&nbsp;&nbsp;{!!link_to_route('posts.unpublished', 'Unpublished')!!}
</div>
	@foreach($posts as $post)
		<article>
			<h2>{{$post -> title}}</h2>
			<p>{!!$post -> excerpt!!}</p>
			<p>published: {{$post -> published_at}}</p>
		</article>	
	@endforeach

@stop