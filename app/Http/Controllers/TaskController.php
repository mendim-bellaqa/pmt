<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;

class TaskController extends Controller
{
    public function create(Project $project)
    {
        return view('projects.tasks.create', compact('project'));
    }

    public function store(Request $request, $project_id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required|date_format:Y-m-d H:i:s',
        ]);

        $task = new Task([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'deadline' => $request->get('deadline'),
        ]);

        $project->tasks()->save($task);

        return redirect()->route('admin.dashboard')->with('success', 'Task added successfully.');
    }
}
