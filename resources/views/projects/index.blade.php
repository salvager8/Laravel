@extends('layout')

@section('content')

<body>
    <h1 class="title">Projects</h1> 

    @foreach($allProjects as $project)
        <li>
        	<a href="/projects/{{ $project->id }}">
        		{{ $project->title }}        		
        	</a>
        </li>
    @endforeach   

@endsection