@extends('app/index')

@section('content')

	<h1>Edit post</h1>
	{!!Form::open(array('route' => array('post.update', $post -> id), 'method' => 'put'))!!}
		@include('post/_form-edit')
	{!!Form::close()!!}
	
@endsection