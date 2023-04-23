<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Retrieve all projects from the database and pass them to the view
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
    }
    
}
