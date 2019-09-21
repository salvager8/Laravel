@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">

        @method('PATCH')
        @csrf

        <div class="control">
            <input type="text" class="input" name="title" value="{{ $project->title }}">
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
        
            <div class="control">
                <textarea name="description" class="textarea" cols="30" rows="10">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Update Project</button>
            </div>
        </div>  
    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
        
        @method('DELETE')
        @csrf
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>
@endsection