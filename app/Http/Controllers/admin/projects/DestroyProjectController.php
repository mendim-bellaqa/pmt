<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class DestroyProjectController extends Controller
{
    public function destroy(Project $project)
    {
        // Delete the project from the database
        $project->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
