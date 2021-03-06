<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use App\Project;

class PagesTasksController extends Controller
{
	public function store(Project $project)
    {
    	$attributes = request()->validate(['description' => 'required']);
   		$project->addTask(request($attributes));
   		
   		return back();
    }

    public function update(Task $task)
    {
    	$task->update([
    		'completed' => request()->has('completed')
    	]);

    	return back();
    }
}
