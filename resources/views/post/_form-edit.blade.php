<div class="form-group">
	{!!Form::label('slug')!!}
	{!!Form::text('slug', $post -> slug, ['class' => 'form-control'])!!}
</div>		
<div class="form-group">
	{!!Form::label('title')!!}
	{!!Form::text('title', $post -> title, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('excerpt')!!}
	{!!Form::textarea('excerpt', $post -> excerpt, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('content')!!}
	{!!Form::textarea('content', $post -> content, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('published')!!}
	{!!Form::checkbox('published', 1, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('published_at')!!}
	{!!Form::input('date', 'published_at', date('Y-m-d H:i:s'), ['class' => 'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::submit('Save', ['class' => 'btn btn-primary'])!!}
</div>