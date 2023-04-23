<?php

namespace App\Http\Controllers\admin\projects;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
          {
          $validatedData = $request->validate([
          'name' => 'required|max:255',
          'description' => 'required',
          ]);

          $project = new Project();
          $project->name = $request->name;
          $project->description = $request->description;
          $project->save();

          return redirect()->route('admin.dashboard')->with('success', 'Project created successfully.');
          }

}
