<div class="{{ $errors->has('title') || $errors->has('description') ? 'notification is-danger' : '' }}">
	<ul>
	    @foreach($errors->all() as $error)
	        <li>{{ $error }}</li>
	    @endforeach
	</ul>
</div>