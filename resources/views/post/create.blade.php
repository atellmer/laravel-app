@extends('app/index')

@section('content')

	<h1>Create new post</h1>
	{!!Form::open(['route' => 'post.store'])!!}
		@include('post/_form-create')
	{!!Form::close()!!}
	
@endsection