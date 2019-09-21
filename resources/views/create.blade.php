@extends('layout')

@section('content')
<h1 class="title">Create a New Project</h1>

<form method="POST" action="/projects">
    @csrf

    <div class="field">
        <label class="label" for="title">Project Title</label>

        <div class="control">
            <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Project Description</label>

        <div class="control">
            <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" value="{{ old('description') }}"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button">Create Project</button>
        </div>
    </div>

    @include('errors')
</form>
@endsection