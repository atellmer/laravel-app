<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
	<nav>
		{!!link_to_route('posts', 'Published')!!}
		&nbsp;&nbsp;&nbsp;
		{!!link_to_route('posts.unpublished', 'Unpublished')!!}
		&nbsp;&nbsp;&nbsp;
		{!!link_to_route('post.create', 'New')!!}
	</nav>
		@yield('content')
	</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>