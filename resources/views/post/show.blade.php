@extends('app/index')

@section('content')

	<article>
			<h2>{{$post -> title}}</h2>
			<p>{!!$post -> content!!}</p>
			<p>published: {{$post -> published_at}}</p>
	</article>	
	
@endsection