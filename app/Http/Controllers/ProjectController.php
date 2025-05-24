<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function featured()
    {
        return view('home', [
            'projects' => Project::latest()->limit(3)->get(),
        ]);
    }

    public function tutorial()
    {
        $allProjects = Project::all();

        $projects = $allProjects->groupBy('skill_level_required');

        return view('tutorial', [
            'beginner_projects' => $projects->get('beginner', collect())->take(3),
            'intermediate_projects' => $projects->get('intermediate', collect())->take(3),
            'advanced_projects' => $projects->get('advanced', collect())->take(3),
        ]);
    }

    public function recommendation()
    {
        // Will be made soon
        return view('recommendation', []);
    }

    public function project_details($id)
    {
        return view('project-details', [
            'project' => Project::find($id),
        ]);
    }
}
