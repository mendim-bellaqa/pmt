<?php

namespace App\Http\Controllers\admin\projects;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Retrieve all projects from the database and pass them to the view
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'product_id' => 'nullable|exists:products,id',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->product_id = $request->product_id;
        $project->save();

        return redirect()->route('dashboard')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    
}
