<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class EditProjectController extends Controller
{
    public function index()
    {
        // Retrieve all projects from the database and pass them to the view
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
    

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->save();
        
        return redirect()->route('admin.dashboard')->with('success', 'Project updated successfully.');
    }
    
}
