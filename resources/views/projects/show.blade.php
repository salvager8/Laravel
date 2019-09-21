@extends('layout')

@section('content')
	<h1 class="title">{{ $project->title }}</h1>

	<div class="content">{{ $project->description }}</div>

	@if ($project->tasks->count())
	<div class="box">
		@foreach ($project->tasks as $task)
			<div>
				<form method="POST" action="/tasks/{{ $task->id }}">
					@method('PATCH')
					@csrf

					<label class="checkbox" for="completed">
					  <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
					  {{ $task->description }}
					</label>
				</form>
			</div>
		
		@endforeach
	</div>
	@endif

	<p>
		<a href="/projects/{{ $project->id }}/edit">Edit</a>
	</p>

	<form class="box" method="POST" action="/projects/{{ $project->id }}/task">
		@csrf
		<div class="field">
			<label class="label" for="description">New Task</label>
			<div class="control">
				<input class="input" type="text" name="description" placeholder="New Task"></input>
			</div>
		</div>

		<div class="control">
		  <button type="submit" class="button is-primary">Add Task</button>
		</div>
	</form>

	@include('errors')
@endsection
