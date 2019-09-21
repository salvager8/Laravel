<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;

class PagesController extends Controller
{
    public function index()
    {;
        $allProjects = Project::all();
        return view('projects.index', compact('allProjects'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => 'required'
        ]);
        Project::create($attributes);
        return redirect('/projects');
    }

    public function edit(Project $project)
    { 
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(request(['title','description']));
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
       $project->delete();
       $allProjects = Project::all();
       return view('projects.index', compact('allProjects'));
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
